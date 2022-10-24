
@extends('home')
@section('content')

<div class="card">
	
	<div class="card-header">
	
		<div class="row">
			<div class="col col-md-6"><b>FormationExterne Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('FormationExterne.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	
	
	Edit FormationExterne</div>
	<div class="card-body">
		<form method="POST" action="{{ route('FormationExterne.update',$formationExterne->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Nom</label>
				<div class="col-sm-10">
					<input type="text" name="Nom" class="form-control" value="{{ $formationExterne->Nom }}" />
				</div>
			</div>
			@error('Nom')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Objectif Globale</label>
				<div class="col-sm-10">
					<input type="text" name="ObjectifGlobale" class="form-control" value="{{ $formationExterne->ObjectifGlobale }}" />
				</div>
			</div>
			@error('ObjectifGlobale')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Duree</label>
				<div class="col-sm-10">
					<input type="number" name="Duree" class="form-control" value="{{ $formationExterne->Duree }}" />
				</div>
			</div>
			@error('Duree')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Date Debut</label>
				<div class="col-sm-10">
					<input type="date" name="DateDebut" class="form-control" value="{{ $formationExterne->DateDebut }}" />
				</div>
			</div>
			@error('DateDebut')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Date Fin</label>
				<div class="col-sm-10">
					<input type="date" name="DateFin" class="form-control" value="{{ $formationExterne->DateFin }}" />
				</div>
			</div>
			@error('DateFin')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Centre Formation</label>
				<div class="col-sm-10">
			<select class="form-select" aria-label="Default select example" name="centre_formations_id">
					<option value="{{ $formationExterne->centre_formations_id}}" selected>{{ $centre->NomCentreFormation }}</option>
					@if(count($data1) > 0)

				@foreach($data1 as $row)
					<option value="{{ $row->id}}" name="centre_formations_id">{{ $row->NomCentreFormation }}</option>
					>
					@endforeach
				@else
					<option value="NULL">No Data</option>
					@endif
					</select>
					</div>
</div>


			
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $formationExterne->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>

</script>

@endsection('content')