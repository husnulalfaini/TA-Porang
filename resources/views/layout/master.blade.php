

<!DOCTYPE html>
<html lang="en">
   <head>
      @include('layout.top')
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Navbar -->
         @include('layout.header')
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         @include('layout.sidebar')
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0">@yield('header')</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            @yield('content')
            <!-- right col -->
            </div>
            <!-- /.row (main row) -->
         </div>
         <!-- /.container-fluid -->
         <!-- </section> -->
         <!-- /.content -->
        @include('layout.footer')
      </div>
      <!-- /.Bottom -->
      @include('layout.bottom')
      <!-- /.Bottom -->
      
   </body>
</html>

