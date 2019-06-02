<?php

namespace App;

use App\About;
use App\Certification;
use App\Product;
use App\Service;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function product()
    {
         return $this->hasMany('App/Product');
    }


    public function abouts()
    {
         return $this->hasMany('App/About');
    }

  
    public function habilidades()
    {
         return $this->hasMany('App/Service');
    }


    public function certificaciones()
    {
        return $this->hasMany('App/Certification');
    }

}
