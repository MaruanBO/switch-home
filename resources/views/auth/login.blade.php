@extends('layouts.auth')
@section('content')

<div class="row justify-content-center" style="margin-top: 50px;">
    <aside class="col-lg-4 col-md-6 col-sm-8 col-xs-8"> 
    
    <img src="{{ asset('img/logo.png') }}" class="mx-auto d-block" style="margin-left: 100px; margin-bottom: 5px; width: 180px;">

        <div class="card text-dark font-weight-bold" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <article class="card-body">
                <h4 class="card-title mb-4 mt-1">Acceder a Switch Home</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Ingrese su email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        @if (Route::has('password.request'))
                            <a class="float-right" href="{{ route('password.request') }}">
                                <small><strong>{{ __('Olvidó sus credenciales?') }}</strong></small>
                            </a>
                        @endif
                        <label>Contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Ingrese su contraseña" data-eye>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group"> 
                        <div class="checkboxes">
                            <label> 
                                <div class="custom-checkbox custom-control">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                <label for="remember" class="custom-control-label">Recuerdame</label> 
                                </div>
                            </label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <button type="submit" class="btn btn-block  text-white font-weight-bold" style="background: #5900de"> Iniciar sesión  </button>
                    </div>                                                     
                </form>
            </article>
        </div>
        <br>
        <div class="card" style="background-color: rgba(245, 245, 245, 0.4); border-color: #DFDFDF;">
            <div class="card-body">                    
                <p class="card-text"><small class="text-muted"><strong>Dispone de las credenciales de acceso en su email y en la parte trasera del producto</strong></small></p>
            </div>
        </div>
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