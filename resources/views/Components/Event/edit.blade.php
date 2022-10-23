@extends('layouts.mainlayout')
@section('content')
@csrf

<div class="container-fluid py-4">

       <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                          <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card card-plain">
                                  <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modification d'un event</h3>
                                  </div>
                                  <div class="card-body">
                                    <form method="post" action="{{ route('events.ajouter') }}" role="form text-left">
                                    {!! csrf_field() !!}
                                    <input hidden=true name="club_id" type="text" value="{{$event->club_id}}" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
									<input hidden=true name="event_id" type="text" value="{{$event->id}}" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
                                      <label>Nom</label>
                                      <div class="input-group mb-3">
                                        <input name="nom" type="text" value="{{$event->nom}}" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
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
</div>

</div>

@endsection