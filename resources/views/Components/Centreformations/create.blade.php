@extends('home')
@section('content')



<div class="card">
<div class="card-header">
	
	<div class="row">
		<div class="col col-md-6"><b>Centre Formation  </b></div>
		<div class="col col-md-6">
			<a href="{{ route('CentreFormation.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
		</div>
	</div>


Add Centre Formation</div>
	<div class="card-body">
		<form method="post" action="{{ route('CentreFormation.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> NomCentreFormation cetre</label>
				<div class="col-sm-10">
					<input type="text" name="NomCentreFormation" class="form-control" />
				</div>
			</div>
			@error('NomCentreFormation')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Formateur</label>
				<div class="col-sm-10">
					<input type="text" name="Formateur" class="form-control" />
				</div>
			</div>
			@error('NomCentreFormation')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Lieux</label>
				<div class="col-sm-10">
					<input type="text" name="Lieux" class="form-control" />
				</div>
			</div>
			@error('Lieux')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Logo centre</label>
				<div class="col-sm-10">
					<input type="file" name="logo_centre" />
				</div>
			</div>
			@error('logo_centre')

<div class="alert alert-danger">{{ $message }}</div>
@enderror
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')