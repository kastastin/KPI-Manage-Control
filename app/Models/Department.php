<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use CrudTrait;

    protected $table = 'department';
    protected $fillable = [
        'name',
        'faculty_id',
        'short_name',
        'password',
    ];

    function faculty() {
        return $this->belongsTo('App\Models\Faculty');
    }

}