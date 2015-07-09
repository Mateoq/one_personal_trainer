<div class="modal fade" id="one_mail_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title" id="one_mail_form_title">Envianos tus tudas</h4>
			</div>
			<div class="modal-body">
				{{ Form::open(array("action" => array("HomeController@postMail"), "class" => "center-block one-mail-form", "role" => "form")) }}
					<div class="form-group {{{ $errors->has("name") ? 'error' : '' }}}">
						{{ Form::text("name", "", array("class" => "form-control", "placeholder" => "Nombre")) }}
					</div>
					<div class="form-group {{{ $errors->has("email") ? 'error' : '' }}}">
						{{ Form::email("email", "", array("class" => "form-control", "placeholder" => "Correo electrónico")) }}
					</div>
					<div class="form-group {{{ $errors->has("mail_text") ? 'error' : '' }}}">
						{{ Form::textarea("mail_text", "", array("class" => "form-control", "placeholder" => "Cuentanos tus dudas")) }}
					</div>

					{{ Form::submit("Enviar", array("class" => "btn btn-default one-mail-form-btn")) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>