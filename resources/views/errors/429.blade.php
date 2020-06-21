@extends('errors::minimal')

@section('title', __('Muchas peticiones'))
@section('code', '429')
@section('message_1', __('¡Uy! ¡Parece que estás animado!'))
@section('message_2', __('Lo sentimos, pero no puedes realizar tantas peticiones a la misma vez'))