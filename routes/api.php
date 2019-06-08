<?php

use Illuminate\Http\Request;


Route::apiResource('/perfil', 'API\MiPerfilController');

Route::apiResource('/habilidad','API\HabilidadesController');

Route::apiResource('/portafolio','API\MiPortafolioController');

Route::apiResource('/acercademi','API\AcercademiController');

Route::apiResource('/certificado','API\CertificacionesController');
 


