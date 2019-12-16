{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Histórico')

@section('content_header')
    <h1 align="center">Histórico e status de solicitações</h1>
@stop

@section('content')
    <p align="center">Se estiverem pendentes você pode <u>editar</u> editar ou <u>remover</u></p>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tipo</th>
      <th scope="col">Local</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form style="width: 700px;">
              <input type="text" name="id" value="0">
              <div class="form-group">
                <select class="custom-select" name="tipo">
                <option selected value="0">Qual o tipo do problema?</option>
                <option value="1">1 - Estrutura</option>
                <option value="2">2 - Energia</option>
                <option value="3">3 - Ar-Condicionado</option>
                <option value="4">4 - internet</option>
                </select>
              <br> <br>
                <select class="custom-select" name="local">
                  <option selected value="0">Informe o local</option>
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
                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar mudanças</button>
              </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  <tbody>
    <form action="">
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
            Editar
          </button>
        </td>
      </tr>
    </form>
    <form action="">
      <tr>
        <th scope="row">2</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
            Editar
          </button>
        </td>
      </tr>
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
    var p1 = document.getElementsByTagName("a")[6].remove();
    var p2 = document.getElementsByTagName("a")[6git ].remove();
</script>
@stop