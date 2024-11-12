@extends('admin.master.index')

@section('content')

    <div class="container-center">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x" aria-hidden="true"></i>

                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $totalAlumni }}</div>
                                            <div>Total Alumni</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left"></span></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x" aria-hidden="true"></i>

                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $totalsiswa }}</div>
                                            <div>Total siswa</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left"></span></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                                            <body onLoad="initClock()">

                                                <div id="timedate">
                                                  <a id="mon">January</a>
                                                  <a id="d">1</a>,
                                                  <a id="y">0</a><br />
                                                  <a id="h">12</a> :
                                                  <a id="m">00</a>:
                                                  <a id="s">00</a>:
                                                  <a id="mi">000</a>
                                                </div>


@endsection
