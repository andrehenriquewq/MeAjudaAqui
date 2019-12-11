{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Tecnico')

@section('content_header')
    <h1>Painel para tecnicos em manutenção</h1>
@stop

@section('content')
    <p>Seja bem-vindo.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    Element.prototype.remove = function(){
    this.parentElement.removeChild(this);}
    NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = this.length - 1; i >= 0; i--) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }}}
    var p1 = document.getElementsByTagName("a")[3].remove();
    var p2 = document.getElementsByTagName("a")[3].remove();
    </script>
@stop   
