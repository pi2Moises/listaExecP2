@extends('layouts.app')
@section('content')
<div class="form-group col-md-4">
  <label for="inputZip">Cadastrar novo cliente</label>
  <br>
  <a href="{{url('/home')}}"><button type="button" class="btn btn-success">Início</button></a>
  <a href="{{url('/create_customer')}}"><button type="button" class="btn btn-success">Novo Cliente</button></a>
</div>
<font size="2">
<div class="col-md-12">
  <table class="table table-hover table-bordered table-striped">
    <br>
    <H5>Lista de Clientes</H5>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dados as $dado)
      <tr>
        <td>{{$dado->first_name}}</td>
        <td>{{$dado->last_name}}</td>
        <td>{{$dado->email}}</td>        
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    Paginação
    {{ $dados->links() }}:
  </div>
</div>
</font>

@endsection