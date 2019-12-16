{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Formulário')

@section('content_header')
    <h1 align="center">Preencha o formulário com o problema</h1>
    <br>
@stop

@section('content')
<center> 
<form style="width: 700px;">
  <div class="form-group">
  <select class="custom-select">
  <option selected>Qual o tipo do problema?</option>
  <option value="1">1 - Estrutura</option>
  <option value="2">2 - Energia</option>
  <option value="3">3 - Ar-Condicionado</option>
  <option value="4">4 - internet</option>
  </select>
  <br> <br>
  <select class="custom-select">
  <option selected>Informe o local</option>
  <option value="1">Sala 01</option>
  <option value="2">Sala 02</option>
  <option value="3">Sala 03</option>
  <option value="4">Laboratório 01</option>
  <option value="5">Laboratório 02</option>
  <option value="6">Laboratório 03</option>
  <option value="7">Refeitório</option>
  </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descreva o problema</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</center>

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
    var p1 = document.getElementsByTagName("a")[6].remove();
    var p2 = document.getElementsByTagName("a")[6].remove();
  </script>
@stop
