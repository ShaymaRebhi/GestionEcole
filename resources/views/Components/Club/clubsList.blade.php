@extends('layouts.mainlayout')
@section('content')
<div class="container-fluid py-4">

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>La liste des clubs</h6>
                    </div>
                    @csrf
                    <div class="col-md-4">
                        <button type="button" class="btn btn-block btn-default mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Ajouter</button>
                        <div wire:ignore.self class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card card-plain">
                                  <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Ajouter un nouveau club</h3>
                                  </div>
                                  <div class="card-body">
                                    <form method="post" action="{{ route('clubs.ajouter') }}" role="form text-left">
                                    {!! csrf_field() !!}
                                      <label>Nom</label>
                                      <div class="input-group mb-3">
                                        <input name="nom" type="text" class="form-control" placeholder="..." aria-label="Email" aria-describedby="email-addon">
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

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nom</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date de création</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre de personnes</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clubs as $club)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                       
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"> {{ $club->id }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $club->nom }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $club->type }}</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $club->dateCreation }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $club->nbPersonnes }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $club->description }}</span>
                                    </td>
                                    
                                    <td class="align-middle">
                                       <button class="btn btn-primary">Edit</button>
                                       <button class="btn btn-primary">Delete</button>
                                       <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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


