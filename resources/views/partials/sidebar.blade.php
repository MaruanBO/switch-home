<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">

<nav id="sidebar">
    <div class="sidebar-header">
        <img src="{{ asset('img/profile.png') }}" class="img-fluid" alt="logo"/>
    </div>
    <ul class="list-unstyled components">
        <hr class="my-3"/>
        <li class="show">
            <a href="{{ route('home') }}" style="color: inherit;text-decoration: none; transition: all 0.3s;">
                <span class="fas fa-border-all" style="color:white; font-size: 20px;"></span> 
                <span>Tablero</span>
            </a>
        </li>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="color: inherit;text-decoration: none; transition: all 0.3s;">
                <span class="fas fa-home" style="color:white; font-size: 20px;"></span>
                <span>Hogar</span>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{ route('hogar') }}" style="color: inherit;text-decoration: none; transition: all 0.3s;">Detalles del hogar</a>
                </li>
                <li>
                    <a href="{{ route('plano') }}" style="color: inherit;text-decoration: none; transition: all 0.3s;">Plano</a>
                </li>
            </ul>
        </li>
        <hr class="my-3"/>

        <p style="color:white;"><small>Componentes</small></p>
        <li>
            <a href="{{ route('seguridad') }}" style="color: inherit;text-decoration: none; transition: all 0.3s;">
                <span class="fas fa-lock" style="color:white; font-size: 20px;"></span> 
                <span>Seguridad</span>
            </a>
        </li>

        <li>
          <a href="{{ route('energia') }}" style="color: inherit;text-decoration: none; transition: all 0.3s;">
                  <span class="fas fa-plug" style="color:white; font-size: 20px;"></span> 
                  <span>Energia</span>
          </a>
        </li>
        <li>
            <a href="{{ route('accesibilidad') }}" style="color: inherit;text-decoration: none; transition: all 0.3s;">
                <span class="fas fa-wheelchair" style="color:white; font-size: 20px;"></span> 
                <span>Accesibilidad</span>
            </a>
        </li>
    </ul>
    <hr class="my-3"/>
    <ul class="list-unstyled CTAs">
        <li>
            <a href="https://hspano.homestyler.com/?m=np&id=d3UCvWAX9QmfAw5VDaueoU" class="download" style="text-decoration: none; transition: all 0.3s;">Room tour 702 º</a>
        </li>
    </ul>
</nav>

