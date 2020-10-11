<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty;
use App\Models\Department;

class Group extends Model
{
    use CrudTrait;

    protected $table = 'group';
    protected $fillable = [
        'department_id',
        'name',
        'course',
        'password',
    ];

    function department() {
        return $this->belongsTo('App\Models\Department');
    }

    public function students() {
        return $this->hasOne('App\Models\Students');
    }
}