@extends('home')
@section('content')

<div class="card">
	<div class="card-header">Edit Module</div>
	<div class="card-body">
		<form method="post" action="{{ route('module.update',$module->id) }}" enctype="multipart/form-data">
			@method('PUT')
			@csrf

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nom Module</label>
				<div class="col-sm-10">
					<input type="text" name="nom_modules" class="form-control" value="{{ $module->nom_modules }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Image module</label>
				<div class="col-sm-10">
					<input type="file" name="image_modules" />
					<br />
					<img src="{{ asset('images/' . $module->image_modules) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image_modules" value="{{ $module->image_modules }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $module->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>
		</form>
	</div>
</div>


@endsection('content')
