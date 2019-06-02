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
				'imgProducto' 		=> 'default.jpg',
				'user_id' 		=> 1
			]
			
		);

		Product::insert($data);
    }
}
