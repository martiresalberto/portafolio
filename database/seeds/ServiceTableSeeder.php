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
			'description' 	=> 'HTML5 es la última versión de HTML.El término representa dos conceptos diferentes:Se trata de una nueva versión con nuevos elementos, atributos ' ,
			'image' 		=> 'http://gdurl.com/LnQQ',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime,
			'category_id' 	=> 1
		],
		[
			'name' 			=> 'CSS3',
			'slug' 			=> 'CSS3',
			'description' 	=> 'es un lenguaje usado para definir la presentación de un documento estructurado escrito en HTML.' ,
			'image' 		=> 'http://gdurl.com/X-0u',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime,
			'category_id' 	=> 2
		],
		[
			'name' 			=> 'JAVASCRIPT',
			'slug' 			=> 'JAVASCRIPT',
			'description' 	=> 'es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,​ basado en prototipos, imperativo, débilmente tipado y dinámico.' ,
			'image' 		=> 'http://gdurl.com/LnQQ',
			'created_at' 	=> new DateTime,
			'updated_at' 	=> new DateTime,
			'category_id' 	=> 3
		],
		

		
	);

	Service::insert($data);
    }
}
