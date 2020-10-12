<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

use App\Models\Schedule;

class Teachers extends Model
{
    use CrudTrait;

    protected $table = 'teachers';
    protected $fillable = [       
        'name',
        'surname',
        'email',
        'phone',
        'password',
    ];
   public function schedule()
   {
        return $this->hasOne('App\Models\Schedule');
    }
}