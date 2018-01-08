<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SoapClient;
use SoapFault;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = array();
        $user = Auth::user();
        try {
            $clientSOAP = new SoapClient("http://127.0.0.1:8001/hello?wsdl");
            $result[0] = $clientSOAP->helloWorld("Bonjour ".$user['pseudo']." et bienvenue sur votre espace personnel.");
            $result[1] = $clientSOAP->helloWorld("Vous pouvez maintenant publier ou chercher des annonces.");

        }
        catch (SoapFault $exception) {
            $result[0] = "Ah mince ! Il est impossible de se connecter au web service.";
            $result[1] = "Vous pouvez tout de même publier ou chercher des annonces.";
        }

        return view('home', [
            'user' => $user,
            'message' => $result
        ]);
    }
}
