$(function() {
    $('.carousel').carousel();

    $("[data-toggle=tooltip]").tooltip();

    $(document).on("click", "#one_services_button_send_mail", function(event) {
    	event.preventDefault();
    	$("#one_mail_form").modal("toggle");
    });
});