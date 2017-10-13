<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Service;
use App\About;
use App\Certification;



class portfolioController extends Controller
{
  	public function index()
      
       {	
          
          $Certification = Certification::all();
          $services = Service::all();
    	    $products = Product::all();
          $abouts = About::all();
        
    	  //dd($certification);
    	
    	 return view('Portfolio.index',compact('services','products','abouts','Certification'));
      
       }
    
public function show($slug)
  
         {
                    
                    
                 $product = Product::where('slug', $slug)->first();
                 //dd($product);

                 return view('Portfolio.show', compact('product'));
        }


        public function showCertificate($slug)
        
       {
                  
               $Certification = Certification::where('slug', $slug)->first();
               //dd($product);

               return view('certificado.show', compact('Certification'));
      }

    
    
}
