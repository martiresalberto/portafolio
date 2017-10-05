<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Service;
use App\About;



class portfolioController extends Controller
{
  	public function index()
      
       {	
          
          $services = Service::all();
    	   $products = Product::all();
          $abouts = About::all();
        
    	  //dd($certification);
    	
    	 return view('Portfolio.index',compact('services','products','abouts'));
      
       }
    
public function show($slug)
  
         {
                    
                 $product = Product::where('slug', $slug)->first();
                 //dd($product);

                 return view('Portfolio.show', compact('product'));
        }


public function send()
{
    //
}
  
}
