@extends('layouts.app')
@section('content')

<form method="post" action="{{ url('/create_customer') }}">	
	{{csrf_field()}}
	<div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px;">
	{{-- <div class="form-group col-md-10" style="position:absolute; left:100px; top: 50px; border: outset; border-color: red;"> --}}
		{{-- <table class="table table-bordered"> --}}
		<table class="table table-bordered">
			<br>
			<br>
		{{-- <table class="table table-bordered" style="background-color: #b9b9b9; border-width: : medium; border-color: black"> --}}
			<h5>Cadastro de Cliente</h5>
				<tr>
					<th>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="inputCity">Loja:</label>
								<input type="text" class="form-control" name="store_id" placeholder="Store" required>
							</div>
							<div class="form-group col-md-6">
								<label for="inputCity">Primero Nome:</label>
								<input type="text" class="form-control" name="first_name" placeholder="First Name" required>
							</div>
							<div class="form-group col-md-6">
								<label for="inputCity">Último Nome:</label>
								<input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
							</div>
							
							<div class="form-group col-md-12">
								<label for="inputCity">Email:</label>
								<input type="text" class="form-control" name="email" placeholder="Email" required>
							</div>
							<div class="form-group col-md-12">
								<label for="inputCity">Endereço:</label>
								<input type="text" class="form-control" name="address_id" placeholder="Address" required>
							</div>
						<br>
						<br>
						<div align="center">
							<button type="submit" class="btn btn-primary">Salvar</button>
							<a href="{{url('/lista_customer')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
						</div>
					</th>
				</tr>
			</thead>
		</table>
	</div>	
</form>
@endsection