<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class About extends Model
{
     protected $table = 'abouts';

	protected $fillable = ['name', 'slug', 'description','user_id'];



	 public function user()
    {
         return $this->belongsTo('App/User');
    }
}
