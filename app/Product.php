<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = ['name', 'slug', 'description', 'imgProducto','price', 'user_id'];

  // Relation with Category
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
