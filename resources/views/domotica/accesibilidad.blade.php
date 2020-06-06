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

    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fad fa-assistive-listening-systems" style="left:25px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Reconocimiento de voz</h4>
               <p class="card-text">El sitema de voz tiene en cuenta que tiene que ser fácilmente utilizable para personas también con discapacidades físicas e intelectuales.</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($acces->reconocimiento_voz == 0)
                    <form method="POST" action="{{route('acces.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="voz">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('acces.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="voz">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fas fa-phone-rotary" style="left:15px"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Telefono visual</h4>
               <p class="card-text">Detección automática del iris para selección númerica u otras tareas como marcar rapidamente mediante el movimiento de las pestañas</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($acces->telefono_visual == 0)
                    <form method="POST" action="{{route('acces.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="tel">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('acces.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="tel">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fal fa-eye" style="left:10px"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Equipo de iris</h4>
               <p class="card-text">Sistema de detección de personas para realizar tareas automáticas como abrir puertas o cerrarlas automaticamente tras un tiempo inactivas</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($acces->equipo_iris == 0)
                    <form method="POST" action="{{route('acces.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="iris">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('acces.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="iris">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fad fa-house-signal" style="left:15px;font-size: 65px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Interfaz inalambrica</h4>
               <p class="card-text">Sistema anti-aplastamiento, suave en apertura y cierre. Diferentes tipos de funcionamiento (cierre automático, manual, paso paso, etc...)</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($acces->interfaz_inal == 0)
                    <form method="POST" action="{{route('acces.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="interfaz">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('acces.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="interfaz">
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
      font-size: 70px;
    }

</style>

<script>

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
