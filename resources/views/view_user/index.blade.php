{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'MeAjudaAqui')

@section('content_header')
    <h1 align="center">MeAjudaAqui</h1>
@stop

@section('content')
<h1 align="center">Histórico de solicitações</h1>
    <p align="center">Se estiverem pendentes você pode <u>editá-los</u></p>
    <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Tipo Problema</th>
                <th scope="col">Local Problema</th>
                <th scope="col">Descrição Problema</th>
                <th scope="col">Editar</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($problema as $problemas)
                <tr>
                <td>{{$problemas->getTipoProblema()}}</td>
                <td>{{$problemas->getLocalProblema()}}</td>
                <td>{{$problemas->descricao_texto}}</td>
                <td><a class="btn btn-primary" href="{{ route('user.edit', $problemas->id) }}">Editar</a></td>
                <!--<td><button type="button" class="btn btn-primary">Editar</button></td>-->
                </tr>
                @endforeach
            </form>
            </tbody>
          </table>
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
