<?php namespace Emiel\Slangen\Models;

use Model;

/**
 * Model
 */
class Slangen extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'emiel_slangen_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
