@extends('layouts.auth')
@section('content')

<div class="row justify-content-center" style="margin-top: 50px;">
    <aside class="col-lg-4 col-md-6 col-sm-8 col-xs-8"> 
        
        <img src="{{ asset('img/logo.png') }}" class="mx-auto d-block" style="margin-left: 100px; margin-bottom: 5px; width: 180px;">
       
        <div class="card text-dark font-weight-bold" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">

                
            <article class="card-body">

                @if (session('status'))
                    <br>
                    <div class="alert alert-success" role="alert" style="margin-left:15px;margin-right: 15px;margin-bottom:15px;">
                        {{ session('status') }}
                    </div>
                @endif

                <h4 class="card-title mb-4 mt-1">Restablecer su contraseña</h4> 

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label>Ingrese la dirección de correo electrónico verificada de su cuenta de usuario y le enviaremos un enlace para restablecer la contraseña.</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese su dirección de correo electrónico">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn text-white btn-block font-weight-bold" style="background: #5900de">Enviar enlace</button>
                    </div>                                                       
                </form>

                <a role="button" class="btn text-white btn-block font-weight-bold" style="background: #5900de" href="{{ route('login') }}">Regresar a la pagina de inicio</a>

            </article>
        </div> <!-- card.// -->
   </aside> 
</div>
<br>
<br>
<br>
<table class="table mx-auto d-block" style="width: 320px; margin-left: 160px;">
    <thead>
        <tr>
            <th style="border:none" scope="col"><small><a href="#">Terminos</a></small></th>
            <th style="border:none" scope="col"><small><a href="#">Privacidad</a></small></th>
            <th style="border:none" scope="col"><small><a href="#">Seguridad</a></small></th>
            <th style="border:none" scope="col"><small><a href="#" class="text-muted">Contacto</a></small></th>
        </tr>
    </thead>
</table>

@endsection
