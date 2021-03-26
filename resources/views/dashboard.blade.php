@extends('layout.master')

@section('content')
<div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                     <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                           <div class="inner">
                              <h3>50 Orang</h3>
                              <p>Total Petani</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                           </div>
                        </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                           <div class="inner">
                              <h3>50 Hektar</h3>
                              <p>Luas Lahan</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                           </div>
                        </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                           <div class="inner">
                              <h3>53 Kilo</h3>
                              <p>Total Panen</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                           </div>
                        </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                           <div class="inner">
                              <h3>50</h3>
                              <p>Jumlah Lahan</p>
                           </div>
                           <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                           </div>
                        </div>
                     </div>
                     <!-- ./col -->
                  </div>
                  <!-- /.row -->
                  <!-- Main row -->
                  <div class="row">
                     <!-- Left col -->
                     <!-- <section class="col-lg-12 connectedSortable"> -->
                     <!-- Custom tabs (Charts with tabs)-->
                     <div class="col-md-6">
                        <!-- GRAFIK -->
                        <div class="card card-success">
                           <div class="card-header">
                              <h3 class="card-title">GRAFIK</h3>
                              <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                 <i class="fas fa-minus"></i>
                                 </button>
                                 <button type="button" class="btn btn-tool" data-card-widget="remove">
                                 <i class="fas fa-times"></i>
                                 </button>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="chart">
                                 <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 334px;" width="334" height="250" class="chartjs-render-monitor"></canvas>
                              </div>
                           </div>
                           <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                     </div>
                     <div class="col-md-6">
                        <!-- PIE GRAFIK -->
                        <div class="card card-success">
                           <div class="card-header">
                              <h3 class="card-title">GRAFIK</h3>
                              <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                 <i class="fas fa-minus"></i>
                                 </button>
                                 <button type="button" class="btn btn-tool" data-card-widget="remove">
                                 <i class="fas fa-times"></i>
                                 </button>
                              </div>
                           </div>
                           <div class="card-body">
                              <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                           </div>
                           <!-- /.card-body -->
                        </div>
                     </div>
                     <!-- </section> -->
                  </div>
                  <!-- /.Left col -->
                  <!-- right col (We are only adding the ID to make the widgets sortable)-->
                  <!-- <section class="col-lg-5 connectedSortable"> -->
                  <!-- Main content -->
                  <section class="content">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-12">
                              <div class="card">
                                 <div class="card-header">
                                    <h3 class="card-title">Data Panen Petani</h3>
                                 </div>
                                 <!-- /.card-header -->
                                 <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                       <thead>
                                          <tr>
                                             <th>Petani</th>
                                             <th>Alamat</th>
                                             <th>Tanggal Tanam</th>
                                             <th>Tanggal Panen</th>
                                             <th>Jumlah Panen</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                          <tr>
                                             <td>Midun</td>
                                             <td>Wongsorejo
                                             </td>
                                             <td>14/02/2018</td>
                                             <td>14/11/2020</td>
                                             <td>10 kintal</td>
                                          </tr>
                                       </tbody>
                                       <tfoot>
                                          <tr>
                                             <th>Petani</th>
                                             <th>Alamat</th>
                                             <th>Tanggal Tanam</th>
                                             <th>Tanggal Panen</th>
                                             <th>Jumlah Panen</th>
                                          </tr>
                                       </tfoot>
                                    </table>
                                 </div>
                                 <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                           </div>
                           <!-- /.col -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /.container-fluid -->
                  </section>
                  <!-- /.content -->
                   <!-- jQuery -->
      <script src="{{asset('public/asset/plugins/jquery/jquery.min.js')}}"></script>
      <!-- Bootstrap 4 -->
      <script src="{{asset('public/asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- DataTables  & Plugins -->
      <script src="{{asset('public/asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/jszip/jszip.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/pdfmake/pdfmake.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/pdfmake/vfs_fonts.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
      <script>
         $('#example2').DataTable({
           "paging": true,
           "lengthChange": false,
           "searching": false,
           "ordering": true,
           "info": true,
           "autoWidth": false,
           "responsive": true,
         });
      </script>
@endsection