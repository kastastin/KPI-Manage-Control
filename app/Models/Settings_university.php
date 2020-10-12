<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;


class Settings_university extends Model
{
    use CrudTrait;

    protected $table = 'settings_university';
    protected $fillable = [
        'name',
        'short_name',
        'address',
        'phone',
        'site',
        'password',
    ];
}