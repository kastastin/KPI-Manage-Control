<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty;

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

    public function group() {
        return $this->hasOne('App\Models\Group');
    }

    public function showFacultyName() {
        //$needlink = `/public/admin/faculty/$this->faculty_id/show`;
        $numlink = $this->faculty_id;
        $help = "<a href='/admin/faculty/$numlink/show'>".$this->faculty()->first()->short_name."</a>";
        return $help;
    }
}