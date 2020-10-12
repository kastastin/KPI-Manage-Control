<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teachers;
use App\Models\Disciplines;
use App\Models\Group;

class Schedule extends Model
{
    use CrudTrait;

    protected $table = 'schedule';
    protected $fillable = [       
        'name',
        'teachers_id',
        'disciplines_id',
        'group_id',
        'time',
        'classroom',
        'password',
    ];
    
    function teachers() {
        return $this->belongsTo('App\Models\Teachers');
    }

    function disciplines() {
        return $this->belongsTo('App\Models\Disciplines');
    }

    function group() {
        return $this->belongsTo('App\Models\Group');
    }
}