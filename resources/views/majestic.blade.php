@extends('layouts.layout')

@section('title')
  Majestic | SEO-UNAIR
@endsection

@section('link')
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
    .col-sm-12 {
      overflow-x: auto;
      padding-left: 0px;
      margin-left: 15px;
      width: 98.62%;
    }
    th {
      vertical-align: inherit !important;
      background-color: #337ab7;
      color: #fff;
    }
    :after {
      bottom: 29px !important;
    }
  </style>
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Majestic
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/seo/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">DATA SEO</a></li>
        <li class="active">Majestic</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data SEO dari Majestic</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="overflow">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Item</th>
                  <th>Status</th>
                  <th>External Backlinks</th>
                  <th>External Backlinks EDU</th>
                  <th>Referring Domains</th>
                  <th>Referring Domains EDU</th>
                  <th>Class C Subnets</th>
                  <th>Indexed URLs</th>
                  <th>Trust Flow</th>
                  <th>Citation Flow</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($datas as $data)
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->item }}</td>
                      <td>{{ $data->status }}</td>
                      <td>{{ $data->external_backlinks }}</td>
                      <td>{{ $data->external_backlinks_edu }}</td>
                      <td>{{ $data->referring_domains }}</td>
                      <td>{{ $data->referring_domains_edu }}</td>
                      <td>{{ $data->class_c_subnets }}</td>
                      <td>{{ $data->indexed_urls }}</td>
                      <td>{{ $data->trust_flow }}</td>
                      <td>{{ $data->citation_flow }}</td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>Item</th>
                  <th>Status</th>
                  <th>External Backlinks</th>
                  <th>External Backlinks EDU</th>
                  <th>Referring Domains</th>
                  <th>Referring Domains EDU</th>
                  <th>Class C Subnets</th>
                  <th>Indexed URLs</th>
                  <th>Trust Flow</th>
                  <th>Citation Flow</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  Citation Flow is one of the Majestic Flow Metrics, which is 
weighted by the number citations to a given URL, or 
Domain.

Trust Flow is one of the Majestic Flow Metrics, which is 
weighted by the number of clicks from a seed set of 
trusted sites to a given URL, or Domain.

A backlink is an incoming link from a different website or 
referring domain. Within the SEO industry a "backlink" 
can sometimes be referred to as an "in link".

Referring domain, also known as "ref domain", is a 
website which has a backlink pointing to a page, or link, 
to the site you are analysing.

The C-subnet count is useful, as it is possible for the 
same class C-subnet to be used by one, or associated 
organisations. For larger sites, counting the unique 
linking relationships across C-subnets can also be useful.
  <!-- /.content-wrapper -->
@endsection

@section('script')
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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
    if (currentURL = 'majestic') {
      $('li#table').addClass('active menu-open')
      $('li#majestic').addClass('active')
    }
  </script>
@endsection
