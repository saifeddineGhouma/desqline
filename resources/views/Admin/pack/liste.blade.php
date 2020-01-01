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
									 <th>Nom Pack </th>
									 <th>Prix pack</th>
									 <th>Description</th>
									 <th>Action</th>
									 
								</tr>
							</thead>
							<tbody>
								@foreach($packs as $pack)
									<tr>	
										<td>{{$pack->name}}</td>
										<td>{{$pack->prix}}</td>
										
										<td>{{$pack->description}}</td>
									
									
										
										<td><a href="{{route('getUpdatePack',$pack)}}" class="text-info mr-10" data-toggle="tooltip" data-original-title="Modifier">
												<i class="ti-marker-alt"></i>
											</a> 
											<a href="{{route('deletePack',$pack)}}" class="text-danger" data-original-title="Delete" data-toggle="Supprime">
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
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
 
 @include('Admin.includes.footer')
  <!-- Control Sidebar -->
 
	@endsection