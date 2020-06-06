@extends('errors::minimal')

@section('title', __('Prohibido'))
@section('code', '403')
@section('message_1', __($exception->getMessage() ?: 'Forbidden'))
