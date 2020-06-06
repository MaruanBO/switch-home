@extends('layouts.auth')
@section('content') 

<div class="row justify-content-center" style="margin-top: 50px;">
    <aside class="col-lg-4 col-md-6 col-sm-8 col-xs-8"> 
        
        <img src="{{ asset('img/login.png') }}" class="mx-auto d-block" style="margin-left: 100px; margin-bottom: 20px;">

        <h4 class="card-title text-center mb-4 mt-1">Verificación de contraseña</h4> 

        <div class="card text-dark font-weight-bold" style="border-color: #DFDFDF;">
            <article class="card-body">
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <label>Contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-eye>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Confirme su contraseña</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" data-eye>
                    </div> <!-- form-group// --> 
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block font-weight-bold"> Confirmar contraseña  </button>
                    </div>                               
                </form>
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