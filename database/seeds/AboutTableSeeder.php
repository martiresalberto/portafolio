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
				'description' => 'Soy un programador Y desarrollador web con conocimientos básicos para la creación de paginas web soy muy apasionado y me entrego al máximo en todos los proyectos a continuación detallo las habilidades que he adquirido a lo largo de 4 anos de estudio y practica. *FRONT-END : Html5 , Css3 , Bootstrap , y Plantillas. *BACKEND : Php , Javascript y el Framework LARAVEL en su versión 5.2, 5.3 , 5.4. y para las bases de datos utilizo *Datos : Sql , Mysql',
                'user_id' => 1 
			]
			
		);

		About::insert($data);
    }
}
