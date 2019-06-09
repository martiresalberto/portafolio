<?php

use Illuminate\Database\Seeder;
use App\Certification;

class CertificationTableSeeder extends Seeder
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
				'name' 			=> 'E-COMMERCE',
				'description' 	=> 'El e-commerce consiste en la distribución, venta, compra, marketing y suministro de información de productos o servicios a través de Internet. Originalmente el término se aplicaba a la realización de transacciones mediante medios electrónicos, como por ejemplo el intercambio electrónico de datos.',
				'imgCertificacion' 		=> 'default.png',
				'user_id' => 1
				
			]	
			
		);

		Certification::insert($data);
    }
}
