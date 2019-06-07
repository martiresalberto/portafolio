<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Certification extends Model
{
     protected $table = 'certifications';

	protected $fillable = ['name', 'description',  'imgCertificacion', 'user_id'];

    
    // Relation with Category
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
