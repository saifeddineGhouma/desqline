


@extends('layouts.app_admin')

@section('content')
@include('Admin.includes.header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full clearfix position-relative">
		  
		<!-- Left side column. contains the logo and sidebar -->
	@include('Admin.includes.nav-left')





		<!-- Main content -->
		<section class="content">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Liste pack de depanage</h3>
                        <div class="d-xl-inline-block align-items-center d-none">
                            
                        </div>
                    </div>
                    
                </div>
            </div>

		  <div class="row">
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					<div class="table-responsive">
						<table id="productorder" class="table table-hover no-wrap product-order" data-page-size="10">
							<thead>
								<tr>
									 <th>Nom agent </th>
									 <th>Email</th>
									 <th>Code</th>
									 <th>Action</th>
									 
								</tr>
							</thead>
							<tbody>
								@foreach(App\Agent::all() as $agent)
									<tr>	
										<td>{{$agent->name}}</td>
										<td>{{$agent->email}}</td>
										
										<td>{{$agent->code_vente}}</td>
									
									
										
										<td><a href="{{route('getUpdateAgent', $agent)}}" class="text-info mr-10" data-toggle="tooltip" data-original-title="Modifier">
												<i class="ti-marker-alt"></i>
											</a> 
											<a href="{{route('deleteAgent', $agent)}}" class="text-danger" data-original-title="Delete" data-toggle="Supprime">
												<i class="ti-trash"></i>
											</a>
											
										</td>
									</tr>
								@endforeach

							</tbody>						
						</table>
					</div>
				  </div>
				</div>
			  </div>		  
		  </div>

		</section>
		<!-- /.content -->



    	<!-- /.content -->
        </div>
  </div>
  <!-- /.content-wrapper -->

 
  @include('Admin.includes.footer')
  <!-- Control Sidebar -->
 
	@endsection
