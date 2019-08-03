<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     protected $table = 'services';

	protected $fillable = ['name', 'description',  'imgServicio', 'user_id'];

    
    // Relation with Category
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
