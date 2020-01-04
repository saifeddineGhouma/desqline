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
use DocuSign;
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
 
        /* Mail::send('factureEmail', $data, function ($message) use ($request) {
             $message->from('soutesting99@gmail.com');
             $message->to($request['email'])->subject('Facture');
         });*/
 
 
 
 
 
         return redirect()->route('facture', [$client, $commande]);
     }
     public function facture(Client $client, Commande $commande)
     {
         return view('vetrine.facture.facture')->withClient($client)->withCommande($commande);
     }
     public function docsign($name,$mail,$pdf)

     {
        $client = new DocuSign\Rest\Client([
            'username'       => "ghouma saifeddine",
            'password'       => "cb7mGYMtTCyVaCpv",
            'integrator_key' => "6e8c8480-3624-4ee8-b9f6-0daecd2de36b",
            'host'           => "https://demo.docusign.net/restapi"
        ]);
        $signer = DocuSign::signer([
            'name'  => $name,
            'email' => $mail
        ]);
        // Custom Values
$filePath       = $pdf;   // File to sign
$fileMimeType   = 'application/pdf';    // File MIME type
         // CoSign account password
$domain         = '';                   // CoSign account domain
$sigPageNum     = 1;                    // Create signature on the first page
$sigX           = 145;                  // Signature field X location
$sigY           = 125;                  // Signature field Y location
$sigWidth       = 160;                  // Signature field width
$sigHeight      = 45;                   // Signature field height
$timeFormat     = 'hh:mm:ss';           // The display format of the time
$dateFormat     = 'dd/MM/yyyy';         // The display format of the date
$appearanceMask = 11;                   // Elements to display on the signature field
                                        // (11 = Graphical image + Signer name + Time)
$signatureType  = 'http://arx.com/SAPIWS/DSS/1.0/signature-field-create-sign';  
    // The actual operation of the Sign Request function
$wsdlUrl        = 'https://prime-dsa-devctr.docusign.net:8080/sapiws/dss.asmx?WSDL';    
    // URL to the WSDL file
     
     
     }
     public function Downloadfacture(Client $client, Commande $commande)
     {
        $client = new DocuSign\Rest\Client([
            'username'       => "ghouma saifeddine",
            'password'       => "cb7mGYMtTCyVaCpv",
            'integrator_key' => "6e8c8480-3624-4ee8-b9f6-0daecd2de36b",
            'host'           => "https://demo.docusign.net/restapi"
        ]);
      //  $client = DocuSign::create();

         $pdf = PDF::loadView('vetrine.facture.facture_mail', compact('client', 'commande'));
         try {
            return $client->envelopes->createEnvelope($client->envelopeDefinition([
                'status'        => 'sent',
                'email_subject' => '[DocuSign PHP SDK] - Signature Request Sample',
                'recipients'    => $client->recipients([
                    'signers' => [
                        $client->signer([
                            'name'           => 'John Doe',
                            'email'          => 'mytestemail@gmail.com',
                            'client_user_id' => 1,
                            'role_name'      => 1,
                            'recipient_id'   => 1,
                            'tabs'           => $client->tabs([
                                'sign_here_tabs' => [
                                    $client->signHere([
                                        'anchor_string'                => 'Sign Here:',
                                        'anchor_x_offset'              => '116',
                                        'anchor_y_offset'              => '-9',
                                        'anchor_ignore_if_not_present' => false,
                                        'anchor_units'                 => 'pixels',
                                        'recipient_id'                 => 1,
                                    ]),
                                ],
                            ]),
                        ]),
                    ],
                ]),
                'documents'     => [
                    $client->document([
                        'document_base64' => base64_encode($pdf->stream()),
                        'name'            => 'test',
                        'document_id'     => 1,
                        'file_extension'  => 'pdf',
                    ]),
                ],
            ]));
        } catch (Exception $e) {
            dd($e->getResponseBody());
        }
    
    
         return $pdf->download('facture.pdf');
     }
   
}
