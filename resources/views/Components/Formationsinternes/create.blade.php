@extends('home')
@section('content')



<div class="card">
<div class="card-header">
	
		<div class="row">
			<div class="col col-md-6"><b>Formation Interne </b></div>
			<div class="col col-md-6">
				<a href="{{ route('FormationInterne.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	
	
	Add Formation Interne</div>
	<div class="card-body">
		<form method="post" action="{{ route('FormationInterne.store') }}" enctype="multipart/form-data">
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
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Lieux</label>
				<div class="col-sm-10">
					<select name="Lieux" class="form-control">
						<option value="Amphi A">Amphi A</option>
						<option value="Amphi B">Amphi B</option>
						<option value="Amphi C">Amphi C</option>
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