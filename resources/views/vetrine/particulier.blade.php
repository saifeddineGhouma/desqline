
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
<section class="background-colored text-dark p-b-40">
<div class="container">
<div class="row">
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="100">
<div class="heading-text heading-section">
<h1 class="text-medium">Principe <h2>d'intervention</h2+>!</h1>
</div>
</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="300">Installine Connect est un service qui permet à un technicien agréé d'effectuer un travail de dépannage ou de maintenance sur votre ordinateur sans se déplacer physiquement sur le lieu d'intervention.<br><br>

Pour cela, la technologie d'écran partagé est utilisée afin de prendre le contrôle de l'ordinateur à distance.
Lorsque le technicien effectue son travail, il voit une copie de votre bureau Windows et peut utiliser la souris et le clavier à distance pour manipuler votre ordinateur exactement comme s'il était sur place, tout en vous permettant de suivre son intervention sur l'écran .</div>
<div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600"><h2>Un niveau de sécurité maximum</h2>La connexion entre votre ordinateur et le technicien Ordistance est hautement sécurisée par une clé de cryptage à 128 bits, ce qui garantit que seul le technicien peut voir votre bureau Windows et contrôler votre ordinateur. Il est donc totalement impossible qu'une personne malveillante puisse intercepter les données durant la connexion.
<br>
.</div>
</div>
</div>
</section>


<section class="p-t-120 p-b-120">
<div class="container">
<div class="row">
<div class="col-lg-8 center">
<div class="heading-text heading-section text-center" data-animate="fadeInUp">
<h4>Des avantages multiples</h4>
<h3>Par rapport aux dépannages à domicile, utiliser Ordistance offre des avantages considérables, notamment </h3>
<p class="lead">Avec <h2>installine connect </h2>vous gardez le contrôle en permanence !.</p>
<a href="https://www.youtube.com/watch?v=nrJtHemSPW4" data-lightbox="iframe" class="play-button dark"><i class="fa fa-play"></i></a>
</div>
</div>
</div>
</div>
</section>




<section class="box-fancy section-fullwidth text-dark" style="background-image:url(homepages/web-design/images/parallax/1.jpg);">
<div class="row">
<div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="200">
<h1 class="text-lg text-uppercase">01.</h1>
<h3>Une réactivité immédiate</h3>
<span>Le technicien peut intervenir en quelques minutes suite à votre demande et résoudre très rapidement un problème de fonctionnement qui vous bloque dans votre travail ou vos loisirs.
Pas de frais de déplacement </span>
</div>
<div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="400">
<h1 class="text-lg text-uppercase">02.</h1>
<h3>Pas de frais de déplacement</h3>
<span>Utiliser Installine connect vous évite tout frais de déplacement d'un technicien à votre domicile ou votre bureau, frais qui rendent l'intervention souvent très coûteuse. vous n'avez pas besoin de recevoir un technicien inconnu et préservez l'intimité de votre habitat </span>
</div>
<div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="600">
<h1 class="text-lg text-uppercase">03.</h1>
<h3>Besoin d'installer un logiciel ?</h3>
<span>De configurer un compte de messagerie ? De paramétrer votre antivirus ou votre pare-feu ? De mettre à jour les pilotes de vos périphériques ? Autant de prestations que l'équipe Ordistance peut effectuer immédiatement.
Tout le savoir d'une équipe rien que pour vous</span>
</div>
<div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="800">
<h1 class="text-lg text-uppercase">04.</h1>
<h2>Dinstallations à distance</h2>
<span>Si vous souhaitez équiper votre ordinateur d'un logiciel antivirus, antispyware, antispam, etc, il est inutile de vous déplacer dans une boutique pour l'acheter : l'équipe Installine installera à distance tous les outils dont vous avez besoin et vous fournira la licence d'utilisation  </span>
</div>
</div>
</section>





@include('includes.footer')

@endsection