<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Pack;
use App\Agent;
use App\Commande;
use App\Client;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function homeIndex()
     {
        
         return view('home');
     }
     public function contact()
     {
         return view('vetrine.contact');
     }
     public function depanage()
     {
         return view('vetrine.depanage');
     }
     public function produits()
     {
         return view('vetrine.listeproduits');
     }
     public function engagement()
     {
         return view('vetrine.engagement');
     }
     public function particulier()
     {
         return view('vetrine.particulier');
     }
     public function entreprise()
     {
         return view('vetrine.entreprise');
     }
     public function sav()
     {
         return view('vetrine.sav');
     }
     public function services()
     {
         return view('vetrine.services');
     }
     public function shop()
     {
         return view('vetrine.shop.shop');
     }
 
     public function shopCart()
     {
         return view('vetrine.shop.shop-cart');
     }
 
     public function telechargement()
     {
         return view('vetrine.telechargement');
     }
     public function refusePaiement()
     {
         return view('refus');
     }
     public function acceptPaiement()
     {
         return view('vetrine.valok');
     }
 
     public function listPacks()
     {
         $packs = Pack::all();
         return view('vetrine.pack')->withPacks($packs);
     }
 
     public function InfoPaiement(Pack $pack)
     {
         return view('vetrine.paiementinfo')->withPack($pack);
     }
     public function postOrder(Request $request, Pack $pack)
     {
 
         $validator = Validator::make($request->all(), [
             'code_vente' => 'required|exists:agents,code_vente',
         ]);
 
         $client =  new Client;
         $client->name = $request->name;
         $client->email = $request->email;
         $client->prenom = $request->prenom;
         $client->adresse = $request->adresse;
         $client->country = $request->country;
         $client->code_postale = $request->code_postale;
         $client->phone = $request->phone;
         $client->save();
 
         $commande = new Commande;
         $commande->pack_id = $pack->id;
         $commande->client_id = $client->id;
         $commande->totale = $pack->prix;
         $commande->save();
 
         $data = array(
             'name'     => $request->name,
             'email'    => $request->email,
             'prenom' => $request->prenom,
             'adresse' => $request->adresse,
             'country' => $request->country,
             'code_postale' => $request->code_postale,
             'phone' => $request->phone,
             'totale' => $commande->totale,
             'date' => $commande->created_at,
             'id_commande' => $commande->id,
 
         );
 
         //  $pdf = PDF::loadView('facture', compact('commande', 'client'));
         // $message->attachData($pdf->output(), "invoice.pdf");
 
         Mail::send('factureEmail', $data, function ($message) use ($request) {
             $message->from('soutesting99@gmail.com');
             $message->to($request['email'])->subject('Facture');
         });
 
 
 
 
 
         return redirect()->route('facture', [$client, $commande]);
     }
     public function facture(Client $client, Commande $commande)
     {
         return view('vetrine.facture.facture')->withClient($client)->withCommande($commande);
     }
     public function Downloadfacture(Client $client, Commande $commande)
     {
         $pdf = PDF::loadView('vetrine.facture.facture_mail', compact('client', 'commande'));
         return $pdf->download('facture.pdf');
     }
}
