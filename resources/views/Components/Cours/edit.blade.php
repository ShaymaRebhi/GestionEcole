@extends('home')
@section('content')

<div class="card">
	<div class="card-header">Edit Cours</div>
	<div class="card-body">
		<form method="post" action="{{ route('cours.update',$cours->id) }}" enctype="multipart/form-data">
			@method('PUT')
			@csrf

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nom cours</label>
				<div class="col-sm-10">
					<input type="text" name="nom_cours" class="form-control" value="{{ $cours->nom_cours }}" />
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Type cours</label>
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
            					<option value="{{ $row->id}}" name="idmodule">{{ $row->nom_modules }}</option>
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
				<label class="col-sm-2 col-label-form">Image cours</label>
				<div class="col-sm-10">
					<input type="file" name="image_cours" />
					<br />
					<img src="{{ asset('images/' . $cours->image_cours) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image_cours" value="{{ $cours->image_cours }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $cours->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>
		</form>
	</div>
</div>
<script>
document.getElementsByName('typeCours')[0].value = "{{ $cours->typeCours }}";
</script>

@endsection('content')
