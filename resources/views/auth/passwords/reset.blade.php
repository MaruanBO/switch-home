@extends('layouts.auth')
@section('content')
        
<div class="row justify-content-center" style="margin-top: 50px;">
    <aside class="col-lg-4 col-md-6 col-sm-8 col-xs-8"> 
        
        <img src="{{ asset('img/logo.png') }}" class="mx-auto d-block" style="margin-left: 100px; margin-bottom: 5px; width: 180px;">

        <div class="card text-dark font-weight-bold" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <article class="card-body">

                <h4 class="card-title text-center mb-4 mt-1">Restablecer su contraseña</h4>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nueva contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" data-eye>

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
                        <button type="submit" class="btn text-white btn-block font-weight-bold" style="background: #5900de"> Reiniciar contraseña </button>
                    </div> <!-- form-group// -->        
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
