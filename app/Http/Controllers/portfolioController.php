<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Service;
use App\About;
use App\Certification;



class portfolioController extends Controller

{

  public function index()

   {	
  
      $services = Service::all();  

      // $services = Service::join('users','services.user_id','=','users.id')
      // ->select('services.id','services.name','services.description','services.imgServicio','users.name as nombre_usuario')
      // ->orderBy('services.id', 'desc')->paginate(3);
      
      $certification = Certification::all();
      
      // $certification = Certification::join('users','certifications.user_id','=','users.id')
      // ->select('certifications.id','certifications.name','certifications.description','certifications.imgCertificacion','users.name as nombre_usuario')
      // ->orderBy('certifications.id', 'desc');

      $products = Product::all();

      // $products = Product::join('users','products.user_id','=','users.id')
      // ->select('products.id','products.name','products.description','products.price','products.created_at','products.imgProducto','users.name as nombre_usuario')
      // ->orderBy('products.id', 'desc');
     
      $users = User::all();

      // $abouts = About::join('users','abouts.user_id','=','users.id')
      // ->select('abouts.id','abouts.name','abouts.description','users.imgPerfil')
      // ->orderBy('abouts.id', 'desc')->paginate(3);

       // dd($abouts);

    return view('Portfolio.index',compact('services','products','users','certification'));

   }
    

    
}
