{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'MeAjudaAqui')

@section('content_header')
    <h1 align="center">MeAjudaAqui</h1>
@stop

@section('content')
    <p align="center">O <em>MeAjudaAqui</em> é um sistema <strong>HelpDesk</strong> focado em oferecer soluções para grandes instituições!</p>
    <center>
    <img src="../imagehd/sistema-help-desk.png" width="80%">
    </center>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
