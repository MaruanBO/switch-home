@extends('layouts.master')
@section('content')

<link href="{{ asset('css/componentes.css') }}" rel="stylesheet">

<input class="form-control" type="search" placeholder="*Buscar por titulo" aria-label="Search" id="myInput">

<br><br><br>

<div class="row justify-content-center"  style="display: none" id="not_found">
    <aside class="col-lg-4 col-md-5 col-sm-8 col-xs-8"> 
        <div class="card text-dark" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <article class="card-body" style="margin-bottom: 30px">
                <h4 class="card-title text-center">No se ha encontrado ningún componente</h4>
            </article>
        </div>
    </aside> 
</div>


<div class="row">

    <div class="col-lg-4 col-md-10 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
               <i class="fas fa-heart-rate" style="font-size: 70px;"></i> 
            </div>
            <div class="card-body">
               <h4 class="card-title">Gestion de tarifas</h4>
               <p class="card-text">Análisis del contrato actual, precios y condiciones establecidas y negociación con otras comercializadoras para obtener la mejor oferta de suministro</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($energy->gestion_de_tarifas == 0)
                    <form method="POST" action="{{route('energia.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="tarifas">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('energia.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="tarifas">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
   </div>

    <div class="col-lg-4 col-md-10 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fas fa-blinds" style="left:20px"></i> 
            </div>
            <div class="card-body">
               <h4 class="card-title">Persianas</h4>
               <p class="card-text">Evita pérdidas de temperatura y la mantiene estable dentro del hogar. De este modo se necesitará consumir menos energía para calentar o enfriar la vivienda</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($energy->persianas == 0)
                    <form method="POST" action="{{route('energia.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="persianas">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('energia.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="persianas">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
   </div>

    <div class="col-lg-4 col-md-10 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="far fa-light-switch" style="left:25px;font-size: 68px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Control de luz</h4>
               <p class="card-text">Reguladores electrónicos de flujo para las halógenas. Permiten adecuar el nivel luminoso a una necesidad concreta teniendo en cuenta la luz ambiente</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($energy->control_de_luz == 0)
                    <form method="POST" action="{{route('energia.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="luz">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('energia.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="luz">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
   </div>

    <div class="col-lg-4 col-md-10 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fas fa-walking" style="left:27px; font-size: 70px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Sensor de movimiento</h4>
               <p class="card-text">El sensor activa las luces cuando se detecta movimiento y/o presencia en el ambiente, pero también las apaga automáticamente  cuando ya no son necesarias</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($energy->sensor_de_movimiento == 0)
                    <form method="POST" action="{{route('energia.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="sensor">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('energia.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="sensor">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
   </div>

    <div class="col-lg-4 col-md-10 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fas fa-refrigerator" style="left:25px;font-size: 65px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Electrodomesticos</h4>
               <p class="card-text">Control automáticamento del tiempo de cualquiera de sus electrodomésticos en función de su configuración y tiempo de ejecución</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($energy->electrodomesticos == 0)
                    <form method="POST" action="{{route('energia.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="electrodomesticos">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('energia.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="electrodomesticos">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
   </div>

    <div class="col-lg-4 col-md-10 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fad fa-dewpoint" style="left:25px;font-size: 70px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Agua caliente</h4>
               <p class="card-text">Agua caliente inmediata, logrando así, entre otras cosas, un ahorro estimado de 350 millones de metros cúbicosm y más de cientos de euros anuales por familia</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($energy->agua_caliente == 0)
                    <form method="POST" action="{{route('energia.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="agua">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('energia.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="agua">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
   </div>

    <div class="col-lg-4 col-md-10 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fas fa-temperature-low" style="left:30px;font-size: 65px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Control del clima</h4>
               <p class="card-text">Programación de hasta 7 días, temporizadores y disparadores de reacción de clima inteligentes, incluso en epoca de verano puedes desactivarlo en vacaciones</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($energy->control_del_clima == 0)
                    <form method="POST" action="{{route('energia.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="clima">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('energia.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="clima">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
   </div>

    <div class="col-lg-4 col-md-10 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fad fa-sprinkler" style="left:15px;font-size: 70px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Sistema de riego</h4>
               <p class="card-text">Sistema de prevención de consumo de energia y agua automatico para el jardin con detección de lluvia y tiempos programables</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($energy->riego == 0)
                    <form method="POST" action="{{route('energia.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="riego">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('energia.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="riego">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
   </div>
   <br><br><br>
</div>

<style type="text/css">

    .avatar-flip i {
      position: absolute;
      left: 15px;
      top: 30px;
      transition: all 0.3s ease-in-out;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      color: #5900de;
      font-size: 60px;
    }
    
</style>

<script type="text/javascript">

$(document).ready(function() {

    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("div[class^=col]")
    .hide()
        .filter(function() {
        var cardTitle = $(this).find('.card-title').text().toLowerCase();
        $('#not_found').hide();
        return cardTitle.includes(value);
        })
        .show();

        if ($(".card-title:visible").length == 0) {
        $('#not_found').show();
        }

    });
});

</script> 

@endsection
