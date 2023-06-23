<?php namespace System\Console;

use App;
use Illuminate\Console\Command;
use System\Classes\UpdateManager;
use System\Classes\PluginManager;

/**
 * PluginRefresh refreshes a plugin or the app directory.
 *
 * This destroys all database tables for a specific plugin, then builds them up again.
 * It is a great way for developers to debug and develop new plugins.
 *
 * @package october\system
 * @author Alexey Bobkov, Samuel Georges
 */
class PluginRefresh extends Command
{
    use \Illuminate\Console\ConfirmableTrait;

    /**
     * @var string signature for the command
     */
    protected $signature = 'plugin:refresh
        {namespace : App or Plugin Namespace. <info>(eg: Acme.Blog)</info>}
        {--f|force : Force the operation to run.}
        {--rollback=false : Specify a version to rollback to, otherwise rollback to the beginning.}';

    /**
     * @var string description of the console command
     */
    protected $description = 'Rollback and migrate database tables for a plugin.';

    /**
     * handle executes the console command
     */
    public function handle()
    {
        if ($this->isAppNamespace()) {
            $this->handleApp();
        }
        else {
            $this->handlePlugin();
        }
    }

    /**
     * handleApp refreshes the app namespace
     *
     * @todo this method should be properly isolated to the "App" namespace, it currently
     * relies on a file not being found to protect tables and if the internals are ever
     * made smarter to locate missing migration files, it could be seriously problematic.
     */
    public function handleApp()
    {
        $message = "This will DESTROY database tables for the app directory.";
        if (!$this->confirmToProceed($message)) {
            return;
        }

        // This rollback depends on vendor logic, which may be unsafe (see below)
        $message = "Do not run this command without a backup of the database.";
        if (!$this->confirmToProceed($message)) {
            return;
        }

        $this->components->info('Rolling back app migrations.');

        // This method attempts to roll back everything, as per Laravel monolith logic,
        // so silence the command to ignore "Migration not found" errors.
        $migrator = App::make('migrator');

        // @todo Potential issue here since a migration file collision could unintentionally
        // rollback a core module migration. Ideally the migration table needs to be extended
        // to include a module/namespace column to correctly isolate migrations from each other.
        // $migrator->setOutput($this->output);

        $migrator->reset((array) app_path('database/migrations'));

        if (!$this->isRollback()) {
            $manager = UpdateManager::instance()->setNotesCommand($this);
            $manager->migrateApp();
            $manager->seedApp();
        }
    }

    /**
     * handlePlugin refreshes a plugin
     */
    public function handlePlugin()
    {
        $manager = PluginManager::instance();
        $name = $manager->normalizeIdentifier($this->argument('namespace'));

        if (!$manager->hasPlugin($name)) {
            return $this->output->error("Unable to find plugin [{$name}]");
        }

        $message = "This will DESTROY database tables for plugin [{$name}].";
        if ($toVersion = $this->option('rollback')) {
            $message = "This will DESTROY database tables for plugin [{$name}] up to version [{$toVersion}].";
        }

        if (!$this->confirmToProceed($message)) {
            return;
        }

        if ($this->isRollback()) {
            return $this->handleRollback($name);
        }
        else {
            return $this->handleRefresh($name);
        }
    }

    /**
     * handleRollback performs a database rollback
     */
    protected function handleRefresh($name)
    {
        // Rollback plugin migration
        $manager = UpdateManager::instance()->setNotesCommand($this);
        $manager->rollbackPlugin($name);

        // Rerun migration
        $this->line('Reinstalling plugin...');
        $manager->updatePlugin($name);
    }

    /**
     * handleRollback performs a database rollback
     */
    protected function handleRollback($name)
    {
        // Rollback plugin migration
        $manager = UpdateManager::instance()->setNotesCommand($this);

        if ($toVersion = $this->option('rollback')) {
            $manager->rollbackPluginToVersion($name, $toVersion);
        }
        else {
            $manager->rollbackPlugin($name);
        }
    }

    /**
     * getDefaultConfirmCallback specifies the default confirmation callback
     */
    protected function getDefaultConfirmCallback()
    {
        return function () {
            return true;
        };
    }

    /**
     * isRollback overcomes an issue where Laravel no longer provides an optional option
     */
    protected function isRollback(): bool
    {
        return $this->option('rollback') !== 'false';
    }

    /**
     * isAppNamespace
     */
    protected function isAppNamespace(): bool
    {
        return mb_strtolower(trim($this->argument('namespace'))) === 'app';
    }
}
