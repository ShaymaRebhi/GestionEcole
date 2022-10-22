@extends('home')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Classe Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('classe.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Nom classe</b></label>
			<div class="col-sm-10">
				{{ $classe->nom_classe }}
			</div>
		</div>

		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Niveau</b></label>
			<div class="col-sm-10">
				{{ $classe->niveau }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b> Option</b></label>
			<div class="col-sm-10">
				{{ $classe->option }}
			</div>
		</div>
	</div>
</div>

@endsection('content')
