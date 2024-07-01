<?php namespace Emielliefhebber\Seoplugin\Models;

use Model;

/**
 * Sitemap Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Sitemap extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    protected $table = 'emielliefhebber_seoplugin_sitemaps';
    protected $fillable = ['url', 'lastmod'];

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
