<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <title>@yield('title')</title>
        <style type="text/css">

                table td{
                    border:none;
                }
        </style>
    </head>
    <body style="background: #f7f9fb;">
        <div class="container"> 
            <div class="row justify-content-center" style="margin-top: 50px;">
                <aside class="col-lg-4 col-md-6 col-sm-8 col-xs-8"> 
                
                <img src="{{ asset('img/logo.png') }}" class="mx-auto d-block" style="margin-left: 100px; width: 180px;">

                    <div class="card text-dark font-weight-bold" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">

                        <article class="card-body">
                            <h1 class="display-1 card-title text-center mb-4 mt-1">@yield('code')</h1>
                            <p class="text-center">@yield('message_1')</p>
                            <p class="text-muted text-center"><small><strong>@yield('message_2')</strong></small></p>
                            <a role="button" class="btn text-white btn-block font-weight-bold" style="background: #5900de" href="{{ route('login') }}">Regresar a la pagina de inicio</a>
                        </article>
                    </div>
                </aside> 
            </div>
        </div>
    </body>
</html>
