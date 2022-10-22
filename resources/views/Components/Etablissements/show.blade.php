
@extends('home')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Etablissement Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('Etablissement.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b> Nom etablissement</b></label>
			<div class="col-sm-10">
				{{ $etablissement->Nom }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Chef Type</b></label>
			<div class="col-sm-10">
				{{ $etablissement->Type }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Adresse</b></label>
			<div class="col-sm-10">
				{{ $etablissement->Adresse }}
			</div>
		</div>
		
	</div>
</div>

@endsection('content')