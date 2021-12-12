
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" value="notranslate">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body>
    @if (session('alert_error'))
    <script>
      $(document).ready(function()
      {
        $("#alert_error").modal("show");
    });
</script>
@include('sections.modal_alert_error')
@endif

@if (session('alert_success'))
<script>
  $(document).ready(function()
  {
    $("#alert_success").modal("show");
});
</script>
@include('sections.modal_alert_success')
@endif
<a href="#ancla"></a>
<div class="portada">
    <div class="box-x"><img src="/images/logo.png" class="responsive" ></div>
    <div class="box-y"><img src="/images/logo2.png" class="responsive"  ></div>
    <div id="header "  >
        <a href="#" ></a>
    </div>
    <div class="container head-r"  >
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('sections.preload')
                <div class="card-body">

                    <h3 class="sbf-title color-1 box-j" ><img src="/images/a1.png"></h3>
                    <h3 class="sbf-title color-1 box" ><img src="/images/a2.png"></h3>
                    <h3 class="sbf-title color-1 box" ><img src="/images/a4.png"></h3>
                    
                    <div class="container" style="margin-bottom: 50px;">
                        <div class="row space ">
                            <div class="col-md-5 box" >
                                <img src="/images/pc.png" >
                            </div>
                            <div class="col-md-7 " >
                                <h1 class="prem-title color-3 font">1<span class="er">er</span>&nbsp;&nbsp;&nbsp;&nbsp; premio</h1>
                               <!-- <h1 class=" color-3 font-prem" >Parranda Virtual con Ale Croatto para el <br> ganador y sus invitados (3 ganadores)</h1>-->

                                <h1 class=" color-3 font-prem">Parranda Virtual con Ale Croatto para el</h1>
                                <h1 class=" color-3 font-prem">ganador y sus invitados <span class="phone">(3 ganadores)</span></h1>
                            </div>
                        </div>
                        <div class="row space">
                            <div class="col-md-5 box">
                                <img src="/images/pb.png" >
                            </div>
                            <div class="col-md-7">
                                <h1 class="prem-title color-3 font">2<span class="er">do</span>&nbsp;&nbsp;&nbsp;&nbsp; premio</h1>
                                <!--<h1 class=" color-3 font-prem">Gift Cards de Econo valorados <br> en $300 (10 ganadores)</h1>-->
                                 <h1 class=" color-3 font-prem">Gift Cards de Econo valorados</h1>
                                <h1 class=" color-3 font-prem">en $300 <span class="phone">(10 ganadores)</span></h1>
                            </div>
                        </div>
                        <div class="row space">
                            <div class="col-md-5 box">
                                <img src="/images/pa.png">
                            </div>
                            <div class="col-md-7">
                                <h1 class="prem-title color-3 font">3<span class="er">er</span>&nbsp;&nbsp;&nbsp;&nbsp; premio</h1>
                                <!--<h1 class=" color-3 font-prem">Gift Cards de Econo valorados <br>en $150 (10 ganadores)</h1>-->

                                 <h1 class=" color-3 font-prem">Gift Cards de Econo valorados</h1>
                                <h1 class=" color-3 font-prem">en $150 <span class="phone">(10 ganadores)</span></h1>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-2">
                            <button type="button" class="btn btn-ttc  font" data-toggle="modal" data-target="#term">👉 Ver reglas aquí 👈</button>

                        </div>
                    </div>
                    <br>
                    <h3 class="scf-title color-1 box" ><img src="/images/a6.png"></h3>
                </div>

                @include('sections.modal_term')

                <div class="text">
                  <div class="container" >
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card" >

                                {{--  <div class="card-header">{{ __('Register') }}</div>--}}
                                @include('sections.preload')
                                <div class="card-body">


                                    <form class="form-horizontal" id="form" method="POST" action="{{ route('registerReceipt') }}" enctype="multipart/form-data" onsubmit="return validacion()" autocomplete="off">
                                        {{ csrf_field() }}

                                        <div class="form-group row {{ $errors->has('nombres') ? ' is-invalid' : '' }}">
                                            <div class="col-md-6 acer">
                                                <input id="name" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" required >
                                                @if ($errors->has('nombres'))
                                                <span class="help-block " role="alert">
                                                    <strong> {{ $errors->first('nombres') }}</strong>
                                                </span>
                                                @endif
                                                <label for="name" class="col-md-12 col-form-label text-md-left font">{{ __('NOMBRE') }}</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required >

                                                @if ($errors->has('apellidos'))
                                                <span class="help-block" role="alert">
                                                    <strong>{{ $errors->first('apellidos') }}</strong>
                                                </span>
                                                @endif
                                                <label for="name" class="col-md-12 col-form-label text-md-left font">{{ __('APELLIDO') }}</label>
                                            </div>
                                        </div>

                                        <div class="form-group row{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                            <div class="col-md-12">
                                                <input id="phone"  type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="telefono" value="{{ old('telefono') }}" maxlength="14" min="1" required  >

                                                @if ($errors->has('telefono'))
                                                <span class="help-block">
                                                    <strong >{{ $errors->first('telefono') }}</strong>
                                                </span>
                                                @endif
                                                <label for="name" class="col-md-12 col-form-label text-md-left font">TELÉFONO</label>
                                            </div>
                                        </div>

                                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="col-md-12">
                                               <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >

                                               @if ($errors->has('email'))
                                               <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                            <label for="name" class="col-md-12 col-form-label text-md-left font">EMAIL</label>
                                        </div>
                                    </div>



                                    <div class="form-group row{{ $errors->has('nacimiento') ? ' has-error' : '' }}">

                                        <div class="col-md-4">
                                            <div class="input-group"> <span class="input-group-addon"></span>
                                                <select id="lunch" class="selectpicker form-control" name="dia" data-live-search="true" required>
                                                    <option value="{{ old('dia')== null? '' : old('dia')}}" >{{ old('dia')== null? "Día" : old('dia')}}</option>
                                                    @for ($i = 1; $i <= 31 ; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor 
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group"> <span class="input-group-addon"></span>
                                                <select id="lunch" class="selectpicker form-control" name="mes" data-live-search="true" required>
                                                    <option value="{{ old('mes')== null? '' : old('mes')}}" >{{ old('mes')== null? "Mes" : old('mes')}}</option>
                                                    <option value="Enero">Enero</option>
                                                    <option value="Febrero">Febrero</option>
                                                    <option value="Marzo">Marzo</option>
                                                    <option value="Abril">Abril</option>
                                                    <option value="Mayo">Mayo</option>
                                                    <option value="Junio">Junio</option>
                                                    <option value="Julio">Julio</option>
                                                    <option value="Agosto">Agosto</option>
                                                    <option value="Septiembre">Septiembre</option>
                                                    <option value="Octubre">Octubre</option>
                                                    <option value="Noviembre">Noviembre</option>
                                                    <option value="Diciembre">Diciembre</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group"> <span class="input-group-addon"></span>
                                                <select id="lunch" class="selectpicker form-control" name="anio" data-live-search="true" required>

                                                    <option value="{{ old('anio')== null? '' : old('anio')}}" >{{ old('anio')== null? "Año" : old('anio')}}</option>
                                                    @for ($i =  date("Y")-18; $i >= 1930 ; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor 

                                                </select>
                                            </div>

                                        </div>
                                        @if ($errors->has('nacimiento'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nacimiento') }}</strong>
                                        </span>
                                        @endif
                                        <label for="name" class="col-md-12 col-form-label text-md-left font" style="margin-left: 15px;margin-bottom: 15px;">FECHA DE NACIMIENTO</label>
                                    </div>




                                    <div class="form-group row{{ $errors->has('supermercado') ? ' has-error' : '' }}">

                                        <div class="col-md-12">
                                            <div class="input-group"> <span class="input-group-addon"></span>
                                                <select   id="supermercado" type="text" name="supermercado"  class="form-control" required>
                                                    <option value="{{ old('supermercado')== null? '' : old('supermercado')}}" >{{ old('supermercado')== null? "SELECCIONA" : old('supermercado')}}</option> 
                                                    @foreach ($supermercados as $s)
                                                    <option value="{{ $s->nombres }}">{{ $s->nombres }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->has('supermercado'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('supermercado') }}</strong>
                                            </span>
                                            @endif
                                            <label for="name" class="col-md-12 col-form-label text-md-left font">{{ __('TIENDA ECONO EN LA QUE COMPRASTE') }}</label>
                                        </div>
                                    </div>

                                    <div class="form-group row{{ $errors->has('recibo') ? ' has-error' : '' }}" >
                                        <div class="col-md-12">
                                            <input id="recibo"  type="text" onkeyup="mayus(this);" class="form-control" name="recibo" value="{{ old('recibo') }}" maxlength="14" min="1" required  >

                                            <script type="text/javascript">
                                                function mayus(e) {
                                                    e.value = e.value.toUpperCase();
                                                }
                                            </script>

                                            @if ($errors->has('recibo'))
                                            <span class="help-block" style="">
                                                <strong >el {{ $errors->first('recibo') }}</strong>
                                            </span>
                                            @endif
                                            <label for="name" class="col-md-12 col-form-label text-md-left font">NÚMERO DE CONTROL</label>
                                        </div>
                                    </div>
                                    <div class="form-group row frec" >

                                        <label for="name" class="col-md-4 col-form-label text-md-center reci font" ><br>FOTO DE RECIBO</label>
                                        <div class="col-md-8" >
                                            <label for="fper_user" class="subir" style="width: 50%;">
                                               <div id="log"></div>
                                               <img src="/images/logo_img.png" id="prev_profile_user_i" width="100%" class="img-fluid "  />
                                           </label>
                                       </div>
                                       <label for="name" class="col-md-4 col-form-label text-md-right"></label>
                                       <div class="col-md-8">
                                           <div class="fper-usu"  >

                                            <img src="/images/rec.jpg" id="prev_profile_user" width="100%" class="img-fluid img-thumbnail"  style="display: none;margin-bottom: 15px;" />
                                        </div>
                                    </div>
                                    <input name="fper" id="fper_user" onchange='validationProfileUser()' type="file" style='display: none;'   />

                                </div>
                                <script type="text/javascript">
                                    function validationProfileUser(){
                                        var fileInput = document.getElementById('fper_user');
                                        var filePath = fileInput.value;
                                        var required_file = "";
                                        var allowedExtensions = /(.jpg|.jpeg|.png|.gif|.JPG|.JPEG|.PNG|.GIF)$/i;
                                        required_file = ".jpg  .png  .gif" ;


                                        if(!allowedExtensions.exec(filePath)){
                                         swal("Upps !", "Solo puede subir la imagen requerida : " +required_file, "info");
                                         fileInput.value = '';
                                         $("#prev_profile_user_i").attr("src", "/images/rec.jpg");
                                         $("#prev_profile_user").attr("src", "/images/rec.jpg");
                                         return false;
                                     }else{
                                        if (fileInput.files && fileInput.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function(e) {

                                                var result=e.target.result;
                                                $('#prev_profile_user').show();
                                                $('#prev_profile_user_i').hide();
                                                $('#log').text('Toca aquí para seleccionar tu recibo');
                                                $('#prev_profile_user').attr("src",result);
                                            };
                                            reader.readAsDataURL(fileInput.files[0]);
                                        }
                                    }
                                }
                                
                            </script>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-ttc btn-block font" >
                                        {{ __('ENVIAR') }}
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-12 fat"  >
                                <hr class="hrt">
                   {{-- <a href="{{ route('login') }}" class="ad" onclick="preload()"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
                    <a href="" target="_blank">
                     <i class="fa fa-facebook-f" aria-hidden="true"></i>--}}
                 </a>
                <!-- <a href="" target="_blank">
                     <i class="fa fa-twitter " aria-hidden="true"></i>
                 </a>-->
             </div>

             <script type="text/javascript">
               function validacion() {
                valor = document.getElementById("fper_user").value;
                if (valor == null || valor == "") {
                    swal("Upps !", "La imagen del Recibo es Obligatoria !" , "error");
                    return false;
                }
                preload();
                return true;
            }
        </script>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
<div >
   <div  class="box-f" >
    <img src="/images/a3.png" >
</div>
<br>
</div>







</body>


</html>


