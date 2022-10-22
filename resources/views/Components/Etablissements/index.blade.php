
@extends('home')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Etablissement Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('Etablissement.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Nom</th>
				<th>Type</th>
				<th>Adresse</th>
			
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
                    	<td>{{ $row->Nom }}</td>
						<td>{{ $row->Type }}</td>
						<td>{{ $row->Adresse }}</td>
						
						<td>
							<form method="post" action="{{ route('Etablissement.destroy', $row->id) }}">
								
								<a href="{{ route('Etablissement.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('Etablissement.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								@csrf
								@method('DELETE')
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		
	</div>
</div>

@endsection