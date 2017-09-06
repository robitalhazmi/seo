@extends('layouts.layout')

@section('title')
  Dashboard | SEO-UNAIR
@endsection

@section('link')
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
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
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/seo/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-md-3">
        <!-- Donut chart -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>
            <h3 class="box-title">External Backlinks</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div id="external-backlinks" style="height: 300px;"></div>
          </div>
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
        <!-- Donut chart -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>

            <h3 class="box-title">Class C Subnets</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div id="class-c-subnets" style="height: 300px;"></div>
          </div>
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-3">
        <!-- Donut chart -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>

            <h3 class="box-title">External Backlinks EDU</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div id="external-backlinks-edu" style="height: 300px;"></div>
          </div>
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
        <!-- Donut chart -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>

            <h3 class="box-title">Indexed URLs</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div id="indexed-urls" style="height: 300px;"></div>
          </div>
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-3">
        <!-- Donut chart -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>

            <h3 class="box-title">Referring Domains</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div id="referring-domains" style="height: 300px;"></div>
          </div>
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
        <!-- Donut chart -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>

            <h3 class="box-title">Trust Flow</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div id="trust-flow" style="height: 300px;"></div>
          </div>
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-3">
        <!-- Donut chart -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>

            <h3 class="box-title">Referring Domains EDU</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div id="referring-domains-edu" style="height: 300px;"></div>
          </div>
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
        <!-- Donut chart -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>

            <h3 class="box-title">Citation Flow</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div id="citation-flow" style="height: 300px;"></div>
          </div>
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">PENJELASAN NILAI SEO</h3>


              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h3>Citation Flow is one of the Majestic Flow Metrics, which is
weighted by the number citations to a given URL, or
Domain.</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h3>Trust Flow is one of the Majestic Flow Metrics, which is
weighted by the number of clicks from a seed set of
trusted sites to a given URL, or Domain.</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h3>A backlink is an incoming link from a different website or
referring domain. Within the SEO industry a "backlink"
can sometimes be referred to as an "in link".
</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h3>Referring domain, also known as "ref domain", is a
website which has a backlink pointing to a page, or link,
to the site you are analysing.</div>

                </div>


                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>


      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">PENJELASAN NILAI SEO 2</h3>


              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h3>The C-subnet count is useful, as it is possible for the
same class C-subnet to be used by one, or associated
organisations. For larger sites, counting the unique
linking relationships across C-subnets can also be useful.</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h3>IndexedURLs: number of indexed (known) URLs on found referring domain - this can be viewed as content size of the domain</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h3>TLD: Top Level Domain extracted from root domain
</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h3>Referring domain, also known as "ref domain", is a
website which has a backlink pointing to a page, or link,
to the site you are analysing.</div>

                </div>


                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>



      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">



            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">



            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">


            <div class="info-box-content">

            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">


            <div class="info-box-content">

            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Rekap Grafis SEO UNAIR</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Data Range Periode: DAILY</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <img src="https://majestic.com/charts/v2/backlinks-discovery-chart/unair.ac.id?w=660&h=240&IndexDataSource=F">
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Keterangan</strong>
                  </p>

                  <div class="progress-group">


                    <div class="progress sm">


                    </div>
                    Grafis Real Time SEO MAJESTIC unair.ac.id
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">


                    <div class="progress sm">
                      <div class="progress-bar progress-bar-blue" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">


                    <div class="progress sm">

                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">


                    <div class="progress sm">

                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">

                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">

                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">

                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">

                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->



          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Topical Trust Flow</h3>
              (A measure of how close you are to the most trusted websites in almost one thousand categories.)

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Score</th>
                    <th>Percentage</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="#">1</a></td>
                    <td>Reference / Education</td>
                    <td><span class="label label-success">38</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">98,87%</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">2</a></td>
                    <td> Regional / Europe</td>
                    <td><span class="label label-warning">18</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">0,35%</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">3</a></td>
                    <td> World / Bahasa Indonesia</td>
                    <td><span class="label label-danger">18</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">0,33%</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">4</a></td>
                    <td> Science / Social Sciences</td>
                    <td><span class="label label-info">17</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00c0ef" data-height="20">0,17%</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">5</a></td>
                    <td> Arts / Music</td>
                    <td><span class="label label-warning">14</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">0,04%</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">6</a></td>
                    <td> News / Newspapers</td>
                    <td><span class="label label-danger">14</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">0,02%</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="">7</a></td>
                    <td> Society / Philosophy</td>
                    <td><span class="label label-success">13</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">0,02%</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">HISTORIC - EXTERNAL
