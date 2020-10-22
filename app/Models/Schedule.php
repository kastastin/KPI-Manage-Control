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

    protected $appends = [
        'group_name',
        'disciplines_name',
        'teachers_name'
    ];

    public function getGroupNameAttribute()
    {
        return $this->group()->first()->name ?? "-";
    }

    public function getDisciplinesNameAttribute()
    {
        return $this->disciplines()->first()->name ?? "-";
    }

    public function getTeachersNameAttribute()
    {
        return $this->teachers()->first()->name ?? "-";
    }

    
    
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