@extends('layouts.app_vetrine')
@section('contenu')



<header id="header" data-fullwidth="true">

<div class="header-inner">

<div class="container"> 

<div id="logo">

<a href="" class="logo" data-src-dark="images/logo-dark.png">

<img src="images/logo.png" alt="Polo Logo">

</a>

</div>











<div id="mainMenu-trigger">

<button class="lines-button x"> <span class="lines"></span> </button>

</div>





<div id="mainMenu">

<div class="container">

<nav>

<ul>
    <li><a href="{{route('homeIndexs')}}">Instal-line</a></li>
	
	<li> <a href="{{route('services')}}">Services</a></li>
	
	<li> <a href="{{route('produits')}}">Produits</a></li>
	
	<li> <a href="{{route('particulier')}}">Particulier</a></li>
	
	
	
	<li> <a href="{{route('entreprise')}}">entreprise</a></li>
	
	<li> <a href="{{route('telechargement')}}">Téléchargement</a></li>
	
	<li> <a href="{{route('engagement')}}"> Engagements</a></li>
	<li> <a href="{{route('contac')}}">contact</a></li>
</ul>

</nav>

</div>

</div>



</div>

</div>

</header>





<section>

<div class="container">

<div class="row">

<div class="col-lg-6">

<h3 class="text-uppercase">Installine centre de contact</h3>

<p>N&rsquo;h&eacute;sitez pas &agrave; nous adresser vos demandes &agrave; l&rsquo;aide de notre formulaire de contact, nous vous r&eacute;pondrons dans les plus brefs d&eacute;lais.
Nous restons &agrave; votre enti&egrave;re disposition pour tout compl&eacute;ment d'information que vous souhaiteriez obtenir.
</p>

<p>Afin de traiter votre demande, Installine devra effectuer un traitement des donn&eacute;es personnelles vous concernant. Les donn&eacute;es sont conserv&eacute;es pendant 2 ans &agrave; compter de notre dernier contact et sont destin&eacute;es exclusivement &agrave; INSTALLINE, elles ne seront pas transmises &agrave; des tiers.</p>

<div class="row m-t-40">

<div class="col-lg-6">

<address>

<strong>Tunisie</strong><br>

06 Rue Farhat Ben afia<br>

Manar 2 Elmenzah Tunis Tunisie<br>

<abbr title="Phone"></h1> <h3>(216) 36 316 218</h3>

</address>

</div>

<div class="col-lg-6">

<address>

<strong>France</strong><br>

25, Rue Roussy
98800 NOUMÉA<br>

&Icirc;le-de-France  France<br>

<abbr title="Phone"></h4> <h3>(33)
03.39.53.47.21</h3>

</address>

</div>

</div>



</div>

<div class="col-lg-6">

<form class="widget-contact-form" action="installine.com" role="form" method="post">

<div class="row">

<div class="form-group col-md-6">

<label for="name">Nom</label>

<input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Votre nom">

</div>

<div class="form-group col-md-6">

<label for="email">Email</label>

<input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Votre Email">

</div>

</div>

<div class="row">

<div class="form-group col-md-12">

<label for="subject">Sujet</label>

<input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Sujet du contact">

</div>

</div> <div class="form-group">

<label for="message">Message</label>

<textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>

</div>

<div class="form-group">

<script src='../../www.google.com/recaptcha/api.js'></script>

<div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>

</div>

<button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>Envoyer Message</button>

</form>

</div>

</div>

</div>

</section>










 @include('includes.footer')



@endsection