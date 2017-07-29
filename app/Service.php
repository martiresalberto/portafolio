<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     protected $table = 'services';

	protected $fillable = ['name', 'slug', 'description',  'image',  'category_id'];

    
    // Relation with Category
    public function category()
    {
        return $this->belongsTo('prueba\Category');
    }
}
