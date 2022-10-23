@extends('home')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Détails du club</b></div>
			<div class="col col-md-6">
				<a href="{{ route('clubs.clubsList') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Nom du club</b></label>
			<div class="col-sm-10">
				{{ $club->nom }}
			</div>
		</div>

		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Type</b></label>
			<div class="col-sm-10">
				{{ $club->type }}
			</div>
		</div>

		<div class="row mb-4">
        			<label class="col-sm-2 col-label-form"><b>Nombre de personnes</b></label>
        			<div class="col-sm-10">
        				{{ $club->nbPersonnes }}
        			</div>
        		</div>

		<div class="row mb-4">
			
		</div>
	</div>
    <div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Les membres de ce club</b></div>
			<div class="col col-md-6">
			    <button type="button"  class="btn btn-info btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modal-form-members">Ajouter</button>
                        <div wire:ignore.self class="modal fade" id="modal-form-members" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card card-plain">
                                  <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Ajouter un nouveau participant</h3>
                                  </div>
                                  <div class="card-body">
								  <form method="post" action="{{ route('clubs.inviter') }}" role="form text-left">
                                    {!! csrf_field() !!}
									  <input hidden=true name="club_id" type="text" value="{{$club->id}}" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
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
			
		</div>
        @if($users)

				@foreach($users as $user)
            <div class="card card-frame">
			
              <div class="card-body">
              {{$user->email}}
              </div>
            </div>
            @endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
  </div>
    <div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Les évenements de ce club</b></div>
			<div class="col col-md-6">
				<a href="{{ route('clubs.clubsList') }}" class="btn btn-primary btn-sm float-end">Vers la liste de tous les évenements</a>
			    <button type="button"  class="btn btn-info btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modal-form">Ajouter</button>
                        <div wire:ignore.self class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card card-plain">
                                  <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Ajouter un nouvel événement</h3>
                                  </div>
                                  <div class="card-body">
                                    <form method="post" action="{{ route('events.ajouter') }}" role="form text-left">
                                    {!! csrf_field() !!}
									<input name="club_id" type="text" value="{{$club->id}}" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
                                      <label>Nom</label>
                                      <div class="input-group mb-3">
                                        <input name="nom" type="text" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
                                      </div>
                                      <label>Type</label>
                                      <div class="input-group mb-3">
                                        <select name="type" type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
										<option value="professional">professional</option>
                                        <option value="party">party</option>
                                        <option value="teambuilding">teambuilding</option>
                                        </select>	
                                      </div>
                                      <label>Date</label>
                                      <div class="input-group mb-3">
                                        <input name="date" type="date" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <label>Heure</label>
                                      <div class="input-group mb-3">
                                        <input name="time" type="time" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <label>Capacité de personnes</label>
                                      <div class="input-group mb-3">
                                        <input name="nbPersonnesMax" type="number" class="form-control" placeholder="" aria-label="Password" aria-describedby="password-addon">
                                      </div>
									  <label>Lieu</label>
                                      <div class="input-group mb-3">
                                        <input name="lieu" type="text" class="form-control" aria-label="" aria-describedby="password-addon">
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
            @if($events)

				@foreach($events as $event)
            <div class="card card-frame">
              <div class="card-body">
              {{$event->type}}
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
