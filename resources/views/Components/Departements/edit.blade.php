
@extends('home')
@section('content')

<div class="card">
	
	<div class="card-header">
	
		<div class="row">
			<div class="col col-md-6"><b>Departement  Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('CentreFormation.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	
	
	Edit Departement </div>
	<div class="card-body">
		<form method="POST" action="{{ route('CentreFormation.update',$centreFormation->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Nom departement</label>
				<div class="col-sm-10">
					<input type="text" name="Nom" class="form-control" value="{{ $departement->Nom }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Chef departement</label>
				<div class="col-sm-10">
					<input type="text" name="Chef_Departement" class="form-control" value="{{ $departement->Chef_Departement }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Bloc</label>
				<div class="col-sm-10">
					<input type="text" name="Bloc" class="form-control" value="{{ $departement->Bloc }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Etage</label>
				<div class="col-sm-10">
					<input type="number" name="Etage" class="form-control" min="0" max="5" value="{{ $departement->Etage }}" />
				</div>
			</div>
          
			
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $departement->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>

</script>

@endsection('content')