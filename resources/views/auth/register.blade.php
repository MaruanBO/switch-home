@extends('layouts.auth')
@section('content')

<div class="row justify-content-center" style="margin-top: 50px;">
    <aside class="col-lg-4 col-md-6 col-sm-8 col-xs-8"> 

        <img src="{{ asset('img/logo.png') }}" class="mx-auto d-block" style="margin-left: 100px; margin-bottom: 5px; width: 180px;">

        <div class="card text-dark font-weight-bold" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <article class="card-body">
                <h4 class="card-title mb-4 mt-1">Registrarse en Switch Home</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label>{{ __('Nombre') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>{{ __('Correo eléctronico') }}</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Contraseña') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Confirmar contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block  text-white font-weight-bold" style="background: #5900de"> Registrar usuario </button>
                    </div>
                </form>
            </article>
        </div>
        <br>
        <div class="card" style="background-color: rgba(245, 245, 245, 0.4); border-color: #DFDFDF;">
            <div class="card-body">                    
                <p class="card-text"><small class="text-muted"><strong>Este será el unico registro que podrás realizar por favor, introduzca los datos correctamente</strong></small></p>
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
