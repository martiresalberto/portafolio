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
				'name' 			=> 'CSS3',
				'slug' 			=> 'CSS3',
				'description' 	=> 'es un lenguaje usado para definir los estilos en la presentación de la pagina',
				'image' 		=> 'http://gdurl.com/X-0u',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			
	
			
		);

		Service::insert($data);
    }
}
