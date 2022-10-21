
@extends('home')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Centre Formation Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('CentreFormation.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b> NomCentreFormation</b></label>
			<div class="col-sm-10">
				{{ $centreFormation->NomCentreFormation }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Formateur</b></label>
			<div class="col-sm-10">
				{{ $centreFormation->Formateur }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Lieux</b></label>
			<div class="col-sm-10">
				{{ $centreFormation->Lieux }}
			</div>
		</div>
		
	</div>
</div>

@endsection('content')