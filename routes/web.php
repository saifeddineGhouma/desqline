<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();


Route::get('logout', 'Auth\LoginController@logout');


Route::prefix('admin')->group(function () {
   

    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');



 //Gestion des pack
 Route::get('liste-pack', 'AdminController@packListe')->name('packListe');
 Route::get('ajouter-pack', 'AdminController@getAjoutPack')->name('getAjoutPack');
 Route::post('ajouter-pack', 'AdminController@postAjoutPack')->name('postAjoutPack');

 Route::get('/editer_pack/{pack}', 'AdminController@getUpdatePack')->name('getUpdatePack');
 Route::post('/editer_pack/{pack}', 'AdminController@UpdatePack')->name('UpdatePack');
 Route::get('delete_pack/{pack}', 'AdminController@deletePack')->name('deletePack');

 //Gestion des agents
 Route::get('liste-agent', 'AdminController@ListAgent')->name('ListAgent');
 Route::get('ajouter-agent', 'AdminController@getAjoutAgent')->name('getAjoutAgent');
 Route::post('ajouter-agent', 'AdminController@postAjoutAgent')->name('postAjoutAgent');

 Route::get('/editer_agent/{agent}', 'AdminController@getUpdateAgent')->name('getUpdateAgent');
 Route::post('/editer_agent/{agent}', 'AdminController@UpdateAgent')->name('UpdateAgent');
 Route::get('delete_agent/{agent}', 'AdminController@deleteAgent')->name('deleteAgent');









});









Route::get('/docsign','HomeController@docsign');





Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@homeIndex')->name('homeIndexs');
Route::get('contact', 'HomeController@contact')->name('contac');
Route::get('engagement', 'HomeController@engagement')->name('engagement');
Route::get('produits', 'HomeController@produits')->name('produits');
Route::get('particulier', 'HomeController@particulier')->name('particulier');
Route::get('return', 'HomeController@refusePaiement')->name('refusePaiement');
Route::get('valok', 'HomeController@acceptPaiement')->name('acceptPaiement');
Route::get('depanage', 'HomeController@depanage')->name('depanage');
Route::get('entreprise', 'HomeController@entreprise')->name('entreprise');
Route::get('sav', 'HomeController@sav')->name('sav');
Route::get('services', 'HomeController@services')->name('services');
Route::get('facture/{client}/{commande}', 'HomeController@facture')->name('facture');
Route::get('downloadFacture/{client}/{commande}', 'HomeController@Downloadfacture')->name('Downloadfacture');

Route::get('shop', 'HomeController@shop')->name('shop');
Route::get('shop-cart', 'HomeController@shopCart')->name('shopCart');
Route::get('telechargement', 'HomeController@telechargement')->name('telechargement');


//Pack front 
Route::get('packs', 'HomeController@listPacks')->name('listPacks');
Route::post('/info-paiement/{pack}', 'HomeController@postOrder')->name('postOrder');

//Paiement infi 
Route::get('/info-paiement/{pack}', 'HomeController@InfoPaiement')->name('InfoPaiement');

Route::get('/home', 'HomeController@index')->name('home');
