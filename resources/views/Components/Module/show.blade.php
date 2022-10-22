@extends('home')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Module Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('module.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Nom module</b></label>
			<div class="col-sm-10">
				{{ $module->nom_modules }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b> Image module</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $module->image_modules) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')
