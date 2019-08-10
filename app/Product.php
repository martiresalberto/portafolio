<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = ['name', 'description','url','imgProducto','price', 'user_id'];

  // Relation with Category
    public function user()
    {
        return $this->belongTo('App\User');
    }
}
