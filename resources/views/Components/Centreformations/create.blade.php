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
	<div class="card-header">Add Centre Formation Interne</div>
	<div class="card-body">
		<form method="post" action="{{ route('CentreFormation.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> NomCentreFormation cetre</label>
				<div class="col-sm-10">
					<input type="text" name="NomCentreFormation" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Formateur</label>
				<div class="col-sm-10">
					<input type="text" name="Formateur" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Lieux</label>
				<div class="col-sm-10">
					<input type="text" name="Lieux" class="form-control" />
				</div>
			</div>
			
			
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')