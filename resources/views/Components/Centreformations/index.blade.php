
@extends('home')

@section('content')

@if($message = Session::get('success'))
<head>
    <title>Laravel 9 Sweet Alert Confirm Delete Example - Nicesnippets.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
</head>
<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Center Formation Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('CentreFormation.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
		
	
	</div>
	<div class="card-body">
	<div class="row">
    <!-- Search input -->
    <form>
        <input type="search"
    class="form-control"
    placeholder="Find user here"
    name="search"
    value="{{ request('search') }}">
    </form>
</div>
<hr/>
		<table class="table table-bordered">
			<tr>
				<th>Logo</th>
				<th>NomCentreFormation</th>
				<th>Formateur</th>
				<th>Lieux</th>
			
			</tr>
			

			@forelse($data as $row)

					<tr>
					<td><img src="{{ asset('images/' . $row->logo_centre) }}" width="75" /></td>
                    <td>{{ $row->NomCentreFormation }}</td>
						<td>{{ $row->Formateur }}</td>
						<td>{{ $row->Lieux }}</td>
						
						<td>
							<form method="post" action="{{ route('CentreFormation.destroy', $row->id) }}">
								
								<a href="{{ route('CentreFormation.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('CentreFormation.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								@csrf
								@method('DELETE')
								<input type="submit"  class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete' value='Delete' />
							</form>
							
						</td>
					</tr>

					@empty
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
				@endforelse
		</table>
		

		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <script type="text/javascript">
            $('.show-alert-delete-box').click(function(event){
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: "Are you sure you want to delete this record?",
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    type: "warning",
                    buttons: ["Cancel","Yes!"],
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        </script>
	</div>
</div>

@endsection