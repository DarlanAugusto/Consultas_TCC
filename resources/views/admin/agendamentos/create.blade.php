@extends('admin.layout.app')

@section('title', 'Agendar Consulta')

@section('content')
	<h2 class="display-5 text-center">Agendar nova Consulta</h2>
	<hr>
	@if ($errors->any())
		<div class="alert alert-danger">
			<strong>Ops!</strong> Não foi possível agendar essa consulta.
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		</div>
	@endif
	<form action="{{ route('agendamentos.store') }}" method="POST">
		@csrf
		
		<div class="row justify-content-center">
			<div class="form-group col-6">
				<label for="tipo" class="form-label">Tipo</label>
				<select class="form-select form-select mb-3" name="tipo" id="tipo">
					<option selected>Selecionar Categoria</option>
					<option value="Dermatologista">Dermatologista</option>
					<option value="Oftamologista">Oftamologista</option>
					<option value="Cardiologista">Cardiologista</option>
					<option value>Mostrar erro</option>
				</select>

				<label for="tipo" class="form-label">Datas Disponíveis</label>
				<select class="form-select form-select mb-3" name="data_hora" id="data_hora">
					<optgroup label="Segunda">
						<option value="03/10/2021 às 09:30">03/10/2021 às 09:30</option>
					  </optgroup>
					  <optgroup label="Quinta">
						<option value="05/10/2021 às 10:00">05/10/2021 às 10:00</option>
						<option value="05/10/2021 às 11:00">05/10/2021 às 11:00</option>
					  </optgroup>
					  <optgroup label="Sexta">
						<option value="07/10/2021 às 12:30">07/10/2021 às 12:30</option>
						<option value="07/10/2021 às 14:30">07/10/2021 às 14:30</option>
						<option value="07/10/2021 às 15:30">07/10/2021 às 15:30</option>
					  </optgroup>
				</select>

				<label for="tipo" class="form-label">Unidade</label>
				<select class="form-select form-select mb-3" name="unidade" id="unidade">
					<option value="Unidade Básica de Saúde">Unidade Básica de Saúde</option>
					<option value="Postão">Postão</option>
					<option value="Santa Casa">Santa Casa</option>
				</select>
				
				<hr>

				<div class="form-group text-center">
					<button type="submit" class="btn btn-dark px-5" title="Agendar"> <i class="bi bi-calendar-plus"></i> Agendar</button>
				</div>
			</div>
		</div>
	</form>
@endsection