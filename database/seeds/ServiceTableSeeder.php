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
		
		
	);

	Service::insert($data);
    }
}
