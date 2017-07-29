<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Certification extends Model
{
     protected $table = 'certifications';

	protected $fillable = ['name', 'slug', 'description',  'image',  'category_id'];

    
    // Relation with Category
    public function category()
    {
        return $this->belongsTo('prueba\Category');
    }
}
