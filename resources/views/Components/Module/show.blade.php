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


	<img src="{{ asset('storage/'.$module->image_modules) }}" class="img-thumbnail" style="max-width: 300px;">

			</div>
		</div>
	</div>
@foreach ($cours as $courss)
	<div class="row mb-3">

    			<label class="col-sm-2 col-label-form"><b>Liste des cours</b></label>
    			<div class="col-sm-10">
    				{{$courss->nom_cours}}
    			</div>

    		</div>
    		  @endforeach
</div>

@endsection('content')
