<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certification;

class CertifiController extends Controller
{
    public function index()
      
       {	
        $Certification = Certification::all();
        //dd($Certification);
    	
    	return view('certificado.index',compact('Certification'));
      
       }

   public function show($slug)
  
 {
            
         $Certification = Certification::where('slug', $slug)->first();
         //dd($product);

         return view('certificado.show', compact('Certification'));
}   
}
