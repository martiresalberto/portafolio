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
				'slug' 			=> 'E-COMMERCE',
				'description' 	=> 'El e-commerce consiste en la distribución, venta, compra, marketing y suministro de información de productos o servicios a través de Internet. Originalmente el término se aplicaba a la realización de transacciones mediante medios electrónicos, como por ejemplo el intercambio electrónico de datos.',
				'image' 		=> 'http://gdurl.com/Qhjq',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'ANALITICA WEB',
				'slug' 			=> 'ANALITICA WEB',
				'description' 	=> 'Analítica web es un procedimiento mediante el cual se recaba información relacionada con los usuarios que visitan una página web para realizar un análisis estratégico y optimizar su estadía en el sitio, para lo cual existen varios tipos de herramientas de analítica web, como por ejemplo Google Analytics y Omniture .',
				'image' 		=> 'http://gdurl.com/M0oK',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'INTRODUCCION AL DESARROLLO',
				'slug' 			=> 'INTRODUCCION AL DESARROLLO',
				'description' 	=> 'Un curso nuevo de tipo MOOC, totalmente gratuito y disponible en la Web (curso online), con el que vas a aprender los conceptos básicos del desarrollo de aplicaciones web. Aprende HTML, CSS, JavaScript, PHP... y los principios básicos del diseño, de la usabilidad y de la accesibilidad web.',
				'image' 		=> 'http://gdurl.com/X3Hi',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'MARKETING DIGITAL',
				'slug' 			=> 'MARKETING DIGITAL',
				'description' 	=> 'El marketing digital es la aplicación de las estrategias de comercialización llevadas a cabo en los medios digitales. Todas las técnicas del mundo off-line son imitadas y traducidas a un nuevo mundo, el mundo online. En el ámbito digital aparecen nuevas herramientas como la inmediatez, las nuevas redes que surgen día a día, y la posibilidad de mediciones reales de cada una de las estrategias empleadas.',
				'image' 		=> 'http://gdurl.com/h8Ta',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			
	
			
		);

		Certification::insert($data);
    }
}
