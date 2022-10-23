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
	<div class="card-header">Add new Module</div>
	<div class="card-body">
		<form method="post" action="{{ route('module.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nom Module</label>
				<div class="col-sm-10">
					<input type="text" name="nom_modules" class="form-control" />
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Image Module</label>
				<div class="col-sm-10">
					<input type="file" name="image_modules" id="image_modules" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>
		</form>
	</div>
</div>

@endsection('content')
