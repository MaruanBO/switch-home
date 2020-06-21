@extends('layouts.auth')
@section('content')

<div class="row justify-content-center" style="margin-top: 50px;">
    <aside class="col-lg-4 col-md-6 col-sm-6 col-xs-6"> 
        
        <img src="{{ asset('img/logo.png') }}" class="mx-auto d-block" style="margin-left: 100px; margin-bottom: 5px; width: 180px;">

        <div class="card text-dark font-weight-bold" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
            <br>
            <h4 class="card-title text-center mb-4 mt-1">Verificar correo electronico</h4>  
            <article class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                    </div>
                @endif
                    <div class="form-group">
                        <p>Revise su correo electrónico para obtener un enlace para verificar su cuenta. Si no aparece en unos segundos, verifique su carpeta de spam.<p>
                        <p class="text-muted"><small><strong>No has recibido ningún enlace?</strong></small></p>
                    </div>
                    <div class="form-group">
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-block text-white font-weight-bold" style="background: #5900de"> Solicitar otro enlace </button>
                        </form>
                    </div>                               
            </article>
        </div> <!-- card.// -->
    </aside> 
</div>

<br>
<br>
<br>
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

@endsection