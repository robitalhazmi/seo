@extends('layouts.layout')

@section('title')
  Ekspor & Impor | SEO-UNAIR
@endsection

@section('link')
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .col-md-6 {
      height: 100%;
    }
    .modal-button {
      margin: 90px;
    }
    .btn-success {
      margin-left: 5px;
    }
    .modal-header {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      -ms-flex-pack: justify;
      justify-content: space-between;
      padding: 15px;
      border-bottom: 1px solid #e9ecef;
      box-sizing: inherit;
      font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
    }
    .modal-header h5 {
      margin-bottom: 0;
      line-height: 1.5;
      font-size: 2.25rem;
      font-family: inherit;
      font-weight: 500;
      color: inherit;
      margin-top: 0;
      box-sizing: inherit;
    }
    .browse {
      display: inline !important;
    }
    .btn-primary:hover, .btn-primary:active {
      border-color: #0589E7;
    }
    button.close {
      padding: 0;
      background: 0 0;
      border: 0;
      -webkit-appearance: none;
    }
    :after {
      bottom: 19px !important;
    }
    #overflow {
      text-align: center;
    }
  </style>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ekspor & Impor CSV
      </h1>
      <ol class="breadcrumb">
        <li><a href="/seo/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">DATA SEO</a></li>
        <li class="active">CSV</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ekspor & Impor</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="overflow">
                <div class="col-md-6">
                  <!-- Button trigger modal -->
                  <img type="button" class="modal-button btn btn-primary" data-toggle="modal" data-target="#exampleModal" src="images/majestic.jpg" alt="majestic" height="200" width="200">
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Majestic</h5>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="table" value="majestic">
                            <input class="browse" type="file" name="import_file" required />
                            <button class="btn btn-primary">Impor File</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <a href="{{ URL::to('downloadExcel/csv/majestic') }}"><button class="btn btn-success">Ekspor Majestic</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <!-- Button trigger modal -->
                  <img type="button" class="modal-button btn btn-primary" data-toggle="modal" data-target="#exampleModal2" src="images/aharefs.jpg" alt="majestic" height="200" width="200">
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel2">Ahrefs</h5>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="table" value="aharefs">
                            <input class="browse" type="file" name="import_file" required />
                            <button class="btn btn-primary">Impor File</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <a href="{{ URL::to('downloadExcel/csv/aharefs') }}"><button class="btn btn-success">Ekspor Ahrefs</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('script')
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>

  <script>
    var currentURL = window.location.pathname.toString();
    if (currentURL = '/csv') {
      $('li#table').addClass('active menu-open')
      $('li#csv').addClass('active')
    }
  </script>
@endsection
