
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
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b> Nom</b></label>
			<div class="col-sm-10">
				{{ $formationExterne->Nom }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>ObjectifGlobale</b></label>
			<div class="col-sm-10">
				{{ $formationExterne->ObjectifGlobale }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Duree</b></label>
			<div class="col-sm-10">
				{{ $formationExterne->Duree }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Date Debut</b></label>
			<div class="col-sm-10">
            {{ $formationExterne->DateDebut }}			</div>
		</div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Date Fin</b></label>
			<div class="col-sm-10">
            {{ $formationExterne->DateFin }}			</div>
		</div>
	</div>
</div>

@endsection('content')