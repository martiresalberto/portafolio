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
				'slug' 			=> 'HTML5',
				'description' 	=> 'HTML5 es la última versión de HTML.El término representa dos conceptos diferentes:Se trata de una nueva versión con nuevos elementos, atributos ',
				'image' 		=> 'http://gdurl.com/LnQQ',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'CSS3',
				'slug' 			=> 'CSS3',
				'description' 	=> 'es un lenguaje usado para definir la presentación de un documento estructurado escrito en HTML.',
				'image' 		=> 'http://gdurl.com/X-0u',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'JAVASCRIP',
				'slug' 			=> 'JAVASCRIP',
				'description' 	=> 'es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,​ basado en prototipos, imperativo, débilmente tipado y dinámico.
',
				'image' 		=> 'http://gdurl.com/s_d6',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'BOOTSTRAP',
				'slug' 			=> 'BOOTSTRAP',
				'description' 	=> 'es un framework o conjunto de herramientas de Código abierto para diseño de sitios y aplicaciones web.',
				'image'         => 'http://gdurl.com/h1Qh',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'PHP',
				'slug' 			=> 'PHP',
				'description' 	=> 'Es un lenguaje de programación interpretado, diseñado originalmente para la creación de páginas web dinámicas.',
				'image' 		=> 'http://gdurl.com/6HtE',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'LARAVEL 5.3 y 5.4',
				'slug' 			=> 'LARAVEL 5.3 y 5.4',
				'description' 	=> 'Es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5 y PHP 7.',
				'image'         => 'http://gdurl.com/MmJH',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
		
	);

	Service::insert($data);
    }
}
