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
	<div class="card-header">Add Cours</div>
	<div class="card-body">
		<form method="post" action="{{ route('cours.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nom Cours</label>
				<div class="col-sm-10">
					<input type="text" name="nom_cours" class="form-control" />
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Type Cours</label>
				<div class="col-sm-10">
					<select name="typeCours" class="form-control">
						<option value="Td">Td</option>
						<option value="Tp">Tp</option>
						<option value="Cours">Cours</option>
					</select>
				</div>
			</div>



			<div class="row mb-3">
            				<label class="col-sm-2 col-label-form">Module</label>
            				<div class="col-sm-10">
            				<select class="form-select" aria-label="Default select example" name="modules_id">
            					<option selected>Open this select menu</option>
            					@if(count($data1) > 0)

            				@foreach($data1 as $row)
            					<option value="{{ $row->id}}" name="id">{{ $row->nom_modules }}</option>
            					>
            					@endforeach
            				@else
            					<option value="NULL">No Data
            </option>
            					@endif
            					</select>
            				</div>
            			</div>




			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Image Cours</label>
				<div class="col-sm-10">
					<input type="file" name="image_cours" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>
		</form>
	</div>
</div>

@endsection('content')
