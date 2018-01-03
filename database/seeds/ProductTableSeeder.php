<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
				'name' 			=> 'Portafolio',
				'slug' 			=> 'Portafolio',
				'description' 	=> 'Es un portafolio creado desde una plantilla de Bootstrap, con el framework Laravel 5.4 el lenguaje de programacion PHP.',
				'price' 		=> 1800.00,
				'image' 		=> 'http://gdurl.com/cAnI',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				
			],
			[
				'name' 			=> 'Tienda-Online',
				'slug' 			=> 'Tienda-Online',
				'description' 	=> 'Es una tienda online creada desde 0 con Laravel 5.4 ,php,bootstrap y Javascrip.',
				'price' 		=> 1800.00,
				'image' 		=> 'http://gdurl.com/o-Ca',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				
			],
			
			
	
			
		);

		Product::insert($data);
    }
}
