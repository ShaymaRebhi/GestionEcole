@extends('home')
@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Departement</div>
	<div class="card-body">
		<form method="post" action="{{ route('Departement.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Nom departement</label>
				<div class="col-sm-10">
					<input type="text" name="Nom" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Chef departement</label>
				<div class="col-sm-10">
					<input type="text" name="Chef_Departement" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Bloc</label>
				<div class="col-sm-10">
					<input type="text" name="Bloc" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Etage</label>
				<div class="col-sm-10">
					<input type="number" name="Etage" class="form-control"/>
				</div>
			</div>

			
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Etablissement</label>
				<div class="col-sm-10">
				<select class="form-select" aria-label="Default select example" name="etablissement_id">
					<option selected>Open this select menu</option>
					@if(count($data1) > 0)

				@foreach($data1 as $row)
					<option value="{{ $row->id}}" name="etablissement_id">{{ $row->NomEtablissement }}</option>
					>
					@endforeach
				@else
					<option value="NULL">No Data</option>
					@endif
					</select>
				</div>
			</div>
			
			
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')