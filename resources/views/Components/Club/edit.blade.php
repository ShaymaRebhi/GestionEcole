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
                                    <form method="post" action="{{ route('clubs.update',$clubToEdit->id) }}"  role="form text-left">
			                          @csrf
                                      
                                      <input hidden=true name="club_id" hidden=true value="{{$clubToEdit->club_id}}" type="text" value="" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">

                                      <label>Nom</label>
                                      <input name="id" hidden=true value="{{$clubToEdit->id}}" type="text" value="" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">

                                      <div class="input-group mb-3">
                                        <input name="nom" value="{{$clubToEdit->nom}}" type="text" value="" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
                                      </div>
                                      <label>Type</label>
                                      <div class="input-group mb-3">
                                        <select name="type" type="text" class="form-control" value="{{$clubToEdit->type}}" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
										<option value="charity">Charity</option>
                                        <option value="IT">IT</option>
                                        <option value="sports">Sports</option>
                                        </select>	
                                      </div>
                                      <label>Date de création</label>
                                      <div class="input-group mb-3">
                                        <input name="dateCreation" value="{{$clubToEdit->dateCreation}}" type="date" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <label>Nombre de personnes</label>
                                      <div class="input-group mb-3">
                                        <input name="nbPersonnes" type="number" value="{{$clubToEdit->nbPersonnes}}" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <label>Description</label>
                                      <div class="input-group mb-3">
                                        <input name="description" type="textarea" value="{{$clubToEdit->description}}" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <div class="text-center">
                                        <button type="submit" class="btn btn-primary" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Update</button>
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
