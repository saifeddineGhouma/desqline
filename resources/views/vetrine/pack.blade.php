@extends('layouts.app_vetrine')
@section('contenu')

@include('includes.header')

<section class="background-grey">
<div class="container">
<div class="heading-text heading-section text-center pb-5">
<h2>Choisir Votre pack de depanage informatique <span class="nowrap"></h2>
<p>avec nos solutions de dépannage informatique à distance et limitez l'immobilisation de votre matériel informatique car la plupart de nos réparations informatiques en ligne sont effectuées en moins de deux heures.</p>
</div>
</div>
<div class="container-fluid">
<div class="row pricing-table">



@foreach($packs as $pack)
<div class="col">
<div class="plan">
<div class="plan-header">
<h4>{{$pack->name}}</h4>
<p class="text-muted">{{$pack->description}}</p>
<div class="plan-price"><sup>€</sup>{{$pack->prix}} </div>
<a class="btn btn-light" href="{{route('InfoPaiement', $pack)}}"><i class="fa fa-shopping-cart"></i>Commander</a> </div>
<div class="plan-list">
<ul>
<li><i class="fas fa-globe-americas"></i>{{$pack->option1}}</li>
<li><i class="fa fa-thumbs-up"></i>{{$pack->option2}}</li>
<li><i class="fa fa-signal"></i>{{$pack->option3}}</li>
<li><i class="fa fa-rocket"></i>{{$pack->option4}}</li>
<li><i class="fa fa-server"></i>{{$pack->option5}}</li>
</ul>
</div>
</div>
</div>
@endforeach





</div>
</div>
</section>
@include('includes.footer')

@endsection