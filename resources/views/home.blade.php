<!DOCTYPE html>
<html lang="en">

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" value="notranslate">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--  Scripts 
        <script src="{{ asset('js/app.js') }}" defer></script>--}} 

        <!-- Bootstrap core CSS -->

        <link href="/panel/css/bootstrap.min.css" rel="stylesheet">

        <link href="/panel/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="/panel/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="/panel/css/custom.css" rel="stylesheet">

        <link href="/panel/css/icheck/flat/green.css" rel="stylesheet" />
        <link href="/panel/css/floatexamples.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="/panel/js/jquery.min.js"></script>
        <script src="/panel/js/nprogress.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            NProgress.start();
        </script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      



  </head>


  <body class="nav-md">

    @if (session('alert_error'))
    <script>
      $(document).ready(function()
      {
        $("#profile").modal("show");
    });
</script>
@include('sections.modal_profile')
@endif




@include('sections.menu_panel')
<!-- page content -->
<div class="right_col" role="main">

    @include('sections.preload')

    <!-- top tiles -->
    <div class="row tile_count">




         @if (count($participants)<=0)
            <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Participantes</span>
                <div class="count green">{{ count($participants) }}</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>NO HAY</i> Participantes</span>
            </div>
        </div>
        @else
         <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Total Participantes</span>
                <div class="count green">{{ count($participants) }}</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>100% </i> Participantes</span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-user"></i> Participantes eliminados</span>
                <div class="count" style="color: red;">{{ count($pDeleted) }}</div>
                <span class="count_bottom"><i class="red">{{ number_format((count($pDeleted)*100)/count($participants),2,',','.') }} %</i> Eliminados </span>
            </div>
        </div>
        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-clock-o"></i> Participantes en Sorteo</span>
                <div class="count">{{ count($participants)-count($pDeleted)  }}</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>{{ number_format(100-(count($pDeleted)*100)/count($participants),2,',','.') }} % </i> Siguen </span>
            </div>
        </div>
         @endif
       


    </div>
    <!-- /top tiles -->

    <div class="row">



       <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><b>DATOS DE LOS PARTICIPANTES</b><small>(Total : {{ count($participants) }} participantes)</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div style="overflow-x:auto;">
                @if (count($participants)<1)
                <h4>NO HAY PARTICIOPANTES EN EL SORTEO !</h4>
                @else
                <div class="x_content">
                    @if (session('participant'))
                    <div class="alert alert-danger">
                        <i class="fa fa-trash fa-2x" aria-hidden="true" style="color: white !important;"></i>&nbsp;&nbsp;{{ session('participant') }}
                    </div>
                    @endif

                    <p>Los Participantes <code>Cumplen</code> con todos los requisitos para el sorteo !</p>
                    <script src="/panel/js/buscador.js"></script>
                    <div class="title_right" style="padding-top: 5px;">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                           <form  align ="left" id="form__" name="buscador" method="post" action="{{ $_SERVER['PHP_SELF'] }}" onKeypress="if(event.keyCode == 13) event.returnValue = false;" > 
                              <div class="input-group">
                                <input type="text" class="form-control"  value=""  id="buscar_employee" name="buscar" placeholder=" &#xf044; Buscar Participante" onkeyup="buscarItem(this.id)" style="font-family:Arial, FontAwesome">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">Go!</button>
                              </span>
                          </div>

                      </form>
                  </div>


                  <table id="buscar_employees" class="table table-striped responsive-utilities jambo_table bulk_action" >
                    <thead>
                        <tr class="headings">
                            <th style="width: 1%;text-align: center;">
                                <i class="fa fa-registered" aria-hidden="true" ></i>&nbsp;&nbsp;
                            </th>
                            <th class="column-title" >Nacimiento </th>
                            <th class="column-title" >Nombres </th>
                            <th class="column-title" >Apellidos </th>
                            <th class="column-title" >Email </th>
                            <th class="column-title" >Teléfono </th>
                            <th class="column-title" >Supermercado</th>
                            <th class="column-title" >Recibo</th>
                            <th class="column-title" >Veri...</th>
                            <th class="column-title" >Inscripción</th>

                            <th class="column-title " style="width: 1%;font-size: 18px;"><span class="nobr"><i class="fa fa-trash"></i></span>
                            </th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($participants as $p)
                        @if ($p->state == null)
                        <tr class="even pointer" >
                           {{--   <td class="a-center "><a href="data_users/{{ $p->fper }}"><img src="data_users/{{ $p->fper }}" class="img-resposive" width="40px;" id="silverfox" ></a>
                            --}}
                            <td class="cv " ><a href="data_users/{{ $p->fper }}" target="_blank"><p style="width: 90px !important" data-toggle="tooltip" title="Nº : {{ $p->recibo }}">VER RECIBO</p></a>
                            </td>
                            <td class="cv" ><p data-toggle="tooltip" title="{{ $p->nacimiento }}">{{ $p->nacimiento }}</p></td>
                            <td class=" cv"><p data-toggle="tooltip" title="{{ $p->nombres }}">{{ $p->nombres }}</p> </td>
                            <td class=" cv"><p data-toggle="tooltip" title="{{ $p->apellidos }}">{{ $p->apellidos }}</p> </td>
                            <td class=" cv"><p data-toggle="tooltip" title="{{ $p->email }}">{{ $p->email }}</p> </td>
                            <td class=" cv"><p data-toggle="tooltip" title="{{ $p->telefono }}">{{ $p->telefono }}</p> </td>
                            <td class=" cv"><p data-toggle="tooltip" title="{{ $p->supermercado }}">{{ $p->supermercado }}</p></td>
                            <td class="cv"><p  data-toggle="tooltip" title="{{ $p->recibo }}">{{ $p->recibo }}</p></td>
                            <td class="cv"><p>{{ $p->code }}</p></td>
                            <td class="cv-cre "><p data-toggle="tooltip" title="{{ $p->created_at }}">{{ $p->created_at }}</p></td>
                            <td class="cv">
                               <script type="text/javascript">
                                $(document).ready(function(e){
                                    $('[data-toggle="tooltip"]').tooltip(); 
                                });
                            </script>

                            <form class="form-horizontal" method="POST" action="{{ route('deleted_participants') }}"  onsubmit="return preload()" autocomplete="off">
                                {{ csrf_field() }}

                                <input type="hidden" name="id" value="{{ $p->id }}">
                                <input type="hidden" name="nombres" value="{{ $p->nombres }}">
                                <button type="submit" class="btn btn-danger btn-xs" onclick="
                                return confirm('Esta SEGURO que desea borrar el participante de su lista?')" 
                                ><i class="fa fa-trash"></i></button>

                            </form>
                        </td>
                    </tr>

                    @endif

                    @endforeach

                </tbody>

            </table>
        </div>
        @endif
    </div>
</div>
</div>
@include('sections.footer')

</div>


<div class="clearfix"></div>

<br />




<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="/panel/js/bootstrap.min.js"></script>

<!-- gauge js -->
<script type="text/javascript" src="/panel/js/gauge/gauge.min.js"></script>
<script type="text/javascript" src="/panel/js/gauge/gauge_demo.js"></script>

<!-- bootstrap progress js -->
<script src="/panel/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="/panel/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="/panel/js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="/panel/js/moment.min.js"></script>
<script type="text/javascript" src="/panel/js/datepicker/daterangepicker.js"></script>

<script src="/panel/js/custom.js"></script>




<script>
    NProgress.done();
</script>
<!-- /datepicker -->
<!-- /footer content -->
</body>

</html>


{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}