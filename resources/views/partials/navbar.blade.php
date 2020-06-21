<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">

<script src="https://js.pusher.com/4.2/pusher.min.js"></script>

<style type="text/css">

  .dropdown-toggle::after {
    display:none;
  }
  
</style>

<script>

  var pusher = new Pusher('your_key', {
    cluster: 'your_key',
    encrypted: true
  });

  var channel = pusher.subscribe('notify');
  
  channel.bind('notify-event', function(message) {           
    var componente = '<strong class="text-danger">'+message[1]+'</strong>';
    var incidente = '<strong class="text-danger">'+message[0]+'</strong>';
    
    $('.componente-notification').html(componente);
    $('.incidente-notification').html(incidente);

    $('#notify-color').css({'color':'red','display':'inline'});
    
  });

</script>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <button class="btn btn-light d-inline-block d-lg-none ml-auto navbar-btn" type="button" data-toggle="dropdown" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background: #f5f5f5;">
                        <i class="fas fa-caret-down"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                          @guest
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                                @if (Route::has('register'))
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                                @endif
                                
                                @else

                                <br>
                                  <li class="nav-item dropdown" style="">
                                      <a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          <i class="fas fa-envelope fa-lg" style="width:100px;text-align:center;vertical-align:middle;position: relative;color: #5900de"></i>
                                          <span class="badge badge-danger text-white" style="margin-right: 36px; vertical-align: top;position: absolute;top: 1px;right: -1px; color: #5900de;font-size: 12px;">{{ auth()->user()->unreadNotifications->count() }}</span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right">

                                          <a class="dropdown-header" href="{{ route('markAll') }}" style="float: right;">Marcar todos</a>

                                          <h6 class="dropdown-header"><strong>Nuevas notificaciones</strong> 
                                            <small><span class="badge badge-danger" style="margin-left: 6px;vertical-align: top;position: absolute;top: 16px;left: 182px;">{{ auth()->user()->unreadNotifications->count()}}</span></small>
                                          </h6>

                                          <div class="dropdown-divider"></div>

                                            @if(Auth::user()->unreadNotifications->count())

                                              @foreach ( Auth::user()->unreadNotifications as $notification)

                                                  <p class="dropdown-item" style="background: none;border: none; color:black;">
                                                       Tienes un nuevo correo electrónico<br>
                                                       <small><strong style="color:#5900de">
                                                        {{Auth::user()->email}}
                                                       </strong></small><br>
                                                      <small class="text-muted"><small>
                                                        [{{$notification->id}}]
                                                      </small><br>
                                                        Enviado el {{$notification->updated_at}}
                                                      </small><br><br>

                                                      <a href="{{ route('markAsRead') }}" class="btn btn-outline-primary btn-block">
                                                        <i class="fas fa-comment-times"></i>
                                                      </a>
                                                      <a href="{{ route('markDelete') }}" class="btn btn-outline-primary btn-block">
                                                        <i class="far fa-trash-alt"></i>
                                                      </a>
                                                  </p>
                                                  
                                              @endforeach             
                                              @else
                                                <p class="dropdown-item" style="background: none;border: none; color:black;">
                                                  No dispones de nuevas notificaciones
                                                </p>
                                            @endif

                                            <h6 class="dropdown-header"><strong>Notificaciones leidas</strong>
                                             <small><span class="badge badge-danger" style="margin-left: 0px;position: initial;vertical-align: top;top: 16px;
                                             left: 182px;">{{ auth()->user()->readNotifications->count()}}</span></small>
                                            </h6> 

                                            <div class="dropdown-divider"></div>

                                            @if(Auth::user()->readNotifications->count())

                                              @foreach (Auth::user()->readNotifications as $notification)
                                                  <p class="dropdown-item" style="background: none;border: none; color:black;">
                                                    Notificación leida el <strong style="color: #5900de">{{$notification->read_at}}</strong><br>
                                                      <small class="text-muted"><small>[{{$notification->id}}]</small></small>
                                                  </p>
                                              @endforeach

                                              @else
                                                <p class="dropdown-item" style="background: none;border: none; color:black;">
                                                  No dispones de ningúna notificación
                                                </p>
                                            @endif
                                          
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-header" href="{{ route('markAllDelete') }}" style="float: right;">Eliminar todos</a>
                                            <h6 class="dropdown-header"><a href="#"><strong>Ver Email</strong></a></h6>
                                      </div>
                                  </li>

                                  <li class="nav-item dropdown">
                                      <a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          <i class="fas fa-bell fa-lg" style="margin-right: 28px;color: #5900de"></i>
                                          <i class="fas fa-circle fa-sm" id="notify-color" style="margin-right: 35px; vertical-align: top;position: absolute;top: 3px;right: -1px; display: none; color: #5900de"></i>

                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <h6 class="dropdown-header">Notificaciones componentes</h6>
                                                @if ($security->camara == 0)
                                                    <a class="dropdown-item componente-notification" href="{{route('seguridad')}}" style="background: none;border: none; color:black;">
                                                        No dispones de ningúna notificación
                                                    </a>                                                                                      
                                                @else
                                                    <a class="dropdown-item" style="background: none;border: none; color:black;" >
                                                        No dispones de ningúna notificación
                                                    </a>
                                                @endif

                                                <div class="dropdown-divider"></div>
                                                <h6 class="dropdown-header">Notificaciones incidentes</h6>
                                                  @if ($accident->componente_afec == 'Camara')
                                                      <a class="dropdown-item incidente-notification" href="{{route('home')}}" style="background: none;border: none; color:black;">
                                                          No dispones de ningúna notificación
                                                      </a>
                                                  @else
                                                      <a class="dropdown-item" style="background: none;border: none; color:black;">
                                                          No dispones de ningúna notificación
                                                      </a>
                                                  @endif
                                      </div>
                                  </li>
                                                                    
                                  <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <!--{{ Auth::user()->name }}--><i class="fa fa-user fa-lg" style="margin-right: 25px;color: #5900de" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <h6 class="dropdown-header">Usuario</h6>
                                     <a class="dropdown-item" style="background: none;border: none; color:black;">
                                      Has iniciado sesión como <br> <strong>{{ Auth::user()->name }}</strong>
                                     </a>
                                      <div class="dropdown-divider"></div>
                                      <h6 class="dropdown-header">Perfil</h6>
                                      <a class="dropdown-item" href="{{ route('perfil') }}" style="background: none;border: none; color:black;">
                                          Ajustes
                                      </a>
                                      <div class="dropdown-divider"></div>

                                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="background: none;border: none; color:black;">
                                          <i class="fas fa-sign-out-alt"></i> {{ __('Cerrar sesión') }}
                                      </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                        </form>
                                    </div>
                                  </li>
                              @endguest
                        </ul>
                    </div>
                </div>
            </nav>

<style type="text/css">
    
    .btn-outline-primary{
      border-color: #5900de !important;
      background-color: white !important;
      color:#5900de !important;
    }

    .btn-outline-primary:hover{
        background-color: #5900de !important;
        color: white !important;
    }

    .btn-outline-primary:focus {
        color:white !important;
        background-color: #5900de !important;
        box-shadow:0 0 0 .2rem rgba(89,0,222,0.5) !important;
    }

    .btn-outline-primary:active {
        color:white !important;
        background-color: #5900de !important;
        box-shadow:0 0 0 .2rem rgba(89,0,222,0.5) !important;
    }

</style>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
