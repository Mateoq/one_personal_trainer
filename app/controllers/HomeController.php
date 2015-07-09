<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showHome() {
        return View::make('home');
    }

    public function showFattyTissueReduction() {
        if (!($service = Cache::get("service_" . Constants::ONE_SERVICE_FATTY_TISSUE_REDUCTION, false))) {
            $service = Service::where("key", "=", Constants::ONE_SERVICE_FATTY_TISSUE_REDUCTION)->get()->toArray();

            Cache::add("service_" . Constants::ONE_SERVICE_FATTY_TISSUE_REDUCTION, $service, 1440);
        }
        return View::make("services.services_view")->with("service", $service[0]);
    }

    public function showTonning() {
        if (!($service = Cache::get("service_" . Constants::ONE_SERVICE_TONNING, false))) {
            $service = Service::where("key", "=", Constants::ONE_SERVICE_TONNING)->get()->toArray();

            Cache::add("service_" . Constants::ONE_SERVICE_TONNING, $service, 1440);
        }
        return View::make("services.services_view")->with("service", $service[0]);
    }

    public function showBuildMuscle() {
        if (!($service = Cache::get("service_" . Constants::ONE_SERVICE_BUILD_MUSCLE, false))) {
            $service = Service::where("key", "=", Constants::ONE_SERVICE_BUILD_MUSCLE)->get()->toArray();

            Cache::add("service_" . Constants::ONE_SERVICE_BUILD_MUSCLE, $service, 1440);
        }
        return View::make("services.services_view")->with("service", $service[0]);
    }

    public function showSports() {
        if (!($service = Cache::get("service_" . Constants::ONE_SERVICE_SPORTS, false))) {
            $service = Service::where("key", "=", Constants::ONE_SERVICE_SPORTS)->get()->toArray();

            Cache::add("service_" . Constants::ONE_SERVICE_SPORTS, $service, 1440);
        }
        return View::make("services.services_view")->with("service", $service[0]);
    }

    public function showSpecClases() {
        if (!($service = Cache::get("service_" . Constants::ONE_SERVICE_SPEC_CLASSES, false))) {
            $service = Service::where("key", "=", Constants::ONE_SERVICE_SPEC_CLASSES)->get()->toArray();

            Cache::add("service_" . Constants::ONE_SERVICE_SPEC_CLASSES, $service, 1440);
        }
        return View::make("services.services_view")->with("service", $service[0]);
    }

    public function showOtherGoal() {
        if (!($service = Cache::get("service_" . Constants::ONE_SERVICE_OTHER_GOAL, false))) {
            $service = Service::where("key", "=", Constants::ONE_SERVICE_OTHER_GOAL)->get()->toArray();

            Cache::add("service_" . Constants::ONE_SERVICE_OTHER_GOAL, $service, 1440);
        }
        return View::make("services.services_view")->with("service", $service[0]);
    }

    public function showPersonalPlans() {
        if (!($plans = Cache::get("all_active_plans", false))) {
            $plans = Plan::where("enabled", "=", true)->get()->toArray();
            Cache::add("all_active_plans", $plans, 1440);
        }

        $fewPlans = "";

        if (count($plans) < 7) {
            $fewPlans = "center-block clearfix";            
        }

        return View::make("plans.personal_plans")->with("plans", $plans)->with("fewPlans", $fewPlans);
    }

    public function showProcesoPago($id_plan) {
        dd($id_plan);
    }

    public function postMail() {
        // Get inputs

        $emailData = array(
            "name" => Input::get("name"),
            "email" => Input::get("email"),
            "mail_text" => Input::get("mail_text")
        );

        $rules = array(
            "name" => "required|alpha_num|min:3",
            "email" => "required|email|between:3,128",
            "mail_text" => "required|min:3"
        );

        // Validate inputs.
        $validator = Validator::make($emailData, $rules);

        if ($validator->passes()) {
            $mail = Mail::send("emails.consult_email", $emailData, function ($message) use ($emailData) {
                $message->from($emailData["email"], $emailData["name"]);
                $message->to("info@onepersonaltrainer.com.co", "Info")->subject("Consulta de usuario");
            });

            if (!$mail) {
                return Redirect::to("")->withErrors(array("msg" => "Error al enviar el mensaje"));
            } else {
                return Redirect::to("")->with("success", "Consulta enviada correctamente");
            }
        }

        return Redirect::to("")->withErrors($validator);        
    }

}