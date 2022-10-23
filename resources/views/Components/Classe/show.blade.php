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




	<h5>Liste des participants de {{$classe->nom_classe }} :</h5>
            @if(count($users) > 0)
            <h6>nbre des etudiants : {{count($users)}} </h6>
            <div class="row ">
            @foreach($users as $row)



            <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title text-center">{{ $row->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted text-center"> <b>{{ $row->username }} </b></h6>
         <span class="card-subtitle mb-2 text-muted"> <b>{{ $row->email }}</b></span>


      </div>
    </div>


    @endforeach
    @else

                        <p colspan="5" class="text-center">No Data Found</p>

                @endif


</div>

@endsection('content')
