<?php

Route::get('/','portfolioController@index')->name('home');

Route::get('detalle-portafolio/{slug}','portfolioController@show')->name('detalle-portafolio');

Route::get('certificaciones','CertifiController@index')->name('certificaciones');

Route::get('detalle/{slug}','CertifiController@show')->name('detalle-certificacion');

Route::resource('send','MailController');
