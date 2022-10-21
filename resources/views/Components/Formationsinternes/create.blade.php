@extends('home')
@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Formation Interne</div>
	<div class="card-body">
		<form method="post" action="{{ route('FormationInterne.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Name</label>
				<div class="col-sm-10">
					<input type="text" name="Nom" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">ObjectifGlobale</label>
				<div class="col-sm-10">
					<input type="text" name="ObjectifGlobale" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Duree</label>
				<div class="col-sm-10">
					<input type="number" name="Duree" class="form-control" />
				</div>
			</div>
			
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">DateDebut</label>
				<div class="col-sm-10">
					<input type="date" name="DateDebut" class="form-control" />
				</div>
			</div>
			
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">DateFin</label>
				<div class="col-sm-10">
					<input type="date" name="DateFin" class="form-control" />
				</div>
			</div>
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')