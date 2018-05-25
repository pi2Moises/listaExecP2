@extends('layouts.app')
@section('content')

<form method="post" action="{{ url('/edit_atividade', $atividade->id) }}">	
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px;">
	{{-- <div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px; border: outset; border-color: red;"> --}}
		{{-- <table class="table table-bordered"> --}}
		<table class="table table-bordered">
		{{-- <table class="table table-bordered" style="background-color: #b9b9b9; border-width: : medium; border-color: black"> --}}
			<h3 align="center">EDITAR ATIVIDADE</h3>
				<tr>
					<th>
						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="inputCity">Aula</label>
								<input type="text" class="form-control" name="aula" placeholder="01" value="{{$atividade->aula}}" required>
							</div>
							<div class="form-group col-md-10">
								<label for="inputCity">Conteúdo</label>
								<input type="text" class="form-control" name="conteudo" value="{{$atividade->conteudo}}" required>
							</div>
						<br>
						<br>
						<div align="center">
							<button type="submit" class="btn btn-primary">Salvar</button>
							<a href="{{url('/listaatividade')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>	
</form>
@endsection