@extends('home')
@section('content')

<div class="card">
	<div class="card-header">Edit Cours</div>
	<div class="card-body">
		<form method="post" action="{{ route('classe.update',$classe->id) }}" enctype="multipart/form-data">
			@method('PUT')
			@csrf

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nom classe</label>
				<div class="col-sm-10">
					<input type="text" name="nom_classe" class="form-control" value="{{ $classe->nom_classe }}" />
				</div>
			</div>

            <div class="row mb-3">
                        				<label class="col-sm-2 col-label-form">Niveau</label>
                        				<div class="col-sm-10">
                        					<input type="text" name="niveau" class="form-control" value="{{ $classe->niveau }}" />
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
				<input type="hidden" name="hidden_id" value="{{ $classe->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>
		</form>
	</div>
</div>
<script>
document.getElementsByName('option')[0].value = "{{ $classe->option }}";
</script>

@endsection('content')
