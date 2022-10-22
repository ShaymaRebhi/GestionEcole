@extends('layouts.mainlayout')
@section('content')
<div class="container-fluid py-4">

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>La liste des clubs</h6>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-block btn-default mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Ajouter</button>
                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card card-plain">
                                  <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                  </div>
                                  <div class="card-body">
                                    <form role="form text-left">
                                      <label>Email</label>
                                      <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                      </div>
                                      <label>Password</label>
                                      <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                      </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                      </div>
                                      <div class="text-center">
                                        <button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign in</button>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                      Don't have an account?
                                      <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
                                    </p>
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
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Delete
                                        </a>
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