BACKLINKS</span>
              <span class="info-box-number">5,047,235 (5 tahun)</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">

                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Unique URLs crawled</span>
              <span class="info-box-number">378,527,832,652</span>

              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
              <span class="progress-description">
                    20 May 2017 to 23 Aug 2017
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Unique URLs found</span>
              <span class="info-box-number">873,379,555,098</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
              <span class="progress-description">
                    20 May 2017 to 23 Aug 201
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">FRESH - EXTERNAL
BACKLINKS</span>
              <span class="info-box-number">952,198</span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
              <span class="progress-description">
                    All incoming links from other websites
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->



          <!-- PRODUCT LIST -->


            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
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
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- Sparkline -->
  <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap  -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS -->
  <script src="bower_components/Chart.js/Chart.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- jQuery Knob -->
  <script src="bower_components/jquery-knob/js/jquery.knob.js"></script>
  <!-- FLOT CHARTS -->
  <script src="../../bower_components/Flot/jquery.flot.js"></script>
  <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
  <script src="../../bower_components/Flot/jquery.flot.resize.js"></script>
  <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
  <script src="../../bower_components/Flot/jquery.flot.pie.js"></script>
  <!-- Page script -->
  <script>
    $(function () {
      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [
        { label: '{{ $external_backlinks[0]['item'] }}', data: {{ ($external_backlinks[0]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#e6194b' },
        { label: '{{ $external_backlinks[1]['item'] }}', data: {{ ($external_backlinks[1]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#3cb44b' },
        { label: '{{ $external_backlinks[2]['item'] }}', data: {{ ($external_backlinks[2]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#ffe119' },
        { label: '{{ $external_backlinks[3]['item'] }}', data: {{ ($external_backlinks[3]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#0082c8' },
        { label: '{{ $external_backlinks[4]['item'] }}', data: {{ ($external_backlinks[4]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#f58231' },
        { label: '{{ $external_backlinks[5]['item'] }}', data: {{ ($external_backlinks[5]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#911eb4' },
        { label: '{{ $external_backlinks[6]['item'] }}', data: {{ ($external_backlinks[6]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#46f0f0' },
        { label: '{{ $external_backlinks[7]['item'] }}', data: {{ ($external_backlinks[7]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#f032e6' },
        { label: '{{ $external_backlinks[8]['item'] }}', data: {{ ($external_backlinks[8]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#d2f53c' },
        { label: '{{ $external_backlinks[9]['item'] }}', data: {{ ($external_backlinks[9]['external_backlinks']/$external_backlinks_total)*100 }}, color: '#fabebe' }
      ]
      $.plot('#external-backlinks', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
      return '<div style="font-size:10px; text-align:center; padding:2px; color: #000; font-weight: 600;">'
        + label
        + '<br>'
        + Math.round(series.percent) + '%</div>'
    }
  </script>
  <script>
    $(function () {
      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [
        { label: '{{ $external_backlinks_edus[0]['item'] }}', data: {{ ($external_backlinks_edus[0]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#e6194b' },
        { label: '{{ $external_backlinks_edus[1]['item'] }}', data: {{ ($external_backlinks_edus[1]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#3cb44b' },
        { label: '{{ $external_backlinks_edus[2]['item'] }}', data: {{ ($external_backlinks_edus[2]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#ffe119' },
        { label: '{{ $external_backlinks_edus[3]['item'] }}', data: {{ ($external_backlinks_edus[3]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#0082c8' },
        { label: '{{ $external_backlinks_edus[4]['item'] }}', data: {{ ($external_backlinks_edus[4]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#f58231' },
        { label: '{{ $external_backlinks_edus[5]['item'] }}', data: {{ ($external_backlinks_edus[5]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#911eb4' },
        { label: '{{ $external_backlinks_edus[6]['item'] }}', data: {{ ($external_backlinks_edus[6]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#46f0f0' },
        { label: '{{ $external_backlinks_edus[7]['item'] }}', data: {{ ($external_backlinks_edus[7]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#f032e6' },
        { label: '{{ $external_backlinks_edus[8]['item'] }}', data: {{ ($external_backlinks_edus[8]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#d2f53c' },
        { label: '{{ $external_backlinks_edus[9]['item'] }}', data: {{ ($external_backlinks_edus[9]['external_backlinks_edu']/$external_backlinks_edu_total)*100 }}, color: '#fabebe' }
      ]
      $.plot('#external-backlinks-edu', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })
  </script>
  <script>
    $(function () {
      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [
        { label: '{{ $referring_domains[0]['item'] }}', data: {{ ($referring_domains[0]['referring_domains']/$referring_domains_total)*100 }}, color: '#e6194b' },
        { label: '{{ $referring_domains[1]['item'] }}', data: {{ ($referring_domains[1]['referring_domains']/$referring_domains_total)*100 }}, color: '#3cb44b' },
        { label: '{{ $referring_domains[2]['item'] }}', data: {{ ($referring_domains[2]['referring_domains']/$referring_domains_total)*100 }}, color: '#ffe119' },
        { label: '{{ $referring_domains[3]['item'] }}', data: {{ ($referring_domains[3]['referring_domains']/$referring_domains_total)*100 }}, color: '#0082c8' },
        { label: '{{ $referring_domains[4]['item'] }}', data: {{ ($referring_domains[4]['referring_domains']/$referring_domains_total)*100 }}, color: '#f58231' },
        { label: '{{ $referring_domains[5]['item'] }}', data: {{ ($referring_domains[5]['referring_domains']/$referring_domains_total)*100 }}, color: '#911eb4' },
        { label: '{{ $referring_domains[6]['item'] }}', data: {{ ($referring_domains[6]['referring_domains']/$referring_domains_total)*100 }}, color: '#46f0f0' },
        { label: '{{ $referring_domains[7]['item'] }}', data: {{ ($referring_domains[7]['referring_domains']/$referring_domains_total)*100 }}, color: '#f032e6' },
        { label: '{{ $referring_domains[8]['item'] }}', data: {{ ($referring_domains[8]['referring_domains']/$referring_domains_total)*100 }}, color: '#d2f53c' },
        { label: '{{ $referring_domains[9]['item'] }}', data: {{ ($referring_domains[9]['referring_domains']/$referring_domains_total)*100 }}, color: '#fabebe' }
      ]
      $.plot('#referring-domains', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })
  </script>
  <script>
    $(function () {
      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [
        { label: '{{ $referring_domains_edus[0]['item'] }}', data: {{ ($referring_domains_edus[0]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#e6194b' },
        { label: '{{ $referring_domains_edus[1]['item'] }}', data: {{ ($referring_domains_edus[1]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#3cb44b' },
        { label: '{{ $referring_domains_edus[2]['item'] }}', data: {{ ($referring_domains_edus[2]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#ffe119' },
        { label: '{{ $referring_domains_edus[3]['item'] }}', data: {{ ($referring_domains_edus[3]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#0082c8' },
        { label: '{{ $referring_domains_edus[4]['item'] }}', data: {{ ($referring_domains_edus[4]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#f58231' },
        { label: '{{ $referring_domains_edus[5]['item'] }}', data: {{ ($referring_domains_edus[5]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#911eb4' },
        { label: '{{ $referring_domains_edus[6]['item'] }}', data: {{ ($referring_domains_edus[6]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#46f0f0' },
        { label: '{{ $referring_domains_edus[7]['item'] }}', data: {{ ($referring_domains_edus[7]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#f032e6' },
        { label: '{{ $referring_domains_edus[8]['item'] }}', data: {{ ($referring_domains_edus[8]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#d2f53c' },
        { label: '{{ $referring_domains_edus[9]['item'] }}', data: {{ ($referring_domains_edus[9]['referring_domains_edu']/$referring_domains_edu_total)*100 }}, color: '#fabebe' }
      ]
      $.plot('#referring-domains-edu', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })
  </script>
  <script>
    $(function () {
      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [
        { label: '{{ $class_c_subnets[0]['item'] }}', data: {{ ($class_c_subnets[0]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#e6194b' },
        { label: '{{ $class_c_subnets[1]['item'] }}', data: {{ ($class_c_subnets[1]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#3cb44b' },
        { label: '{{ $class_c_subnets[2]['item'] }}', data: {{ ($class_c_subnets[2]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#ffe119' },
        { label: '{{ $class_c_subnets[3]['item'] }}', data: {{ ($class_c_subnets[3]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#0082c8' },
        { label: '{{ $class_c_subnets[4]['item'] }}', data: {{ ($class_c_subnets[4]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#f58231' },
        { label: '{{ $class_c_subnets[5]['item'] }}', data: {{ ($class_c_subnets[5]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#911eb4' },
        { label: '{{ $class_c_subnets[6]['item'] }}', data: {{ ($class_c_subnets[6]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#46f0f0' },
        { label: '{{ $class_c_subnets[7]['item'] }}', data: {{ ($class_c_subnets[7]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#f032e6' },
        { label: '{{ $class_c_subnets[8]['item'] }}', data: {{ ($class_c_subnets[8]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#d2f53c' },
        { label: '{{ $class_c_subnets[9]['item'] }}', data: {{ ($class_c_subnets[9]['class_c_subnets']/$class_c_subnets_total)*100 }}, color: '#fabebe' }
      ]
      $.plot('#class-c-subnets', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })
  </script>
  <script>
    $(function () {
      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [
        { label: '{{ $indexed_urls[0]['item'] }}', data: {{ ($indexed_urls[0]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#e6194b' },
        { label: '{{ $indexed_urls[1]['item'] }}', data: {{ ($indexed_urls[1]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#3cb44b' },
        { label: '{{ $indexed_urls[2]['item'] }}', data: {{ ($indexed_urls[2]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#ffe119' },
        { label: '{{ $indexed_urls[3]['item'] }}', data: {{ ($indexed_urls[3]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#0082c8' },
        { label: '{{ $indexed_urls[4]['item'] }}', data: {{ ($indexed_urls[4]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#f58231' },
        { label: '{{ $indexed_urls[5]['item'] }}', data: {{ ($indexed_urls[5]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#911eb4' },
        { label: '{{ $indexed_urls[6]['item'] }}', data: {{ ($indexed_urls[6]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#46f0f0' },
        { label: '{{ $indexed_urls[7]['item'] }}', data: {{ ($indexed_urls[7]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#f032e6' },
        { label: '{{ $indexed_urls[8]['item'] }}', data: {{ ($indexed_urls[8]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#d2f53c' },
        { label: '{{ $indexed_urls[9]['item'] }}', data: {{ ($indexed_urls[9]['indexed_urls']/$indexed_urls_total)*100 }}, color: '#fabebe' }
      ]
      $.plot('#indexed-urls', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })
  </script>
  <script>
    $(function () {
      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [
        { label: '{{ $trust_flows[0]['item'] }}', data: {{ ($trust_flows[0]['trust_flow']/$trust_flow_total)*100 }}, color: '#e6194b' },
        { label: '{{ $trust_flows[1]['item'] }}', data: {{ ($trust_flows[1]['trust_flow']/$trust_flow_total)*100 }}, color: '#3cb44b' },
        { label: '{{ $trust_flows[2]['item'] }}', data: {{ ($trust_flows[2]['trust_flow']/$trust_flow_total)*100 }}, color: '#ffe119' },
        { label: '{{ $trust_flows[3]['item'] }}', data: {{ ($trust_flows[3]['trust_flow']/$trust_flow_total)*100 }}, color: '#0082c8' },
        { label: '{{ $trust_flows[4]['item'] }}', data: {{ ($trust_flows[4]['trust_flow']/$trust_flow_total)*100 }}, color: '#f58231' },
        { label: '{{ $trust_flows[5]['item'] }}', data: {{ ($trust_flows[5]['trust_flow']/$trust_flow_total)*100 }}, color: '#911eb4' },
        { label: '{{ $trust_flows[6]['item'] }}', data: {{ ($trust_flows[6]['trust_flow']/$trust_flow_total)*100 }}, color: '#46f0f0' },
        { label: '{{ $trust_flows[7]['item'] }}', data: {{ ($trust_flows[7]['trust_flow']/$trust_flow_total)*100 }}, color: '#f032e6' },
        { label: '{{ $trust_flows[8]['item'] }}', data: {{ ($trust_flows[8]['trust_flow']/$trust_flow_total)*100 }}, color: '#d2f53c' },
        { label: '{{ $trust_flows[9]['item'] }}', data: {{ ($trust_flows[9]['trust_flow']/$trust_flow_total)*100 }}, color: '#fabebe' }
      ]
      $.plot('#trust-flow', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })
  </script>
  <script>
    $(function () {
      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [
        { label: '{{ $citation_flows[0]['item'] }}', data: {{ ($citation_flows[0]['citation_flow']/$citation_flow_total)*100 }}, color: '#e6194b' },
        { label: '{{ $citation_flows[1]['item'] }}', data: {{ ($citation_flows[1]['citation_flow']/$citation_flow_total)*100 }}, color: '#3cb44b' },
        { label: '{{ $citation_flows[2]['item'] }}', data: {{ ($citation_flows[2]['citation_flow']/$citation_flow_total)*100 }}, color: '#ffe119' },
        { label: '{{ $citation_flows[3]['item'] }}', data: {{ ($citation_flows[3]['citation_flow']/$citation_flow_total)*100 }}, color: '#0082c8' },
        { label: '{{ $citation_flows[4]['item'] }}', data: {{ ($citation_flows[4]['citation_flow']/$citation_flow_total)*100 }}, color: '#f58231' },
        { label: '{{ $citation_flows[5]['item'] }}', data: {{ ($citation_flows[5]['citation_flow']/$citation_flow_total)*100 }}, color: '#911eb4' },
        { label: '{{ $citation_flows[6]['item'] }}', data: {{ ($citation_flows[6]['citation_flow']/$citation_flow_total)*100 }}, color: '#46f0f0' },
        { label: '{{ $citation_flows[7]['item'] }}', data: {{ ($citation_flows[7]['citation_flow']/$citation_flow_total)*100 }}, color: '#f032e6' },
        { label: '{{ $citation_flows[8]['item'] }}', data: {{ ($citation_flows[8]['citation_flow']/$citation_flow_total)*100 }}, color: '#d2f53c' },
        { label: '{{ $citation_flows[9]['item'] }}', data: {{ ($citation_flows[9]['citation_flow']/$citation_flow_total)*100 }}, color: '#fabebe' }
      ]
      $.plot('#citation-flow', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })
  </script>
  <script>
  var currentURL = window.location.pathname.toString();
  if (currentURL = 'dashboard') {
    $('li#dashboard').addClass('active')
  }
  </script>

  <script>
  $(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    $(".sparkline").each(function () {
      var $this = $(this);
      $this.sparkline('html', $this.data());
    });

    /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines();
    drawMouseSpeedDemo();

  });
  </script>
@endsection
