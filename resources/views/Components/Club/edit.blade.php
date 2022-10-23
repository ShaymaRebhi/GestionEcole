@extends('layouts.mainlayout')
@section('content')
<div class="container-fluid py-4">

        <!-- <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Modifier un club</h6>
                    </div>
                   <div wire:ignore.self class="modal fade" id="modal-form-edit" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card card-plain">
                                  <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modification d'un club</h3>
                                  </div>
                                  <div class="card-body">
                                    <form method="post" action="{{ route('clubs.modifier') }}" role="form text-left">
                                    {!! csrf_field() !!}
                                    @method('PUT')
			                        @csrf
                                      <label>Nom</label>
                                      <div class="input-group mb-3">
                                        <input  name="nom" type="text" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
                                      </div>
                                      <label>Type</label>
                                      <div class="input-group mb-3">
                                        <input name="type" type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <label>Date de création</label>
                                      <div class="input-group mb-3">
                                        <input name="dateCreation" type="date" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <label>Nombre de personnes</label>
                                      <div class="input-group mb-3">
                                        <input name="nbPersonnes" type="number" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <label>Description</label>
                                      <div class="input-group mb-3">
                                        <input name="description" type="textarea" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <div class="text-center">
                                        <button type="submit" class="btn btn-primary" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Ajouter</button>
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
        </div> -->
        ok
</div>
@endsection
