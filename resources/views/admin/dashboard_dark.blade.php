
<!DOCTYPE html>
<html lang="en">
@include('admin.header')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">

    <!-- Left navbar links -->
   @include('admin.top_left_navbar')
  <!-- Left navbar links -->

    <!-- Right navbar links (optional) -->
    @include('admin.top_right_navbar')
     <!-- /.Right navbar links  -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      @include('admin.user_panel')
      <!-- /.Sidebar user panel -->

      <!-- SidebarSearch Form (optional) -->
      @include('admin.sidebar_search')
      <!-- /.SidebarSearch Form  -->

    @include('admin.sidebar')
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Info boxes (optional) -->
       @include('includes.info_box')
        <!-- /.Info boxes-->

        <div>
          @yield('contents')
        </div>
        
        <!-- Graph section (optional) -->
        @include('includes.graph')
        <!-- /.Graph section -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE (optional) -->
            @include('includes.map')
            <!-- /.MAP & BOX PANE -->
            <div class="row">

              <div class="col-md-6">
                <!-- DIRECT CHAT  (optional) -->
                @include('includes.chat')
                <!--/.direct-chat -->
              </div>
              <!-- /.col -->

              <!-- User section (optional) -->
              <div class="col-md-6">
                <!-- USERS LIST -->
                @include('includes.users')
                <!-- /.USERS LIST -->
              </div>
               <!-- /.User section -->
               
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS (optional) -->
            @include('includes.orders')
            <!-- /.TABLE: LATEST ORDERS -->
            
      
          </div>
          <!-- /.col -->

           <!-- Info Boxes Style 2 (optional) -->
          <div class="col-md-4">
            @include('includes.info_box1')
            @include('includes.info_box2')
            @include('includes.info_box3')    
          </div>
          <!-- /.col -->
          <!-- /.Info Boxes Style 2 (optional) -->

        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

@include('admin.footer')
</body>
</html>
