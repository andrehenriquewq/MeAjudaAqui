{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Formulário')

@section('content_header')
    <h1 align="center">Preencha o formulário com o problema</h1>
    <br>
@stop

@section('content')
<center> 
<form style="width: 700px;" action="{{route('user.update', $problema->id)}}" method="POST">
  {{ csrf_field() }}
  {{ method_field("PUT")}}
  <div class="form-group">
  <select class="custom-select" name="tipo_problema">
  <option selected>Qual o tipo do problema?</option>

  <option value="1" 
  {{ '1' == $problema->tipo_problema ? 'selected' : '' }} >1 - Estrutura</option>

  <option value="2"
  {{ '2' == $problema->tipo_problema ? 'selected' : '' }}>2 - Energia</option>

  <option value="3"
  {{ '3' == $problema->tipo_problema ? 'selected' : '' }}>3 - Ar-Condicionado</option>

  <option value="4"
  {{ '4' == $problema->tipo_problema ? 'selected' : '' }}>4 - internet</option>
  </select>

  <br> <br>

  <select class="custom-select" name="local_problema">
  <option selected>Informe o local</option>

  <option value="1"
  {{ '1' == $problema->local_problema ? 'selected' : '' }}>Sala 01</option>

  <option value="2"
  {{ '2' == $problema->local_problema ? 'selected' : '' }}>Sala 02</option>

  <option value="3"
  {{ '3' == $problema->local_problema ? 'selected' : '' }}>Sala 03</option>

  <option value="4"
  {{ '4' == $problema->local_problema ? 'selected' : '' }}>Laboratório 01</option>

  <option value="5"
  {{ '5' == $problema->local_problema ? 'selected' : '' }} >Laboratório 02</option>

  <option value="6"
  {{ '6' == $problema->local_problema ? 'selected' : '' }}>Laboratório 03</option>

  <option value="7"
  {{ '7' == $problema->local_problema ? 'selected' : '' }}>Refeitório</option>

  </select>

  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descreva o problema</label>

    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao_texto" >
    {{$problema->descricao_texto}}
    </textarea>

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
    var p1 = document.getElementsByTagName("a")[5].remove();
    var p2 = document.getElementsByTagName("a")[5].remove();
    </script>
@stop