<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceTableSeeder extends Seeder
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
				'name' 			=> 'HTML5',
				'description' 	=> 'HTML5 es la última versión de HTML.El término representa dos conceptos diferentes:Se trata de una nueva versión con nuevos elementos, atributos ',
				'imgServicio' 		=> 'http://gdurl.com/LnQQ',
				'user_id'      =>1,
				
			],
			[
				'name' 			=> 'CSS3',
				'description' 	=> 'es un lenguaje usado para definir la presentación de un documento estructurado escrito en HTML.',
				'imgServicio' 		=> 'http://gdurl.com/X-0u',
				'user_id'      =>1,
			],
			[
				'name' 			=> 'JAVASCRIP',
				'description' 	=> 'es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,​ basado en prototipos, imperativo, débilmente tipado y dinámico.
',
				'imgServicio' 		=> 'http://gdurl.com/s_d6',
				'user_id'      =>1,
			],
			[
				'name' 			=> 'BOOTSTRAP',
				'description' 	=> 'es un framework o conjunto de herramientas de Código abierto para diseño de sitios y aplicaciones web.',
				'imgServicio'         => 'http://gdurl.com/h1Qh',
				'user_id'      =>1,
			],
			[
				'name' 			=> 'PHP',
				'description' 	=> 'Es un lenguaje de programación interpretado, diseñado originalmente para la creación de páginas web dinámicas.',
				'imgServicio' 		=> 'http://gdurl.com/6HtE',
				'user_id'      =>1,
			],
			[
				'name' 			=> 'LARAVEL 5.4 , 5.5 , 5.6, 5.7 y 5.8',
				'description' 	=> 'Es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5 y PHP 7.',
				'imgServicio'         => 'http://gdurl.com/MmJH',
				'user_id'      =>1,
			],
		
	);

	Service::insert($data);

    }
}
