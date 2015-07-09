<div class="row one-row-services-plan-options">
    <div class="col-md-4 one-services-courtesy_day">
        <a href="#">
            Pide 1 día de cortesía
        </a>
    </div>
    <div class="col-md-8 one-services-plan-options">
        <div class="row one-row-services-personal-virtual">
            @if ("planes_presenciales" != Route::getCurrentRoute()->getPath())
                <div class="col-md-6 one-services-personal">
                    <a href="#">
                        Personalizado Presencial
                    </a>
                </div>
            @endif
            @if ("planes_virtuales" != Route::getCurrentRoute()->getPath())
                <div class="col-md-6 one-services-virtual">
                    <a href="#">
                        Personalizado Virtual
                    </a>
                </div>
            @endif
        </div>
        <div class="row one-row-contact">
            <div class="col-md-12 one-contact-title">
                Contáctenos:
            </div>
            <div class="col-md-12 one-contact-info">
                <a href="#" id="one_services_button_send_mail" data-toggle="tooltip" data-placement="top" title="Haz click para contactarnos" data-toggle="modal" data-target="#one_mail_form">
                    info@onepersonaltrainer.com.co
                </a> / Celular: 320 788 18 81.
            </div>
        </div>
    </div>
</div>