<?php

Route::get('/','portfolioController@index')->name('home');

Route::get('detalle-portafolio/{slug}','portfolioController@show')->name('detalle-portafolio');

Route::get('detalle/{slug}','portfolioController@showCertificate')->name('detalle-certificacion');


Route::post('message', function(){
    
// enviar un correo
	$data = request()->all();
	Mail::send('mails.message',$data, function($message) use ($data){
	$message->from($data['email'],$data['name'])
	        ->to('martiresalbertoorozcogonzalez@gmail.com','Alberto')
	        ->subject($data['subject']);
	});

    // responderal usuario
    return back()->with('flash', $data['name'] . ',Tu mensaje a sido recibido');

  })->name('messages');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('{path}',"HomeController@index")->where( 'path', '([A-z\d-\/_.]+)?' );