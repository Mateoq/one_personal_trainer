@extends('layouts.master')

@section('title')
@parent
:: Planes
@stop

@section("content")
<div class="row one-row-service-title">
	<div class="col-md-12 text-center one-service-title">
		Contrata tu plan
	</div>
</div>

<div class="row one-plans-row">
	@foreach($plans as $key => $plan)
		@if(4 > $key)
			<div class="col-md-3 one-plan-column">
				<a href="{{ route("planes/proceso_pago/{$plan["id"]}") }}" class="center-block">
					{{HTML::image(asset(Constants::ONE_PLANS_IMAGE_PATH . $plan["image"]), $plan["plan"], array("class" => "img-responsive"))}}
					<div class="col-md-12 text-center one-plan-title">
						{{ $plan["plan"] . " $" . $plan["price"] }}
					</div>
				</a>
			</div>
		@endif
	@endforeach
</div>

<div class="row one-plans-row">
    @foreach($plans as $key => $plan)
        @if(4 <= $key)
            <div class="col-md-3 one-plan-column {{ $fewPlans }}">
                <a href="{{ route("planes/proceso_pago/{$plan["id"]}") }}" class="center-block">
                    {{HTML::image(asset(Constants::ONE_PLANS_IMAGE_PATH . $plan["image"]), $plan["plan"], array("class" => "img-responsive"))}}
                    <div class="col-md-12 text-center one-plan-title">
                        {{ $plan["plan"] . " $" . $plan["price"] }}
                    </div>
                </a>
            </div>
        @endif
    @endforeach
</div>

<div class="row">
    <div class="col-md-9 text-center one-plan-note center-block clearfix">
        Todos los planes de mensualidad incluyen entrenador personal, evaluación médica y física, asesoría nutricional, plan de entrenamiento, clases especializadas, acorde al estado físico y el lugar preferido de entrenamiento del cliente (en la casa, parques, etc).
    </div>
</div>

@include("partials.courtesy_day_row")

@stop