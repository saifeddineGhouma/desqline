<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Pack;
use App\Agent;

class AdminController extends Controller
{



    public function __construct()
    {
       $this->middleware('auth');
    }







    public function getAdminLogin()
    {
        return view('admin.login');
    }

    public function postAdminLogin(Request $request)
    {

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('dashboard');
        } else {

            return redirect()->back()->with(['message_erreur' => 'Login ou Mot de Passe Invalide']);
        }
    }

    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function packListe()
    {
        $packs = Pack::all();
       
        return view('Admin.pack.liste')->withPacks($packs);
    }


    public function getAjoutPack()
    {
        return view('Admin.pack.ajouter');
    }

    public function postAjoutPack(Request $request)
    {

        $pack = new Pack;
        $pack->name = $request->name_pack;
        $pack->prix = $request->prix_pack;
        $pack->description = $request->description;
        $pack->option1 = $request->option1;
        $pack->option2 = $request->option2;
        $pack->option3 = $request->option3;
        $pack->option4 = $request->option4;
        $pack->option5 = $request->option5;
        $pack->cart_description = $request->cart_description;

        $pack->save();

        return redirect()->back();
    }

    public function getUpdatePack(Pack $pack)
    {

        return view('Admin.pack.update')->withPack($pack);
    }
    public function UpdatePack(Request $request, Pack $pack)
    {
        $pack->name = $request->name;
        $pack->prix = $request->prix;
        $pack->description = $request->description;
        $pack->option1 = $request->option1;
        $pack->option2 = $request->option2;
        $pack->option3 = $request->option3;
        $pack->option4 = $request->option4;
        $pack->option5 = $request->option5;
        $pack->cart_description = $request->cart_description;
        $pack->update();

        return redirect()->back();
    }

    public function  deletePack(Pack $pack)
    {

        if ($pack->delete()) {

            return redirect()->back()->with(['message_success' => " Pack supprimée "]);
        }
    }

    //Gestion des agents 

    public function ListAgent()
    {
        $agents = Agent::all();
        return view('Admin.agent.liste')->withAgents($agents);
    }


    public function getAjoutAgent()
    {
        return view('Admin.agent.ajouter');
    }

    public function postAjoutAgent(Request $request)
    {

        $agent = new Agent;
        $agent->name = $request->name_agent;
        $agent->code_vente = $request->code_agent;
        $agent->save();

        return redirect()->back();
    }

    public function getUpdateAgent(Agent $agent)
    {

        return view('Admin.agent.update')->withAgent($agent);
    }
    public function UpdateAgent(Request $request, Agent $agent)
    {
        $agent->name = $request->name;
        $agent->code_vente = $request->code_vente;
        $agent->update();

        return redirect()->back();
    }

    public function  deleteAgent(Agent $agent)
    {

        if ($agent->delete()) {

            return redirect()->back()->with(['message_success' => " Agent supprimé "]);
        }
    }
}
