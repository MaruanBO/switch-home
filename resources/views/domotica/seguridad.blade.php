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
                <i class="fas fa-gas-pump-slash"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Sistema anti-fugas de gas</h4>
               <p class="card-text">Prevención de desbordamientos de bañeras, averias en las lavadoras o defectos en las tuberías de agua o gas gracias al corte automático de válvulas</p>
            </div>
            <div class="card-footer text-center  bg-white" style="border: none;" style="border: none;">
                @if ($security->fugas_gas == 0)
                    <form method="POST" action="{{route('sec.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="gas">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('sec.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="gas">
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
                <i class="fas fa-bolt img-top-avatar" style="left:30px;font-size: 70px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Fallos electricos</h4>
               <p class="card-text">Sistema automático encargado de detectar averias electricas y tomar acciones como el apagado automatico de la luz</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($security->fallos_elec == 0)
                    <form method="POST" action="{{route('sec.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="electricidad">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('sec.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="electricidad">
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
                <i class="fal fa-person-booth img-top-avatar" style="left:15px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Simulación de presencia</h4>
               <p class="card-text">Control del timbre de la puerta y interración en tiempo real ofreciendo la posibilidad de hablar en directo y eludir a la persona</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($security->simulacion_prese == 0)
                    <form method="POST" action="{{route('sec.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="presencia">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('sec.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="presencia">
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
                <i class="fas fa-cctv img-top-avatar" style="left: 20px"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Sistema de camaras</h4>
               <p class="card-text">Camara con detección automatica de intrusos y personas autorizadas con avisos inmediatos a las autoridades con un tiempo estimado de 0,1 milisegundo</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($security->camara == 0)
                    <form method="POST" action="{{route('sec.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="camara">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('sec.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#confirmShutdownCamara">
                          Apagar
                        </button>
                        <div class="modal fade" id="confirmShutdownCamara" data-backdrop="" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-header d-flex justify-content-center bg-danger text-white">
                                <h5 class="modal-title">Espera!</h5>
                              </div>
                              <div class="modal-body text-left">
                                <p><strong><strong>Este componente es primordial para su seguridad fisica</strong></strong></p>
                                <p class="text-muted"><strong><strong>¿Estas seguro de querer apagar este componente?</strong></strong></p>
                                <button type="submit" class="btn btn-outline-danger btn-block" name="action" value="camara">
                                    Apagar
                                </button>
                                <button type="button" class="btn btn-outline-primary btn-block" data-dismiss="modal">Cancelar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
   </div>

    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fas fa-siren img-top-avatar" style="font-size: 70px;left:20px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Sistema de alarma</h4>
               <p class="card-text">Alarma con aviso automatico a las autoridades con capacizadad de detectar un intruso no autorizado a mas de 10 kilometros</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($security->alarma == 0)
                    <form method="POST" action="{{route('sec.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="alarma">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('sec.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#confirmShutdownAlarma">
                          Apagar
                        </button>
                        <div class="modal fade" id="confirmShutdownAlarma" data-backdrop="" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-header d-flex justify-content-center bg-danger text-white">
                                <h5 class="modal-title">Espera!</h5>
                              </div>
                              <div class="modal-body text-left">
                                <p><strong><strong>Este componente es primordial para su seguridad fisica</strong></strong></p>
                                <p class="text-muted"><strong><strong>¿Estas seguro de querer apagar este componente?</strong></strong></p>
                                <button type="submit" class="btn btn-outline-danger btn-block" name="action" value="alarma">
                                        Apagar
                                </button>
                                <button type="button" class="btn btn-outline-primary btn-block" data-dismiss="modal">Cancelar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br>
   </div>

    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fas fa-eye img-top-avatar" style="font-size: 70px;left: 12px"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Sistema de vigilancia automatica</h4>
               <p class="card-text">Vigilancia automatica aplicable a animales o humanos con sistemas de prevención automaticos ante todos los peligros</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($security->vigilancia_auto == 0)
                    <form method="POST" action="{{route('sec.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="vigilancia">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('sec.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="vigilancia">
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
                <i class="fas fa-fire-extinguisher img-top-avatar" style="font-size: 70px;left: 25px"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Sistema anti-incendios</h4>
               <p class="card-text">Sistema de riego automatico con temperatura manejable de diferentes niveles con capacidad de detección de lluvia y programable</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($security->incendios == 0)
                    <form method="POST" action="{{route('sec.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="incendios">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('sec.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="incendios">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <br><br><br><br>
   </div>

    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="avatar-flip">
                <i class="fas fa-phone-volume img-top-avatar" style="left: 30px;font-size: 74px;"></i>
            </div>
            <div class="card-body">
               <h4 class="card-title">Sistema de control remoto</h4>
               <p class="card-text">Control remoto aplicable a todos los componentes del hogar incluyendo energia y accesibilidad u otros elementos relaccionado</p>
            </div>
            <div class="card-footer text-center bg-white" style="border: none;">
                @if ($security->control_rem == 0)
                    <form method="POST" action="{{route('sec.on')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="remoto">
                                    Encender
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('sec.off')}}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="remoto">
                                    Apagar
                        </button>
                    </form>
                @endif
            </div>
        </div>
   </div>
</div>

<style type="text/css">
    .avatar-flip i {
      position: absolute;
      left: 10px;
      top: 30px;
      transition: all 0.3s ease-in-out;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      color: #5900de;
      font-size: 60px;
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
