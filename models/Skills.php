<?php namespace KurtJensen\Workers\Models;

use Model;

/**
 * Skills Model
 */
class Skills extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kurtjensen_workers_skills';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
   /* public $belongsToMany = [
        'users' => ['Rainlab\User\Models\User',                  'table' => 'shahiemseymor_assigned_roles',  'key' => 'role_id']
        ];
*/
}
