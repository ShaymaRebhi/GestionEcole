
@extends('home')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Departement Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('Departement.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b> Nom departement</b></label>
			<div class="col-sm-10">
				{{ $departement->Nom }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Chef departement</b></label>
			<div class="col-sm-10">
				{{ $departement->Chef_Departement }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Bloc</b></label>
			<div class="col-sm-10">
				{{ $departement->Bloc }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Etage</b></label>
			<div class="col-sm-10">
				{{ $departement->Etage }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Etablissement</b></label>
			<div class="col-sm-10">
				{{ $etablissement->NomEtablissement }}
			</div>
		</div>
		
	</div>
</div>

@endsection('content')