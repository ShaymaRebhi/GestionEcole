
@extends('home')
@section('content')

<div class="card">
	
	<div class="card-header">
	
		<div class="row">
			<div class="col col-md-6"><b>Centre Formation  Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('CentreFormation.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	
	
	Edit Centre Formation </div>
	<div class="card-body">
		<form method="POST" action="{{ route('CentreFormation.update',$centreFormation->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> NomCentreFormation</label>
				<div class="col-sm-10">
					<input type="text" name="NomCentreFormation" class="form-control" value="{{ $centreFormation->NomCentreFormation }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Formateur</label>
				<div class="col-sm-10">
					<input type="text" name="Formateur" class="form-control" value="{{ $centreFormation->Formateur }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Lieux</label>
				<div class="col-sm-10">
					<input type="text" name="Lieux" class="form-control" value="{{ $centreFormation->Lieux }}" />
				</div>
			</div>
          
			
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Logo Centre</label>
				<div class="col-sm-10">
					<input type="file" name="logo_centre" />
					<br />
					<img src="{{ asset('images/' . $centreFormation->logo_centre) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_logo_centre" value="{{ $centreFormation->logo_centre }}" />
				</div>
			</div>


			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $centreFormation->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>

</script>

@endsection('content')