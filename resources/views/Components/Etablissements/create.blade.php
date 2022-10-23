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
	<div class="card-header">Add Etablissement</div>
	<div class="card-body">
		<form method="post" action="{{ route('Etablissement.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Nom etablissement</label>
				<div class="col-sm-10">
					<input type="text" name="NomEtablissement" class="form-control" />
				</div>
			</div>
			
			
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Type</label>
				<div class="col-sm-10">
				<select class="form-select" aria-label="Default select example" name="Type">
					<option selected>Open this select menu</option>
					<option value="Ecole primaire">Ecole primaire</option>
					<option value="Collège">Collège</option>
					<option value="Ecole secondaire">Ecole secondaire</option>
					<option value="Ecole supérieur"> Ecole supérieur</option>
					</select>
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Adresse</label>
				<div class="col-sm-10">
					<input type="text" name="Adresse" class="form-control" />
				</div>
			</div>
			
			
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')