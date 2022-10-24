@extends('home')
@section('content')



<div class="card">
<div class="card-header">
	
	<div class="row">
		<div class="col col-md-6"><b>Formation Externe </b></div>
		<div class="col col-md-6">
			<a href="{{ route('FormationExterne.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
		</div>
	</div>


Add Formation Externe</div>
	<div class="card-body">
		<form method="post" action="{{ route('FormationExterne.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Name</label>
				<div class="col-sm-10">
					<input type="text" name="Nom" class="form-control" />
				</div>
			</div>
			@error('Nom')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ObjectifGlobale</label>
				<div class="col-sm-10">
					<input type="text" name="ObjectifGlobale" class="form-control" />
				</div>
			</div>
			@error('ObjectifGlobale')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Duree</label>
				<div class="col-sm-10">
					<input type="number" name="Duree" class="form-control" />
				</div>
			</div>
			@error('Duree')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">DateDebut</label>
				<div class="col-sm-10">
					<input type="date" name="DateDebut" class="form-control" />
				</div>
			</div>
			@error('DateDebut')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">DateFin</label>
				<div class="col-sm-10">
					<input type="date" name="DateFin" class="form-control" />
				</div>
			</div>
			@error('DateFin')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Centre Formation</label>
				<div class="col-sm-10">
				<select class="form-select" aria-label="Default select example" name="centre_formations_id">
					<option selected>Open this select menu</option>
					@if(count($data1) > 0)

				@foreach($data1 as $row)
					<option value="{{ $row->id}}" name="centre_formations_id">{{ $row->NomCentreFormation }}</option>
					>
					@endforeach
				@else
					<option value="NULL">No Data</option>
					@endif
					</select>
				</div>
			</div>
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')