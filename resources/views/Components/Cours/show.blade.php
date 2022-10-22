@extends('home')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Cours Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('cours.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Nom cours</b></label>
			<div class="col-sm-10">
				{{ $cours->nom_cours }}
			</div>
		</div>

		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Type cours</b></label>
			<div class="col-sm-10">
				{{ $cours->typeCours }}
			</div>
		</div>

		<div class="row mb-4">
        			<label class="col-sm-2 col-label-form"><b>Module</b></label>
        			<div class="col-sm-10">
        				{{ $module->nom_modules }}
        			</div>
        		</div>

		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b> Image cours</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $cours->image_cours) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')
