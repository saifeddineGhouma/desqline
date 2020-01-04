<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://dashboard-template.multipurposethemes.com/images/favicon.ico">

    <title>Facturation</title>
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{asset("/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css")}}">
	
	<!-- theme style -->

	<link media="all" type="text/css" rel="stylesheet" href="{{asset("/css/style1.css")}}">
	
	<!-- Admin skins --> 
	<link rel="stylesheet" href="{{asset("/css/skin_color.css")}}">	

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
							<img src="{{asset('/images/visa.png')}}" alt="Visa">
							<img src="{{asset('/images/mastercard.png')}}" alt="Mastercard">
							<img src="{{asset('/images/american-express.png')}}" alt="American Express">
					

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
					  <div class="row no-print">
						<div class="col-12">
						  <button id="print2" class="btn btn-warning" type="button"> <span><i class="fa fa-print"></i> Imprimer votre facture</span> </button>
						  <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Passer au paiement sécurisé
						  </button>
						<a href="{{route('Downloadfacture', [$client, $commande])}}" class="btn btn-danger pull-right" style="margin-right: 5px;" >
							<i class="fa fa-download"></i> Télechargé en PDF
						  </a>
						</div>
					  </div>
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
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" title="Notifications"><i class="ti-comment-alt"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab" title="Comments"><i class="ti-tag"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block mb-20">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover">
			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">10:10</h4>
			  <div class="media-body pl-15 bl-5 rounded border-primary">
				<p>Morbi quis ex eu arcu auctor sagittis.</p>
				<span class="text-fade">by Johne</span>
			  </div>
			</a>

			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">08:40</h4>
			  <div class="media-body pl-15 bl-5 rounded border-success">
				<p>Proin iaculis eros non odio ornare efficitur.</p>
				<span class="text-fade">by Amla</span>
			  </div>
			</a>

			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">07:10</h4>
			  <div class="media-body pl-15 bl-5 rounded border-info">
				<p>In mattis mi ut posuere consectetur.</p>
				<span class="text-fade">by Josef</span>
			  </div>
			</a>

			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">01:15</h4>
			  <div class="media-body pl-15 bl-5 rounded border-danger">
				<p>Morbi quis ex eu arcu auctor sagittis.</p>
				<span class="text-fade">by Rima</span>
			  </div>
			</a>

			<a class="media media-single" href="#">
			  <h4 class="w-50 text-gray font-weight-500">23:12</h4>
			  <div class="media-body pl-15 bl-5 rounded border-warning">
				<p>Morbi quis ex eu arcu auctor sagittis.</p>
				<span class="text-fade">by Alaxa</span>
			  </div>
			</a>

		  </div>
      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
		  <div class="media-list media-list-hover media-list-divided">
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec metus...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec metus...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Carter</strong> <span class="float-right">33 min ago</span></p>
				<p>Cras tempor diam nec...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (22)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
			<div class="media">
			  <img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">

			  <div class="media-body">
				<p><strong>Nicholas</strong> <span class="float-right">11 hour ago</span></p>
				<p>Praesent tristique diam...</p>
				<div class="media-block-actions">
				  <nav class="nav nav-dot-separated no-gutters">
					<div class="nav-item">
					  <a class="nav-link text-success" href="#"><i class="fa fa-thumbs-up"></i> (17)</a>
					</div>
					<div class="nav-item">
					  <a class="nav-link text-danger" href="#"><i class="fa fa-thumbs-down"></i> (23)</a>
					</div>
				  </nav>

				  <nav class="nav no-gutters gap-2 font-size-16 media-hover-show">
					<a class="nav-link text-success" href="#" data-toggle="tooltip" title="" data-original-title="Approve"><i class="ion-checkmark"></i></a>
					<a class="nav-link text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Delete"><i class="ion-close"></i></a>
				  </nav>
				</div>
			  </div>
			</div>
		  </div>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


	
	<!-- JqueryPrintArea -->
	<script src="../assets/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js"></script>
	<script src="js/pages/invoice.js"></script>

</body>

<!-- Mirrored from dashboard-template.multipurposethemes.com/main-ltr/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2019 21:50:11 GMT -->
</html>
