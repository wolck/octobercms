<?php namespace Emiel\Reptiel\Models;

use Model;

/**
 * Model
 */
class Reptiel extends Model
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
    public $table = 'emiel_reptiel_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
