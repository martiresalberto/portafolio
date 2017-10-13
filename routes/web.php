<?php

Route::get('/','portfolioController@index')->name('home');

Route::get('detalle-portafolio/{slug}','portfolioController@show')->name('detalle-portafolio');

Route::get('detalle/{slug}','portfolioController@showCertificate')->name('detalle-certificacion');


Route::resource('send','MailController');
