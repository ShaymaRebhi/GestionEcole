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
	<div class="card-header">Add Classe</div>
	<div class="card-body">
		<form method="post" action="{{ route('classe.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nom Classe</label>
				<div class="col-sm-10">
					<input type="text" name="nom_classe" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
            				<label class="col-sm-2 col-label-form">Niveau</label>
            				<div class="col-sm-10">
            					<input type="text" name="niveau" class="form-control" />
            				</div>
            			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Option</label>
				<div class="col-sm-10">
					<select name="option" class="form-control">
						<option value="TWIN">TWIN</option>
						<option value="SIM">SIM</option>
						<option value="SE">SE</option>
						<option value="SAE">SAE</option>
                        <option value="DS">DS</option>
                        <option value="BI">BI</option>
                        <option value="INFINI">INFINI</option>
                        <option value="ARCTIC">ARCTIC</option>
                         <option value="SLEAM">SLEAM</option>
					</select>
				</div>
			</div>

			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>
		</form>
	</div>
</div>

@endsection('content')
