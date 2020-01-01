@extends('layouts.app_vetrine')
@section('contenu')

@include('includes.header')
<section id="page-title">
<div class="container">
<div class="page-title">
<h1><font color="#4CB011">  Transaction réussie!</h1></font>
<span><h2>Votre paiement a été validé, merci d'avoir choisi installine.</h2></span>
</div>

</div>
</section>


<section id="shop-checkout-completed">
<div class="container">
<div class="p-t-10 m-b-20 text-center">
<div class="text-center">
<h3>
Vous trouverez ci-dessous les informations relatives à votre commande.</h3>
<div class="row">
<div class="col-md-6">

<div class="form-group">
<textarea id="target3" type="text" rows="5" class="form-control required">Num commande 
Num transaction 

Montant payé</textarea>
</div>
<button data-clipboard-target="#target3" class="btn">Copier tous les informations de votre paiement</button>
</div>

</div>
</div>

</div>
</div>
</section>



 @include('includes.footer')



@endsection