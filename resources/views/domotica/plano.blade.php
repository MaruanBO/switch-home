@extends('layouts.master')
@section('content')

<h5>Detalles del plano</h5>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
		<div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
			<img src="{{ asset('img/casa.png') }}" class="img-fluid card-img-top" style="width: 2000px">
		    <div class="card-body">   
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col"><i class="fas fa-cctv fa-lg"></i></th>
						<th scope="col"><i class="fas fa-sensor fa-lg"></i></th>
						<th scope="col"><i class="far fa-alarm-exclamation fa-lg"></i></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>5 <span class="text-muted">camaras</span></td>
						<td>5 <span class="text-muted">sensores</span></td>
						<td>6 <span class="text-muted">alarma</span></td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>

    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
		<div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
			<div class="card-body">
				<p class="">Las características de domótica de Switch Home están un paso por encima del resto. La aplicación aclamada por la crítica utiliza un asistente de inteligencia artificial incorporado, que rastrea la entrada de los sensores para automatizar y administrar su hogar inteligente. Esta función de aprendizaje automático le permite a Switch Home tomar decisiones para su hogar en función del historial, la geolocalización y los sensores. El termostato Element aprende sus configuraciones de temperatura preferidas para ajustarse automáticamente cuando llega a casa. Luego, el termostato se reajusta para conservar energía cuando no hay nadie en casa. Switch Home le permite crear cuentas de usuario personalizadas. Puede crear permisos y crear límites para que cada usuario tenga un acceso y control diferentes del sistema. Por ejemplo, los niños pueden tener cuentas de usuario donde no pueden cambiar el termostato, la configuración de notificaciones o las reglas. Switch Home hace hogares automatizados que realmente son inteligentes.</p>
			</div>
		</div>
	</div>
</div>

@endsection
