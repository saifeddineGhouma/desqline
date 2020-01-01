<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dashboard-template.multipurposethemes.com/main-ltr/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2019 21:50:11 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://dashboard-template.multipurposethemes.com/images/favicon.ico">

    <title>sous-traitant </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor_components/datatable/datatables.min.css"/>
	
	<!-- theme style -->
	<link rel="stylesheet" href="/css/style1.css">
	
	<!-- Admin skins -->
	<link rel="stylesheet" href="/css/skin_color.css">	


</head>
<body class="hold-transition light-skin sidebar-mini theme-blueindigo onlyheader">
<div class="wrapper">
	
  <div class="art-bg">
	  <img src="http:dashboard-template.multipurposethemes.com/images/art1.svg" alt="" class="art-img light-img">
	  <img src="http:dashboard-template.multipurposethemes.com/images/art2.svg" alt="" class="art-img dark-img">
	  <img src="http:dashboard-template.multipurposethemes.com/images/art-bg.svg" alt="" class="wave-img light-img">
	  <img src="http:dashboard-template.multipurposethemes.com/images/art-bg2.svg" alt="" class="wave-img dark-img">
  </div>

@yield('content')


 <aside class="control-sidebar">
	  
      <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  
      <!-- Create the tabs -->
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
  
      <!-- jQuery 3 -->
      <script src="assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
      
      <!-- fullscreen -->
      <script src="assets/vendor_components/screenfull/screenfull.js"></script>
      
      <!-- popper -->
      <script src="assets/vendor_components/popper/dist/popper.min.js"></script>
      
      <!-- Bootstrap 4.0-->
      <script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
      
      <!-- This is data table -->
      <script src="assets/vendor_components/datatable/datatables.min.js"></script>
      
      <!-- SlimScroll -->
      <script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
      
      <!-- FastClick -->
      <script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
      
      <!-- Sparkline -->
      <script src="assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
      
      <!-- DashboardX Admin App -->
      <script src="js/template.js"></script>
      
      <!-- DashboardX Admin for demo purposes -->
      <script src="js/demo.js"></script>
      
      <!-- DashboardX Admin for Data Table -->
      <script src="js/pages/data-table.js"></script>
      
      
  </body>
  
  <!-- Mirrored from dashboard-template.multipurposethemes.com/main-ltr/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2019 21:50:11 GMT -->
  </html>