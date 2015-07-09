@extends('layouts.master')

@section('title')
@parent
:: Login
@stop

{{-- Content --}}
@section('content')
<div class="row">
	<div class="col-md-4 one-login-form-cont">
		<div class="page-header">
			<h2>Ingresa a tu cuenta</h2>
		</div>

		{{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}

			<!-- Email -->
			<div class="control-group {{{ $errors->has('email') ? 'has-error' : '' }}}">

				{{ Form::label('email', 'E-Mail', array('class' => 'control-label'))}}

				<div class="controls">
					{{ Form::email('email', Input::old('email'), array("class" => "form-control", "placeholder" => "E-Mail")) }}
					{{ $errors->first('email') }}
				</div>
				
			</div>

			<!-- Password -->
			<div class="control-group {{{ $errors->has('password') ? 'has-error' : '' }}}">

				{{ Form::label('password', 'Contrasena', array('class' => 'control-label')) }}

				<div class="controls">
					{{ Form::password('password',  array("class" => "form-control", "placeholder" => "Contrasena")) }}
					{{ $errors->first('password') }}
				</div>
				
			</div><br>

			<!-- Login Button -->
			<div class="control-group">
				<div class="controls">
					{{ Form::submit('Ingresar', array('class' => 'btn btn-default one-default-btn')) }}
				</div>
			</div>

		{{ Form::close() }}
	</div>

	<div class="col-md-7 pull-right one-register-form-cont">
		<div class="page-header text-center">
			<h2>Crea tu cuenta!!</h2>
		</div>
		{{ Form::open(array('url' => 'register', 'class' => 'form-horizontal')) }}
			<div class="row">
				<div class="col-md-6">
					<!-- First Name -->
					<div class="control-group {{{ $errors->has("name") ? "has-error" : "" }}}">

						{{ Form::label("name", "Nombre*", array('class' => 'control-label'))}}

						<div class="controls">
							{{ Form::text("name", Input::old("name"), array("class" => "form-control", "placeholder" => "Nombre")) }}
							{{ $errors->first("name") }}
						</div>
						
					</div>

					<!-- Second Name -->
					<div class="control-group {{{ $errors->has("second_name") ? "has-error" : "" }}}">

						{{ Form::label("second_name", "Segundo Nombre", array('class' => 'control-label'))}}

						<div class="controls">
							{{ Form::text("second_name", Input::old("second_name"), array("class" => "form-control", "placeholder" => "Segundo Nombre")) }}
							{{ $errors->first("second_name") }}
						</div>
						
					</div>

					<!-- Lastname -->
					<div class="control-group {{{ $errors->has("lastname") ? "has-error" : "" }}}">

						{{ Form::label("lastname", "Apellido*", array('class' => 'control-label'))}}

						<div class="controls">
							{{ Form::text("lastname", Input::old("lastname"), array("class" => "form-control", "placeholder" => "Apellido")) }}
							{{ $errors->first("lastname") }}
						</div>
						
					</div>

					<!-- Second Lastname -->
					<div class="control-group {{{ $errors->has("second_lastname") ? "has-error" : "" }}}">

						{{ Form::label("second_lastname", "Segundo Apellido", array('class' => 'control-label'))}}

						<div class="controls">
							{{ Form::text("second_lastname", Input::old("second_lastname"), array("class" => "form-control", "placeholder" => "Segundo Apellido")) }}
							{{ $errors->first("second_lastname") }}
						</div>
						
					</div>
				</div>

				<div class="col-md-6">
					<!-- Email -->
					<div class="control-group {{{ $errors->has("new_email") ? "has-error" : "" }}}">

						{{ Form::label("new_email", "E-Mail*", array('class' => 'control-label'))}}

						<div class="controls">
							{{ Form::email("new_email", Input::old("new_email"), array("class" => "form-control", "placeholder" => "E-Mail")) }}
							{{ $errors->first("new_email") }}
						</div>
						
					</div>

					<!-- Password -->
					<div class="control-group {{{ $errors->has("newpass") ? "has-error" : "" }}}">

						{{ Form::label("newpass", "Contrasena*", array('class' => 'control-label'))}}

						<div class="controls">
							{{ Form::password("newpass", array("class" => "form-control")) }}
							{{ $errors->first("newpass") }}
						</div>
						
					</div>

					<!-- Password Confirmation -->
					<div class="control-group {{{ $errors->has("newpass_confirmation") ? "has-error" : "" }}}">

						{{ Form::label("newpass_confirmation", "Confirmar Contrasena*", array('class' => 'control-label'))}}

						<div class="controls">
							{{ Form::password("newpass_confirmation", array("class" => "form-control")) }}
							{{ $errors->first("newpass_confirmation") }}
						</div>
						
					</div>

					<!-- Birthday -->
					<div class="control-group {{{ $errors->has("birthday") ? "has-error" : "" }}}">

						{{ Form::label("birthday", "Cumpleanos*", array('class' => 'control-label'))}}

						<div class="controls">
							{{ Form::text("birthday", Input::old("birthday"), array("class" => "form-control", "id" => "birthday")) }}
							{{ $errors->first("birthday") }}
						</div>
						
					</div>
				</div>

				<div class="col-md-12 one-new-user-goal-cont">
					<!-- Goal -->
					<div class="control-group {{{ $errors->has("goal") ? "has-error" : "" }}}">

						{{ Form::label("goal", "¿Cual es tu objetivo?*", array('class' => 'control-label'))}}

						<div class="controls">
							{{ Form::textarea("goal", Input::old("goal"), array("class" => "form-control", "placeholder" => "Escribenos tu objetivo...", "rows" => "4")) }}
							{{ $errors->first("goal") }}
						</div>
						
					</div>
				</div>

				<!-- Register Button -->
				<div class="control-group">
					<div class="controls">
						{{ Form::submit('Crear', array('class' => 'btn btn-default one-default-btn one-register-btn')) }}
					</div>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>

<script type="text/javascript">
	$(function() {
		$("#birthday").datetimepicker({
			timepicker: false,
			format: "Y-m-d"
		});
	});
</script>

@stop