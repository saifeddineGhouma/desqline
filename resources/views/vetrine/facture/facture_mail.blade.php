<!DOCTYPE html>
<html lang="en">


<head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://dashboard-template.multipurposethemes.com/images/favicon.ico">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Facturation</title>
	
	<!-- Bootstrap 4.0-->
	<link media="all" type="text/css" rel="stylesheet" href="{{asset('/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">
	
	<!-- theme style -->

	<link media="all" type="text/css" rel="stylesheet" href="{{asset('/css/style1.css')}}">
	
	<!-- Admin skins --> 
	<link media="all" type="text/css" rel="stylesheet" href="{{asset('/css/skin_color.css')}}">	

</head>
<body class="hold-transition light-skin sidebar-mini theme-blueindigo onlyheader">
<div class="wrapper">
	
  <div class="art-bg">
	  <img src="http://dashboard-template.multipurposethemes.com/images/art1.svg" alt="" class="art-img light-img">
	  <img src="http://dashboard-template.multipurposethemes.com/images/art2.svg" alt="" class="art-img dark-img">
	  <img src="http://dashboard-template.multipurposethemes.com/images/art-bg.svg" alt="" class="wave-img light-img">
	  <img src="http://dashboard-template.multipurposethemes.com/images/art-bg2.svg" alt="" class="wave-img dark-img">
  </div>

    
  
  <!-- Content Wrapper. Contains page content -->
  <div class="center">
	  <div>
		  
		<!-- Left side column. contains the logo and sidebar -->
	
          
        <section class="content">  
            <!-- Content Header (Page header) -->
            
            <div class="row">
                <div class="col-12">
                    <div class="no-print">
                        <div class="callout callout-success" style="margin-bottom: 0!important;">
                            <h4><i class="fa fa-info"></i> Note:</h4>
                            Vous trouverez ci-dessous les informations relatives à votre commande.<br>
Veillez à bien conserver ces renseignements en format PDF, ils pourraient vous être demandés par la suite.

                        </div>
                    </div>
                    <section class="invoice printableArea">
					  <!-- title row -->
					  <div class="row">
						<div class="col-12">
						  <h1 class="page-header">
							<h1>Facture</h1>
							<small class="pull-right"><h1>Date: {{$commande->created_at}}</h1></small>
						  </h1>
						</div>
						<!-- /.col -->
					  </div>
					  <!-- info row -->
					  <div class="row invoice-info">
						<div class="col-12 col-lg-10 invoice-col mb-30">
						  <div class="mb-10 bb-1">
							  <h3><strong class="text-red">Installine.com</strong></h3>
							  <address>
								162, Place Charles de Gaulle 59493 VILLENEUVE-D'ASCQ<br>
								<strong>Phone:</strong> (00)  (33) 03.45.36.32.07, <br><strong>Email:</strong> contact@installine.com
							  </address>			
						  </div>
						  <div>	
							  <h5><strong class="text-blue mb-0">Information Client </strong></h5>
							  <address>
								{{$client->adresse}},     <strong>Phone:</strong> {{$client->phone}}, <strong>Email:</strong>{{ $client->email}}
							  </address>		 
						  </div>
						</div>
						<!-- /.col -->
						<div class="col-12 col-lg-2 invoice-col">
							<div class="invoice-details row no-margin">
							  <div class="col-12 mb-15"><b>Facture </b>#{{$commande->id}}</div>
							  <div class="col-12 mb-15"><b>Account:</b> 0001245879315</div>
							  <div class="col-12 mb-15"><b>Payment Due:</b> 14/08/2019</div>
							</div>
						</div>
					  <!-- /.col -->
					  </div>
					  <!-- /.row -->

					  <!-- Table row -->
					  <div class="row">
						<div class="col-12 table-responsive">
						  <table class="table table-bordered">
							<tbody>
							<tr>
							  <th>Num</th>
							  <th>numéro de serie</th>
							  <th>Description</th>
							  <th class="text-right">Quantité</th>
							  <th class="text-right">Prix Unitaire</th>
							
							</tr>
							</tbody>
							<tbody>
				
						
							<tr>
							  <td>1</td>
							  <td>#{{$commande->id}}</td>
							  <td>Une fois votre paiement validé, vous recevrez la facture correspondante par mail.

Important: vous pouvez accéder à l'ensemble de votre facturation depuis le manager,
en cliquant sur le domaine concerné, rubrique administration, puis mes factures.

Cordialement,

Support Client OVH

Support Commercial et Technique : 71 966 044
Fax : 71861623
Email: support-tn@ovh.com
Du lundi au vendredi : 8h - 20h
Une fois votre paiement validé, vous recevrez la facture correspondante par mail.

Important: vous pouvez accéder à l'ensemble de votre facturation depuis le manager,
en cliquant sur le domaine concerné, rubrique administration, puis mes factures.

Cordialement,

Support Client OVH

Support Commercial et Technique : 71 966 044
Fax : 71861623
Email: support-tn@ovh.com
Du lundi au vendredi : 8h - 20h
</td>
							  <td class="text-right"></td>
							  <td class="text-right"> {{$commande->totale}}</td>
						
							</tr>
							</tbody>
						  </table>
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->

					  <div class="row">
						<!-- accepted payments column -->
						<div class="col-12 col-sm-6">
						  <div class="b-2 p-20 mb-10 bg-light">
							<p class="mb-10"><b>Paiement methodes</b></p>
							<img src="{{asset("/images/visa.png")}}" alt="Visa">
							<img src="{{asset("/images/mastercard.png")}}" alt="Mastercard">
							<img src="{{asset("/images/american-express.png")}}" alt="American Express">
					

							  <p class="text-muted well well-sm no-shadow mt-20 mb-0">
								les cartes de crédit Visa, MasterCard, American Express(les cartes de crédit prépayées sont acceptées)
							  </p>
						  </div>
						</div>
						<!-- /.col -->
						<div class="col-12 col-sm-6 text-right">			
							<div>
								<p>Sub - Total amount  :  ${{$commande->totale}}</p>
								<p>Tax (19%)  :  $20</p>
								@php  $totaleFinal = $commande->totale + 20 @endphp 
								
							</div>
							<div class="total-payment">
								<h1><b>Total :</b> ${{$totaleFinal}}</h1>
							</div>

						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->

					  <!-- this row will not appear when printing -->
					
					</section>                
                </div>
            </div>
            <!-- /.content -->
        </section> 
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://themeforest.net/item/dashboardx-bootstrap-4-admin-template/24987220">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

</body>

<!-- Mirrored from dashboard-template.multipurposethemes.com/main-ltr/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2019 21:50:11 GMT -->
</html>
