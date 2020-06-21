@extends('errors::minimal')

@section('title', __('Servicio no disponible'))
@section('code', '503')
@section('message_1', __($exception->getMessage() ?: 'Service Unavailable'))
