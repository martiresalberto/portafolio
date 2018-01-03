<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = array(
			[
				'name' => 'DESARROLLADOR WEB | FRONT-END | BACK=END', 
				'slug' => 'DESARROLLADOR WEB | FRONT-END | BACK=END-1', 
				'description' => 'Soy un programador Y desarrollador web con conocimientos básicos para la creación de paginas web soy muy apasionado y me entrego al máximo en todos los proyectos a continuación detalle mis habilidades . *FRONT-END: Html5 , Css3 , Bootstrap , y Plantillas. *BACKEND:Php , Javascript y el Framework LARAVEL en su versión 5.2, 5.3 , 5.4.*Datos:Sql , Mysql', 
				'image' => 'http://gdurl.com/8RZz'
			],
			
		);

		About::insert($data);
    }
}
