
@extends('home')
@section('content')

<div class="card">
	
	<div class="card-header">
	
		<div class="row">
			<div class="col col-md-6"><b>Formation Interne Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('FormationInterne.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	
	
	Edit Formation Interne</div>
	<div class="card-body">
		<form method="POST" action="{{ route('FormationInterne.update',$formationInterne->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Nom</label>
				<div class="col-sm-10">
					<input type="text" name="Nom" class="form-control" value="{{ $formationInterne->Nom }}" />
				</div>
			</div>
			@error('Nom')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Objectif Globale</label>
				<div class="col-sm-10">
					<input type="text" name="ObjectifGlobale" class="form-control" value="{{ $formationInterne->ObjectifGlobale }}" />
				</div>
			</div>
			@error('ObjectifGlobale')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Duree</label>
				<div class="col-sm-10">
					<input type="number" name="Duree" class="form-control" value="{{ $formationInterne->Duree }}" />
				</div>
			</div>
			@error('Duree')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Date Debut</label>
				<div class="col-sm-10">
					<input type="date" name="DateDebut" class="form-control" value="{{ $formationInterne->DateDebut }}" />
				</div>
			</div>
			@error('DateDebut')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Date Fin</label>
				<div class="col-sm-10">
					<input type="text" name="DateFin" class="form-control" value="{{ $formationInterne->DateFin }}" />
				</div>
			</div>
			@error('DateFin')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Lieux </label>
				<div class="col-sm-10">
			<select class="form-select" aria-label="Default select example" name="Lieux">
					<option value="{{ $formationInterne->Lieux}}" selected>{{ $formationInterne->Lieux }}</option>
						<option value="Amphi A">Amphi A</option>
						<option value="Amphi B">Amphi B</option>
						<option value="Amphi C">Amphi C</option>
					</select>
				</div>
			</div>
			
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $formationInterne->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>

</script>

@endsection('content')