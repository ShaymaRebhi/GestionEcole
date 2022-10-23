
@extends('home')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Formation Interne Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('FormationInterne.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row justify-content-around">
			<label class="col-3"><b> Nom</b></label>
			<div class="col-6">
				{{ $formationInterne->Nom }}
			</div>
		</div>
		<div class="row justify-content-around">
			<label class="col-3"><b>ObjectifGlobale</b></label>
			<div class="col-6">
				{{ $formationInterne->ObjectifGlobale }}
			</div>
		</div>
		<div class="row justify-content-around">
			<label class="col-3"><b>Duree</b></label>
			<div class="col-6">
				{{ $formationInterne->Duree }}
			</div>
		</div>
		<div class="row justify-content-around">
			<label class="col-3"><b>Date Debut</b></label>
			<div class="col-6">
            {{ $formationInterne->DateDebut }}			</div>
		</div>
        <div class="row justify-content-around">
			<label class="col-3"><b>Date Fin</b></label>
			<div class="col-6">
            {{ $formationInterne->DateFin }}			</div>
		</div>

		
<hr/>



		<h5>Liste des participants de {{$formationInterne->Nom }} :</h5>
		@if(count($users) > 0)
		<hr/>
		<h6>Nombre de participants : {{count($users)}} </h6>
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
</div>

@endsection('content')