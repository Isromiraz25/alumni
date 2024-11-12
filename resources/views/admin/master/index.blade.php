<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="x-icon" href="{{ asset('assets/img/logo/logo_real.ico') }}">
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard I-KATA</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('admin/css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('admin/css/timeline.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('admin/css/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>


#timedate {
  font: small-caps lighter 43px/150% "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
  text-align:left;
  width: 50%;
  margin: 40px auto;
  border-left: 3px solid #ed1f24;
  padding: 20px;
}

        </style>
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header text-center">
                    <img src="{{ asset('assets/img/logo/logo_real.ico') }}" alt="Logo" style="height: 30px; width: auto;">
                    <!-- <a class="navbar-brand" href="#">I-KATA</a> -->
                </div>
                

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="/"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> {{auth()->user()->name}} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">


                            <li class="divider"></li>
                            <li>
                                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
            </nav>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <aside class="sidebar navbar-default" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">

                                     {{auth()->user()->name}}

                            </div>

                        </li>
                        @if(auth()->user()->role == 'user')
                        <li>
                            <a href="/home" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.dataalumni.alumni') }}" class="active"><i class="fa fa-database" aria-hidden="true"></i> Data Alumni</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.saran.index') }}" class="active"><i class="fa fa-user-plus" aria-hidden="true"></i> Saran</a>
                        </li>
                        @else
                        <li>
                            <a href="/home" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="{{ route('admin.dataalumni.alumni') }}" class="active"><i class="fa fa-database" aria-hidden="true"></i> Data Alumni</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.gallery.gallery') }}" class="active"><i class="fa fa-book" aria-hidden="true"></i> Galerry Kegiatan</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.mudir.mudir') }}" class="active"><i class="fa fa-male" aria-hidden="true"> Data Mudir</i> </a>
                            </li>
                        <li>
                        <li>
                                <a href="{{ route('admin.ust.ust') }}" class="active"><i class="fa fa-male" aria-hidden="true"> Data Guru</i> </a>
                                </li>
                        <li>
                        <a href="{{ route('admin.work.work') }}" class="active"><i class="fa fa-info-circle" aria-hidden="true"></i> Informasi BursaKerja</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.infoalumni.infoalumni') }}" class="active"><i class="fa fa-info-circle" aria-hidden="true"></i> Informasi Alumni</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.infosantri.infosantri') }}" class="active"><i class="fa fa-info-circle" aria-hidden="true"></i> Informasi Santri</a>
                        </li>
                    <li>
                        <a href="{{ route('admin.tambahangkatan.angkatan') }}" class="active"><i class="fa fa-users" aria-hidden="true"></i> Tambah Angkatan</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.siswa.siswa') }}" class="active"><i class="fa fa-users" aria-hidden="true"></i> Siswa Baru</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('admin.saran.index') }}" class="active"><i class="fa fa-envelope" aria-hidden="true"></i> Saran</a>
                    </li> --}}

                    <li>
                        <a href="{{ route('admin.youtube.index') }}" class="active"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</a>
                    </li>
                        @endif

                    </ul>
                </div>
            </aside>
            <!-- /.sidebar -->


            <div id="page-wrapper">
                <div class="container-fluid">

                    <!-- /.row -->
                 @yield('content')
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('admin/js/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('admin/js/startmin.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
        <script>


Number.prototype.pad = function(n) {
  for (var r = this.toString(); r.length < n; r = 0 + r);
  return r;
};

function updateClock() {
  var now = new Date();
  var milli = now.getMilliseconds(),
    sec = now.getSeconds(),
    min = now.getMinutes(),
    hou = now.getHours(),
    mo = now.getMonth(),
    dy = now.getDate(),
    yr = now.getFullYear();
  var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  var tags = ["mon", "d", "y", "h", "m", "s", "mi"],
    corr = [months[mo], dy, yr, hou.pad(2), min.pad(2), sec.pad(2), milli];
  for (var i = 0; i < tags.length; i++)
    document.getElementById(tags[i]).firstChild.nodeValue = corr[i];
}

function initClock() {
  updateClock();
  window.setInterval("updateClock()", 1);
}

// END CLOCK SCRIPT

        </script>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    </body>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>

    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

</html>
