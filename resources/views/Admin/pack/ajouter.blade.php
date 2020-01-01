@extends('layouts.app_admin')

@section('content')
@include('Admin.includes.header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full clearfix position-relative">
		  
		<!-- Left side column. contains the logo and sidebar -->
	@include('Admin.includes.nav-left')


  <section class="content">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Ouverture compte revendeur </h3>
                        <div class="d-xl-inline-block align-items-center d-none">
                            
                        </div>
                    </div>
                    <div class="right-title">
                        <div class="d-flex mt-10 justify-content-end">
							<div class="d-md-flex mr-20 ml-10 d-none">
								<div class="chart-text mr-10">
									<h6 class="mb-0"><small>THIS MONTH</small></h6>
									<h4 class="mt-0 text-primary">$12,125</h4>
								</div>
								<div class="spark-chart">
									<div id="thismonth"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
								</div>
							</div>
							<div class="d-md-flex ml-10 d-none">
								<div class="chart-text mr-10">
									<h6 class="mb-0"><small>LAST YEAR</small></h6>
									<h4 class="mt-0 text-danger">$22,754</h4>
								</div>
								<div class="spark-chart">
									<div id="lastyear"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>	 
            
			<div class="row">
				
				<div class="col-12">
				  <!-- vertical wizard -->
				  <div class="box box-default">
					<div class="box-header with-border">
					  <h4 class="box-title">Ajout pack de depanage informatique</h4>
			
					</div>
					<!-- /.box-header -->
					<div class="box-body wizard-content">
						 <form method="POST" action="{{route('postAjoutPack')}}" >
							{{ csrf_field() }}
							<!-- Step 1 -->
							<h6>Information </h6>
							<section>
							 
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="firstName1">Nom du pack</label>
											<input type="text" class="form-control" id="nom_pack" name="name_pack"> </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lastName2">Descripition</label>
											<input type="text" class="form-control" id="description" name="description"> </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="emailAddress2">Prix de pack en euro</label>
											<input type="text" class="form-control" id="prix_pack" name="prix_pack"> </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="phoneNumber2">Option 1</label>
											<input type="tel" class="form-control" id="option1" name="option1"> </div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="phoneNumber2">Option 2</label>
											<input type="tel" class="form-control" id="option2" name="option2"> </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="phoneNumber2">Option 3</label>
											<input type="tel" class="form-control" id="option3" name="option3"> </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="phoneNumber2">Option 4</label>
											<input type="tel" class="form-control" id="option4" name="option4"> </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="phoneNumber2">Option 5</label>
											<input type="tel" class="form-control" id="option5" name="option5"> </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="phoneNumber2">Cart description</label>
											<input type="tel" class="form-control" id="option5" name="cart_description"> </div>
									</div>
										<button type="submit" class="waves-effect waves-light btn btn-primary mb-5">Ajouter</button>
								</div>
								 
								
							</section>
							<!-- Step 2 -->
						
							
						
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				
			</div>
		</section>



    	<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

 
  @include('Admin.includes.footer')
  <!-- Control Sidebar -->
 
	@endsection
