<?php

use Illuminate\Http\Request;

Route::apiResource('/miperfil','API\MiPerfilController');

Route::apiResource('/habilidades','API\HabilidadesController');

Route::apiResource('/portafolio','API\MiPortafolioController');

Route::apiResource('/acercademi','API\AcercademiController');

Route::apiResource('/certificaciones','API\CertificacionesController');
 
