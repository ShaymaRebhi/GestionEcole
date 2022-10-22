
@extends('home')
@section('content')

<div class="card">
	
	<div class="card-header">
	
		<div class="row">
			<div class="col col-md-6"><b>Etablissement  Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('Etablissement.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	
	
	Edit Etablissement </div>
	<div class="card-body">
		<form method="POST" action="{{ route('Etablissement.update',$etablissement->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Nom etablissement</label>
				<div class="col-sm-10">
					<input type="text" name="Nom" class="form-control" value="{{ $etablissement->Nom }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Type</label>
				<div class="col-sm-10">
					<input type="text" name="Chef_Departement" class="form-control" value="{{ $etablissement->Type }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Adresse</label>
				<div class="col-sm-10">
					<input type="text" name="Adresse" class="form-control" value="{{ $etablissement->Adresse }}" />
				</div>
			</div>
          
			
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $etablissement->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>

</script>

@endsection('content')