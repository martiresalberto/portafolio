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
			'name' 			=> 'BOOTSTRAP',
			'slug' 			=> 'BOOTSTRAP',
			'description' 	=> 'es un framework o conjunto de herramientas de Código abierto para diseño de sitios y aplicaciones web.' ,
			'image' 		=> 'http://gdurl.com/h1Qh',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime,
			'category_id' 	=> 1
		],
		[
			'name' 			=> 'PHP',
			'slug' 			=> 'PHP',
			'description' 	=> 'es un lenguaje de programación interpretado, diseñado originalmente para la creación de páginas web dinámicas',
			'image' 		=> 'http://gdurl.com/6HtE',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime,
			'category_id' 	=> 1
		],
		[
			'name' 			=> 'LARAVEL',
			'slug' 			=> 'LARAVEL',
			'description' 	=> 'es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5 y PHP 7.',
			'image' 		=> 'http://gdurl.com/MmJH',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime,
			'category_id' 	=> 1
		],

		
	);

	Service::insert($data);
    }
}
