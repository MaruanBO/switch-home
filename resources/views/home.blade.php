@extends('layouts.master')
@section('content')

<audio id="intruso">
  <source src="{{ asset('audio/intruso.mp3') }}" type="audio/mpeg">
</audio>

 <link rel=”stylesheet”
                     href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<div class="modal fade modal-auto-clear bd-example-modal-sm" id="sensorModal" data-backdrop="" >
    <div class="modal-dialog modal-dialog modal-sm" role="document">
        <div class="modal-content" id="app">
            <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="sensorLabel">Intruso detectado</h5><br>
            </div>
            <div class="modal-body" id="modal_police" style="display: none;">
                <p id="alert_message"></p>
                <p><strong><i class="fas fa-siren-on" style="color:blue;font-size: 50px;"></i>Autoridades avisadas!</strong></p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
            <div class="modal-body " id="modal_Body">
                <form method="POST" @submit.prevent="onSubmit">
                {{ csrf_field() }}
                    <div :class="['form-group',allerros.codigo_activación ? 'has-error' : '']" >
                    <label for="codigo_activación" class="control-label">Introduzca el codigo de 4 digitos para desactivar la alarma.<br>
                        <small class="text-muted">Dispone de 10 segundos o se avisará a las autoridades</small>
                    </label> 
                    <input id="codigo_activación" name="codigo_activación"  class="form-control failed" type="password" v-model="form.codigo_activación">
                    <span v-if="allerros.codigo_activación" :class="['label label-danger']">  
                        <small class="text-danger"><strong>@{{ allerros.codigo_activación[0] }}</strong></small>
                    </span>
                    </div> 
                    <div id="countdown"></div><br>
                    <button type="submit" class="btn btn-danger" >
                    Activar sistema
                    </button>
                </form>
                <br>     
            </div>
        </div>
    </div>
</div>

<h5 class="heading">Acceso rapido</h5>

<hr class="my-4">

<div class="row">
    <div class="col-md-4 col-xl-3">
        <div class="card bg-c-red order-card">
            <div class="card-block">
                <h6 class="m-b-20">Seguridad</h6>
                <h2 class="text-right"><i class="fa fa-lock f-left"></i>
                    @if($security->view_count== 0)
                        <span>{{$security->view_count}}</span>
                    @else
                        <span>{{$security->view_count}}</span>
                    @endif
                </h2>
                    @if($security->view_count==0)
                        <p class="m-b-0"><small>Protegido, todos los componentes se encuentran encendidos</small></p>
                    @else
                        <p class="m-b-0"><small>Desprotegido, porfavor encienda todos los componentes para estar protegido</small></p>
                        @if ($security->camara == 0 or $security->alarma == 0)
                        <div class="table-responsive">
                            <br>
                            <table class="table table-hover mx-auto w-auto text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col" style="text-align: 40px">Componentes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            @if ($security->camara == 0)
                                                <small><strong>Camara</strong></small>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($security->alarma == 0)
                                                <small><strong>Alarma</strong></small>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <small>*Solo se obserban los componentes primordiales para su inminente seguridad fisica</small>
                        </div>
                        @endif
                    @endif
            </div>

            <div class="card-footer" >
                <a style="color: inherit;text-decoration: none; transition: all 0.3s;" href="{{route('seguridad')}}" >Ver más
                    <i class="fas fa-chevron-right f-right"></i>
                </a>   
            </div>

        </div>
    </div>

    <div class="col-md-4 col-xl-3">
        <div class="card bg-c-yellow order-card">
            <div class="card-block">
                <h6 class="m-b-20">Energia</h6>
                <h2 class="text-right"><i class="fa fa-bolt f-left"></i>
                    @if($energy->view_count== 0)
                        <span>{{$energy->view_count}}</span>
                    @else
                        <span>{{$energy->view_count}}</span>
                    @endif
                </h2>
                    @if($energy->view_count==0)
                        <p class="m-b-0"><small>El ahorro energetico encendido en todos los componentes</small></p>
                    @else
                        <p class="m-b-0">Ahorro energecito reducido</p>
                    @endif
            </div>

            <div class="card-footer">
                <a style="color: inherit;text-decoration: none; transition: all 0.3s;" href="{{route('energia')}}">Ver más
                    <i class="fas fa-chevron-right f-right"></i>
                </a>   
            </div>

        </div>
    </div>

    <div class="col-md-4 col-xl-3">
        <div class="card bg-c-blue order-card">
            <div class="card-block">
                <h6 class="m-b-20">Accesibilidad</h6>
                <h2 class="text-right"><i class="fa fa-blind f-left"></i>
                    @if($access->view_count== 0)
                        <span>{{$access->view_count}}</span>
                    @else
                        <span>{{$access->view_count}}</span>
                    @endif
                </h2>
                    @if($access->view_count==0)
                        <p class="m-b-0"><small>Todos los componentes se encuentran encendidos</small></p>
                    @else
                        <p class="m-b-0">Accesibilidad reducidad</p>
                    @endif
            </div>

            <div class="card-footer">
                <a style="color: inherit;text-decoration: none; transition: all 0.3s;" href="{{route('accesibilidad')}}">Ver más
                    <i class="fas fa-chevron-right f-right"></i>
                </a>   
            </div>

        </div>
    </div>

    <div class="col-md-4 col-xl-3">
        <div class="card bg-c-green order-card">
            <div class="card-block">
                <h6 class="m-b-20">Intrusos</h6>
                <h2 class="text-right"><img src="{{ asset('img/intruder.png') }}" class="f-left" style="width: 38px;">
                   @if ($accident->componente_afec == 'Camara' or $accident->componente_afec == 'Sensor')
                    <span>2</span>
                   @elseif($accident->componente_afec == 'Camara')
                    <span>1</span>
                   @elseif($accident->componente_afec == 'Sensor')
                    <span>1</span>
                   @else 
                    <span>0</span>
                   @endif
                </h2>
                    @if ($accident->componente_afec == 'Camara' or $accident->componente_afec == 'Sensor' )
                        <p class="m-b-0"><small>El sistema de cámaras y alarmas ha detectado un intruso</small></p>
                    @elseif($accident->componente_afec == 'Camara')
                        <p class="m-b-0"><small>El sistema de cámaras ha detectado un intruso</small></p>
                   @elseif($accident->componente_afec == 'Sensor')
                        <p class="m-b-0"><small>El sistema de sensores ha detectado un intruso</small></p>
                    @else
                        <p class="m-b-0">No hay intrusos!</p>
                    @endif
            </div>
            <div class="card-footer">
                <a style="color: inherit;text-decoration: none; transition: all 0.3s;" href="{{route('home')}}">Ver más
                    <i class="fas fa-chevron-right f-right"></i>
                </a>   
            </div> 
        </div>
    </div>

    <div class="col-md-4 col-xl-3">
        <div class="card bg-c-purple order-card">
            <div class="card-block">
            <a style="color: inherit;text-decoration: none; transition: all 0.3s;" class="weatherwidget-io" href="https://forecast7.com/en/37d22n3d69/atarfe/" data-label_1="ATARFE" data-label_2="WEATHER" data-theme="original" data-basecolor="" data-accent="" data-textcolor="#fff" data-highcolor="" >ATARFE WEATHER</a>
        </div>
        </div>
    </div>

    <div class="col-md-4 col-xl-3">
        <div class="card bg-c-yellow order-card">
            <div class="card-block">
                <h6 class="m-b-20">Consumo total</h6>
                <h2 class="text-right"><i class="fas fa-battery-full f-left"></i>
                    {{$energy->consumo_total}}
                </h2>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-xl-3">
        <iframe src="https://open.spotify.com/embed/album/1euXUeJobzra05wyBIrdtH" style="border: 0; width: 100%; height: 80px; border-radius: 5px;" allowfullscreen allow="encrypted-media"></iframe>
    </div>
    
