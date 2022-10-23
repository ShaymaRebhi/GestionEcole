@extends('home')

@section('content')

<div class="card">
	<div class="card-header">
    <div class="card card-background move-on-hover">
  <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
  <div class="card-body pt-12">
    <h4 class="text-white">{{$event->nom}}</h4>
    <p>Save the date on : {{$event->date }} {{$event->time}} à {{$event->lieu}}</p>
    <p>Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.</p>

</div>
</div>
			
	</div>

    <div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Les participants</b></div>
			<div class="col col-md-6">
				<a href="{{ route('events.eventsList') }}" class="btn btn-primary btn-sm float-end">Vers la liste de tous les évenements</a>
			    <button type="button"  class="btn btn-info btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modal-form">Ajouter</button>
                        <div wire:ignore.self class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card card-plain">
                                  <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Inviter des participants</h3>
                                  </div>
                                  <div class="card-body">
                                    <form method="post" action="{{ route('events.inviter') }}" role="form text-left">
                                    {!! csrf_field() !!}
                                    
									                 <input hidden=true name="event_id" type="text" value="{{$event->id}}" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
                                      <label>Email</label>
                                      <div class="input-group mb-3">
                                        <input name="email" type="text" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
                                      </div>

                                      <div class="text-center">
									                   <button type="submit" class="btn btn-primary">Save</button>
                                      </div>
                                    </form>
                                  </div>
            
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
			
			</div>
            @if($users)

			     @foreach($users as $user)
            <div class="card card-frame">
              <div class="card-body">
              <i class="ni ni-circle-08"></i> 
              <label class="col-m-2 col-label-form"><b>Nom : {{$user->name}}</b></label>
              </br>
              <label class="col-sm-2 col-label-form"><b>Email :{{$user->email}}</b></label>
              </div>
            </div>
            @endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</div>
        
  </div>
</div>
		</div>
	</div>
</div>

@endsection('content')
