<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty;
use App\Models\Department;
use App\Models\Group;

class Students extends Model
{
    use CrudTrait;

    protected $table = 'students';
    protected $fillable = [
        'group_id',
        'name',
        'email',
        'phone',
        'password',
    ];

    protected $appends = [
        'group_name'
    ];

    public function getGroupNameAttribute()
    {
        return $this->group()->first()->name ?? "-";
    }

    function group() {
        return $this->belongsTo('App\Models\Group');
    }
}