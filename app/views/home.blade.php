@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
<div class="row one-home-title-row">
   <div class="col-md-12">
      <h1 class="one-main-title">
         One Personal Trainer. <span class="one-title-message">Contrata tu propio plan de entrenamiento personal.</span><br />
         <span class="one-title-slogan">Un entrenador personal que crea y supervisa tus entrenamientos, resuelve tús dudas y te motiva para que alcances tú objetivo.</span>
      </h1>
   </div>
</div>
<div id="one_carousel_home" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators one-home-carousel-indicators">
      <li data-target="#one_carousel_home" data-slide-to="0" class="active"></li>
      <li data-target="#one_carousel_home" data-slide-to="1"></li>
   </ol>

   <div class="carousel-inner">
      <div class="item active">
         {{ HTML::image(asset("images/home_carousel_banner.png"), "Carousel banner", array("class" => "img-responsive")) }}
      </div>
      <div class="item">
         {{ HTML::image(asset("images/home_carousel_banner2.png"), "Carousel banner 2", array("class" => "img-responsive")) }}
      </div>
   </div>
</div>

@include("partials.services_menu")

<div class="row one-row-botton-info">
   <div class="col-md-6 one-hire-plan">
      <div class="one-hire-plan-title">
         Contrata tu Plan. $
      </div>
      <div class="row one-hire-plan-characteristics">
         <ul class="col-md-7 one-list-style">
            <li>Entrenador personal</li>
            <li>Supervisión y motivación</li>
            <li>Entrenamientos personalizados</li>
            <li>Comunicación con tu entrenador</li>
            <li>Datos de evolución</li>
         </ul>
         <ul class="col-md-5 one-list-style">
            <li>Clases especializadas</li>
            <li>Asesoría nutricional</li>
            <li>Asesoría de salud</li>
            <li>Todo tipo de público</li>
         </ul>
      </div>
   </div>
   <div class="col-md-3">
      {{ HTML::image(asset("images/home_image_block1.png"), "Entrenamiento en casa", array("class" => "img-responsive")) }}
   </div>
   <div class="col-md-3">
      {{ HTML::image(asset("images/home_image_block2.png"), "Motivación", array("class" => "img-responsive")) }}
   </div>
</div>
@stop