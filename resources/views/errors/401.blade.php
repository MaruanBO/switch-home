@extends('errors::minimal')

@section('title', __('Accceso no autorizado'))
@section('code', '401')
@section('message_1', __('¡Uy! ¡Parece que no tienes acceso a esta pagina!'))
@section('message_2', __('Lo sentimos, entre tus grandes ventajas no está el acceder a esta pagina'))
