<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.favicon')

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/licence.js') }}" defer></script>

    <title>@yield('title')</title>
  </head>

<body>

  <div class="wrapper">

      @include('partials.sidebar')

      <div id="content" style="background-color: #F7F7F7">

        @include('partials.navbar')

        @include('sweetalert::alert')

        @yield('content')

        <br>
        
        <footer class="container" style="margin-top: 50px">
          <hr class="my-3"/>
          <table class="table mx-auto d-block" style="width: 400px; margin-left: 160px;">
              <tbody>
                  <tr>
                      <th style="border:none" scope="col"><small><a href="#">Terminos</a></small></th>
                      <th style="border:none" scope="col"><small><a href="#">Privacidad</a></small></th>
                      <th style="border:none" scope="col"><small><a href="#">Seguridad</a></small></th>
                      <th style="border:none" scope="col"><small><a href="#" class="text-muted">Contacto</a></small></th>
                  </tr>
              </tbody>
          </table>
          <table class="table mx-auto d-block" style="width: 400px;margin-left: 420px">
            <tbody>
              <tr>
                <th style="border:none" scope="col"><small><small><a href="#" class="text-muted">Desarollado por Maruan Boukhriss con <i class="fas fa-heart"></i></a></small></small></th>
              </tr>
            </tbody>
          </table>
        </footer>
      </div>
  </div>
  
  @yield('scripts')

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://js.pusher.com/4.2/pusher.min.js"></script>
  <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <script src="https://unpkg.com/@popperjs/core@2"></script>   

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

</body>

</html>
