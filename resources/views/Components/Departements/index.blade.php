
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
			<div class="col col-md-6"><b>Departement Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('Departement.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Nom</th>
				<th>Chef departement</th>
				<th>Bloc</th>
				<th>Etage</th>
			
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
                    	<td>{{ $row->Nom }}</td>
						<td>{{ $row->Chef_Departement }}</td>
						<td>{{ $row->Bloc }}</td>
						<td>{{ $row->Etage }}</td>
						
						<td>
							<form method="post" action="{{ route('Departement.destroy', $row->id) }}">
								
								<a href="{{ route('Departement.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('Departement.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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