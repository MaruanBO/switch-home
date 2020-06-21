@extends('layouts.master')
@section('content')

<link href="{{ asset('css/h_details.css') }}" rel="stylesheet">
<h5>Detalles del hogar</h5>
<br>
<div class="card" style="border-color: transparent; box-shadow: 0 4px 8px rgba(0,0,0,.05);">
    <div class="card-body">                    
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row">
              <div class="span">
              	<table class="table" style="margin-right: 200px">
                      <thead>
                          <tr>
                              <th>Certificado energético</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                <span class="badge" style="background: #228B22; font-size: 20px;">A</span> 
                              	<span class="badge" style="background: #32CD32">B</span> 
                              	<span class="badge" style="background: #00FF00;">C</span> 
                              	<span class="badge" style="background: #FFFF00">D</span> 
                              	<span class="badge" style="background: #FFD700;">E</span>
                              	<span class="badge" style="background: #FFA500;">F</span> 
                              	<span class="badge" style="background: #FF4500">G</span> 
                              </td>                        
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="span">
                <table class="table responsive-table" style="margin-right: 150px">
                    <thead>
                        <tr>
                            <th>Caracteristicas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>90.2 m²</strong> de superficie construida</td>                     
                        </tr>
                        <tr>
                            <td>Tipo de casa<strong> pareada</strong></td>
                        </tr>
                        <tr>
                            <td>Menos de <strong>1</strong> año antigüedad</td>
                        </tr>
                        <tr>
                        	<td>Su referencia es <strong>#4516295-88807670-88807670</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="span">
              <table class="table">
                  <thead>
                      <tr>
                          <th>Descripción</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Hogar protegido por <strong style="color:#5900de;">Switch Home</strong> ubicado en {{$hogar->direccion}}</td>
                      </tr>
                  </tbody>
              </table>
            </div>
        </div>
		</div>
	</div>
</div>
<br>
<h5>Datos basicos</h5>
<hr class="my-4">

<div class="box">
    <div class="row">
        <div class="col-md-4">
            <figure class="text-center">
                <img src="{{ asset('img/salon.jpg') }}" alt="img1">
                <figcaption>
                	  <span class="badge badge-dark">1</span>
                    <h5>Salón</h5>
                    <h3>27.79 m²</h3>
                </figcaption>
            </figure>
            <br><br><br><br><br>
        </div>
        <div class="col-md-4">
            <figure class="text-center">
                <img src="{{ asset('img/cocina.jpg') }}" alt="img1">
                <figcaption>
                	<span class="badge badge-dark">1</span>
                    <h5>Cocina</h5>
                    <h3>13.71 m²</h3>
                </figcaption>
            </figure>
            <br><br><br><br><br>
        </div>
        <div class="col-md-4">
            <figure class="text-center">
                <img src="{{ asset('img/baño.jpg') }}" alt="img1">
                <figcaption>
                	<span class="badge badge-dark">1</span>
                    <h5>Baño</h5>
                    <h3>5.82 m²</h3>
                </figcaption>
            </figure>           
            <br><br><br><br><br>
        </div>

        <div class="col-md-4">
            <figure class="text-center">
                <img src="{{ asset('img/habitacion.jpg') }}" alt="img1">
                <figcaption>
                	<span class="badge badge-dark">1</span>
                    <h5>Habitación</h5>
                    <h3>20.85 m²</h3>
                </figcaption>
            </figure>
        </div>
    </div>                   
</div>
<br>

@endsection
