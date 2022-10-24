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


	<div class="row">

    			<div class="col">
    				<img src="{{ asset('images/' .  $cours->image_cours) }}" width="200" class="img-thumbnail" />
                    			</div>
    			<div class="col">
    				<br/>

    		<label class="col-6 col-label-form"><b>Nom cours</b></label>	{{ $cours->nom_cours }}
    			<label class="col-6 col-label-form"><b>Type cours</b></label>{{ $cours->typeCours }}
    			<label class="col-6 col-label-form"><b>Module</b></label>
                        		{{ $module->nom_modules }}</p>
    			</div>
    		</div>
	</div>
</div>

@endsection('content')
