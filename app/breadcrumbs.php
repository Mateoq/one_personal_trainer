<?php 

Breadcrumbs::register('home', function($breadcrumbs) {
	$breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('login', function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Login', route('login'));
});

Breadcrumbs::register("servicios/reduccion_tejido_graso", function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push("Reducción de tejido graso", "servicios/reduccion_tejido_graso");
});

Breadcrumbs::register("servicios/tonificacion", function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push("Tonificación", "servicios/tonificacion");
});

Breadcrumbs::register("servicios/aumento_masa_muscular", function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push("Aumento de masa muscular", "servicios/aumento_masa_muscular");
});

Breadcrumbs::register("servicios/deportes", function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push("Deportes", "servicios/deportes");
});

Breadcrumbs::register("servicios/clases_especializadas", function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push("Clases especializadas", "servicios/clases_especializadas");
});

Breadcrumbs::register("servicios/otra_meta", function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push("¿Otra meta?", "servicios/otra_meta");
});

Breadcrumbs::register("planes/presencial", function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push("Planes Presenciales", "planes/presencial");
});