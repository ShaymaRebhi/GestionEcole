
@extends('home')
@section('content')
<head>
<style>
 .imgCenter {
  width: 40%;
  margin: auto;
  display: block;
}
</style>
</head>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Centre Formation Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('CentreFormation.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
		<div class="row mb-4">
			
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $centreFormation->logo_centre) }}" width="200" class="imgCenter" />
			</div>
		</div>
	</div>
	<div class="card-body ">


		<div class="row justify-content-around">
			<label class="col-3 "><b> NomCentreFormation :</b></label>
			<div class="col-6">
				{{ $centreFormation->NomCentreFormation }}
			</div>
		</div>
		<div class="row justify-content-around">
			<label class="col-3"><b>Formateur :</b></label>
			<div class="col-6">
				{{ $centreFormation->Formateur }}
			</div>
		</div>
		<div>

	

		</div>
		<div class="row justify-content-around">
			<label class="col-3"><b>Lieux :</b></label>
			<div class="col-6">
				{{ $centreFormation->Lieux }}
			</div>
		</div>
<hr/>


		<h5>Liste des formations externe de {{$centreFormation->NomCentreFormation }} :</h5>
		@if(count($formation) > 0)
		<h6>nbre de formation : {{count($formation)}} </h6>
		<div class="row ">
		@foreach($formation as $row)
		
		

		<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center">{{ $row->Nom }}</h5>
    <h6 class="card-subtitle mb-2 text-muted text-center">Duree : <b>{{ $row->Duree}} hr</b></h6>
	<span class="card-subtitle mb-2 text-muted">De  <b>{{ $row->DateDebut}}</b></span><span class="card-subtitle mb-2 text-muted"> à   <b>{{ $row->DateFin}}</b></span>
    <p class="card-text">Objectif : <b>{{ $row->ObjectifGlobale}}</b></p>
    
  </div>
</div>
		
	
@endforeach
@else
				
					<p colspan="5" class="text-center">No Data Found</p>
				
			@endif
</div>
	</div>
</div>

@endsection('content')