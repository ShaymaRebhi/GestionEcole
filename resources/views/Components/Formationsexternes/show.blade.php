
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
	</div>
	<div class="card-body">
	<div class="row justify-content-around">
			<label class="col-3"><b> Nom</b></label>
			<div class="col-6">
				{{ $formationExterne->Nom }}
			</div>
		</div>
		<div class="row justify-content-around">
			<label class="col-3"><b>ObjectifGlobale</b></label>
			<div class="col-6">
				{{ $formationExterne->ObjectifGlobale }}
			</div>
		</div>
		<div class="row justify-content-around">
			<label class="col-3"><b>Duree</b></label>
			<div class="col-6">
				{{ $formationExterne->Duree }}
			</div>
		</div>
		<div class="row justify-content-around">
			<label class="col-3"><b>Date Debut</b></label>
			<div class="col-6">
            {{ $formationExterne->DateDebut }}			</div>
		</div>
        <div class="row justify-content-around">
			<label class="col-3"><b>Date Fin</b></label>
			<div class="col-6">
            {{ $formationExterne->DateFin }}			</div>
		</div>
	
		<div class="row justify-content-around">
			<label class="col-3"><b>Centre Formation</b></label>
			<div class="col-6">
            {{ $centre->NomCentreFormation }}			</div>
		</div>
	</div>
</div>

@endsection('content')