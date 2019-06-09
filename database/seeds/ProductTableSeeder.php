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
				'description' 	=> 'Es un portafolio creado desde una plantilla de Bootstrap, con el framework Laravel 5.4 el lenguaje de programacion PHP.',
				'price' 		=> 1800.00,
				'imgProducto' 		=> 'http://gdurl.com/cAnI',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				
			],
			[
				'name' 			=> 'Tienda-Online',
				'description' 	=> 'Es una tienda online creada desde 0 con Laravel 5.4 ,php,bootstrap y Javascrip.',
				'price' 		=> 1800.00,
				'imgProducto' 		=> 'http://gdurl.com/o-Ca',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				
			],
			
			
	
			
		);
		Product::insert($data);
    }
}
