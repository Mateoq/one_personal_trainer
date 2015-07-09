@extends('layouts.master')

@section('title')
@parent
:: Servicios
@stop

@section("content")
<div class="row one-service-banner">
	<div class="col-md-12">
		{{HTML::image(asset("images/" . $service["image"]), $service["title"], array("class" => "img-responsive"))}}
	</div>
</div>

<div class="row one-row-service-title">
	<div class="col-md-12 one-service-title">
		{{ $service["title"] }}
	</div>
</div>

<div class="row one-row-service-line">
	<p class="col-md-12 one-service-line1">
		{{ $service["content_line1"] }}
	</p>
</div>

@if (!empty($service["content_line2"]))
	<div class="row one-row-service-line">
		<p class="col-md-12 one-service-line2">
			{{ $service["content_line2"] }}
		</p>
	</div>
@endif

@include("partials.services_menu")

<div class="row">
	<div class="col-md-12 one-services-adquire-plan">
		Quieres adquirir un entrenamiento Presencial o Virtual, elige el personalizado
	</div>
</div>

@include("partials.courtesy_day_row")

@include("partials.mail_form")
@stop