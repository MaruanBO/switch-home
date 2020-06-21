@extends('layouts.master')
@section('content')

<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<h4>Datos</h4>
<hr class="my-3"/>
<div class="table-responsive">
  <table class="table table-hover" >
    <thead>
      <tr>
        <th scope="col">Titular</th>
        <th scope="col">Email</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Poblacion</th>
        <th scope="col">Localidad</th>
        <th scope="col">DNI</th>
        <th scope="col">Dirección</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$perfil->titular}}</td>
        <td>{{$perfil->email}}</td>
        <td>{{$perfil->telefono}}</td>
        <td>{{$perfil->poblacion}}</td>
        <td>{{$perfil->localidad}}</td>
        <td>{{$perfil->dni}}</td>
        <td>{{$perfil->direccion}}</td>
      </tr>
    </tbody>
  </table>
</div>
    <h4>Administración</h4>
    <hr class="my-3"/>
    <p class="text-muted">No puedes cambiar el nombre del usuario*</p>
    <br>

    <div class="row">
        <div class="col-md-5">
            <div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
              <div class="card-header bg-c-purple text-white">Cambiar contraseña</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('changePassword') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña actual</label>

                            <div class="col-md-6">
                                <input id="old-password" type="password" placeholder="Contraseña actual*" class="form-control  @error('old_password') is-invalid @enderror" name="old_password">
                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nueva contraseña</label>

                            <div class="col-md-6">
                                <input id="password-current" type="password" placeholder="Nueva contraseña*"  class="form-control @error('password') is-invalid @enderror" name="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirm_password" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirmation" type="password" placeholder="Confirmar contraseña*"  class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn text-white" style="background: #5900de">
                                    Actualizar contraseña
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection
