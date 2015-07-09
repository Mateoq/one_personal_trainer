<?php

/**
* @author mateo
*/
class ServicesTableSeeder extends Seeder {
	
	public function run() {
		// !! All existing services are deleted !!
		DB::table('services')->delete();

		Service::create(array(
				"title" => "Reducción de Tejido Graso",
				"key" => "reduccion_tejido_graso",
				"content_line1" => "En One Personal Trainer le ayudaremos a los usuarios a adelgazar de una forma sana y saludable, buscando el método más eficaz para tonificar los músculos y bajar el tejido adiposo.",
				"content_line2" => "Los usuarios estarán con asesoría nutricional y un entrenador personal que los motivará a seguir adelante y a sacar provecho de los entrenamientos.",
				"image" => "fatty_tissue_reduction_image.png"
			));

		Service::create(array(
				"title" => "Tonificación",
				"key" => "tonificacion",
				"content_line1" => "En One Personal Trainer con nuestros planes de entrenamiento le ayudaremos a los usuarios a tonificar su cuerpo, fortalecer las regiones musculares que más le interesen, eliminar el exceso de tejido adiposo y flacidez.",
				"content_line2" => "Los usuarios estarán asesorados por un entrenador personal que los motivará a mejorar sus hábitos, a mantenerlos en forma y a sacar el 100% en sus entrenamientos.",
				"image" => "toning_image.png"
			));

		Service::create(array(
				"title" => "Aumento de Masa Muscular",
				"key" => "aumento_masa_muscular",
				"content_line1" => "En One Personal Trainer aumentaremos la masa muscular sin aumentar tejido graso, buscando el método de entrenamiento más eficaz para ti.",
				"content_line2" => "Los usuarios estarán asesorados por un entrenador personal que los motivará a mejorar sus hábitos, a mantenerlos en forma y a sacar el 100% en sus entrenamientos.",
				"image" => "build_muscle_image.png"
			));

		Service::create(array(
				"title" => "Deportes",
				"key" => "deportes",
				"content_line1" => "Si practicas algún deporte en especial, One Personal Trainer te ayudará a mejorar la técnica y el rendimiento físico. Los usuarios estarán asesorados por un entrenador personal que los motivará a mejorar los hábitos, a mantenerte en forma y a sacar el 100% en todos los entrenamientos.",
				"image" => "sports_image.png"
			));

		Service::create(array(
				"title" => "Clases Especializadas",
				"key" => "clases_especializadas",
				"content_line1" => "En One personal Trainer ofrecemos clases especializadas como:",
				"content_line2" => "Taebo, Bootcamp, Spinning, Pilates, Extreme Box, Crossfit, entre otras.",
				"image" => "spec_classes_image.png"
			));

		Service::create(array(
				"title" => "¿Otra meta?",
				"key" => "otra_meta",
				"content_line1" => "Si tienes alguna otra meta por favor háznola saber, escribenos y pronto te responderemos.",
				"extras" => "1",
				"image" => "other_goal_image.png"
			));
	}
}