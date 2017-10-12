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
				'name' 			=> 'JAVASCRIPT',
				'slug' 			=> 'JAVASCRIPT',
				'description' 	=> 'es un lenguaje de programación interpretado, diale...',
				'image' 		=> 'http://gdurl.com/s_d6',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			
	
			
		);

		Service::insert($data);
    }
}
