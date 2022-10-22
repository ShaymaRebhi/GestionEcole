
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
			<div class="col col-md-6"><b>Formation Externe Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('FormationExterne.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Nom</th>
				<th>Objectif Globale</th>
				<th>Duree</th>
				<th>Date Debut</th>
				<th>Date Fin</th>
				
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
                    <td>{{ $row->Nom }}</td>
						<td>{{ $row->ObjectifGlobale }}</td>
						<td>{{ $row->Duree }}</td>
						<td>{{ $row->DateDebut }}</td>
                        <td>{{ $row->DateFin }}</td>
						<td>
							<form method="post" action="{{ route('FormationExterne.destroy', $row->id) }}">
								
								<a href="{{ route('FormationExterne.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('FormationExterne.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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