</div>
<br>

<hr class="my-4">
<br>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="card">
            <div class="card-header bg-c-red text-white">Incidentes</div>
                <div class="card-body" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
                    <div class="table-responsive">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                  <th scope="col">Motivo</th>
                                  <th scope="col">Resolución</th>
                                  <th scope="col">Componente</th>
                                  <th scope="col">Fecha actual</th>
                                  <th scope="col">Fecha incidente</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($accidentLoop as $accidents)
                                    <tr>                               
                                      <td>{{$accidents->motivo}}</td>
                                      <td>{{$accidents->resolucion}}</td>
                                      <td>{{$accidents->componente_afec}}</td>
                                      <td>{{$accidents->created_at}}</td>
                                      <td>{{$accidents->updated_at}}</td>       
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>          
        </div>
    <br>
    <br>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <div class="card-header bg-c-yellow text-white">Luces</div>
                  <div class="card-body">
                    <h6 class="card-title">Salón</h6>
                    @if ($luz->salon == 0)
                        <div class="d-flex">
                            <div class="p-2">
                                <i class="fas fa-lightbulb fa-2x"></i>
                            </div>
                             <div class="ml-auto p-2">
                                <form method="POST" action="{{route('energia.on')}}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-warning" name="action" value="salon">
                                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                    <div class="d-flex">
                        <div class="p-2">
                            <i class="fas fa-lightbulb fa-2x" aria-hidden="true" style="color:yellow;"></i>

                        </div>
                            <div class="ml-auto p-2">
                                <form method="POST" action="{{route('energia.off')}}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-light" name="action" value="salon">
                                        <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif
                    <hr class="my-4">

                    <h6 class="card-title">Habitación</h6>
                    @if ($luz->habitacion == 0)
                        <div class="d-flex">
                            <div class="p-2">
                                <i class="fas fa-lightbulb fa-2x" aria-hidden="true"></i>
                            </div>
                             <div class="ml-auto p-2">
                                <form method="POST" action="{{route('energia.on')}}" >
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-warning" name="action" value="habitacion">
                                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                    <div class="d-flex">
                        <div class="p-2">
                            <i class="fas fa-lightbulb fa-2x" aria-hidden="true" style="color:yellow;"></i>
                        </div>
                            <div class="ml-auto p-2">
                                <form method="POST" action="{{route('energia.off')}}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-light" name="action" value="habitacion">
                                        <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif
                    <hr class="my-4">

                    <h6 class="card-title">Baño</h6>
                    @if ($luz->baño == 0)
                        <div class="d-flex">
                            <div class="p-2">
                                <i class="fas fa-lightbulb fa-2x" aria-hidden="true"></i>
                            </div>
                             <div class="ml-auto p-2">
                                <form method="POST" action="{{route('energia.on')}}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-warning" name="action" value="baño">
                                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                    <div class="d-flex">
                        <div class="p-2">
                            <i class="fas fa-lightbulb fa-2x" aria-hidden="true" style="color:yellow;"></i>

                        </div>
                            <div class="ml-auto p-2">
                                <form method="POST" action="{{route('energia.off')}}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-light" name="action" value="baño">
                                        <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif
                    <hr class="my-4">

                    <h6 class="card-title">Cocina</h6>
                    @if ($luz->cocina == 0)
                        <div class="d-flex">
                            <div class="p-2">
                                <i class="fas fa-lightbulb fa-2x" aria-hidden="true"></i>
                            </div>
                             <div class="ml-auto p-2">
                                <form method="POST" action="{{route('energia.on')}}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-warning" name="action" value="cocina">
                                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                    <div class="d-flex">
                        <div class="p-2">
                            <i class="fas fa-lightbulb fa-2x" aria-hidden="true" style="color:yellow;"></i>
                        </div>
                            <div class="ml-auto p-2">
                                <form method="POST" action="{{route('energia.off')}}" method="POST" >
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-light" name="action" value="cocina">
                                        <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif
                  </div>
            </div>
        <br>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="card">
            <div class="card-header bg-c-blue text-white">Control de sesión</div>
                <div class="card-body" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
                    <div class="table-responsive">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                  <th scope="col">Ultimo inicio</th>
                                  <th scope="col">Dirección IP</th>
                                  <th scope="col">Primer inicio</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Usuario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>{{auth()->user()->updated_at}}</td>
                                  <td>{{auth()->user()->last_login_ip}}</td>
                                  <td>{{auth()->user()->created_at}}</td>
                                  <td>{{auth()->user()->email}}</td>
                                  <td>{{auth()->user()->name}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>          
        </div>
    <br>
    <br>
    </div>
</div>
<script>

var pusher = new Pusher('your_key', {
    cluster: 'your_cluster',
    encrypted: true
});

var channel = pusher.subscribe('notify');

channel.bind('notify-event', function(message) { 
    
        var alertSensor = '<strong class="text-danger"><strong>'+message[2]+'</strong></strong>';

        $(function () { 
            $('#sensorModal').modal({ 
                    show: true
                }); 
        });
   
        let soundIntruso = document.getElementById("intruso");
        soundIntruso.currentTime = 0;
        soundIntruso.loop = true;
        soundIntruso.play();

        var timeleft = 10;
        
        var cutdowmPoliceAlert = setInterval(function(){
            if(timeleft <= 0){
                clearInterval(cutdowmPoliceAlert);
            } else {
                document.getElementById("countdown").innerHTML = "<span class='badge badge-warning'> Tiempo restante " + timeleft + " segundos</span>";
            }
              timeleft -= 1;
        }, 1000);

        $('#alert_message').html(alertSensor);
        
        const app = new Vue({
            el: '#app',

            data: {
                form: {
                    pincode : '',
                },
                allerros: [],
            },
            methods : {
                onSubmit() {

                    dataform = new FormData();
                    dataform.append('codigo_activación', this.form.codigo_activación);
                    console.log(this.form.codigo_activación);

                    axios.post('/sensorCode', dataform).then( response => {
                        console.log(response);
                        this.allerros = [];
                        this.form.codigo_activación = '';
                        $('#sensorModal').hide();                            
                        $('#alert_sensor_actived').css({'display':'block'});
                        soundIntruso.pause();
                        Swal.fire({
                          title: 'Buen trabajo!',
                          text: 'Has activado el sistema correctamente',
                          icon: 'success',
                          confirmButtonText: 'Aceptar'
                        })               
                    } ).catch((error) => {
                            this.allerros = error.response.data.errors;
                            $('.failed').css({'border-color':'#FF0000','box-shadow':'inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 5px rgba(255, 0, 0, 0.6)'});
                        });
                }
            }
        });

        setTimeout(function(){
            $('#modal_Body').hide();
            $('#modal_police').show();
            $('#sensorLabel').html('Activación fallida');
            soundIntruso.pause();
        }, 11000);
});

!function(d,s,id){

    var js,fjs = d.getElementsByTagName(s)[0];

    if(!d.getElementById(id)){

        js=d.createElement(s);

        js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';

        fjs.parentNode.insertBefore(js,fjs);
    }
} (document,'script','weatherwidget-io-js');

</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


@endsection
