@extends('layouts.mainlayout')
@section('content')
<div class="container-fluid py-4">

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Authors table</h6>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">John Michael</h6>
                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                                        <p class="text-xs text-secondary mb-0">Organization</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Online</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                                        <p class="text-xs text-secondary mb-0">Developer</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                                <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Executive</p>
                                        <p class="text-xs text-secondary mb-0">Projects</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Online</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Michael Levi</h6>
                                                <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                                        <p class="text-xs text-secondary mb-0">Developer</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Online</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Richard Gran</h6>
                                                <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                                        <p class="text-xs text-secondary mb-0">Executive</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                        <p class="text-xs text-secondary mb-0">Developer</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    </div>
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Projects table</h6>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-4">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-plain card-blog mt-4">
                  <div class="card-image border-radius-lg position-relative">
                    <a href="javascript:;">
                      <div class="blur-shadow-image">
                        <img class="img border-radius-lg move-on-hover" src="../img/school.png">
                      </div>
                    </a>
                  </div>
                  <div class="card-body px-0">
                    <h5>
                      <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million for pet sitting</a>
                    </h5>
                    <p>
                      Finding temporary housing for your dog should be as easy as
                      renting an Airbnb. That’s the idea behind Rover ...
                    </p>
                    <a href="javascript:;" class="text-info icon-move-right">Read More
                      <i class="fas fa-arrow-right text-sm" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card">
                  <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                    <a href="javascript:;" class="d-block blur-shadow-image">
                      <img src="../img/ivancik.jpg" class="img-fluid border-radius-lg">
                    </a>
                  </div>

                  <div class="card-body">
                    <div class="w-50 mx-auto">
                      <img src="../img/ivancik.jpg" alt="" class="img-fluid">
                    </div>
                    <p class="card-description mb-5 mt-3">
                      "Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons."
                    </p>
                    <div class="pull-left">
                      <span>―</span>
                      Collin Marcus
                    </div>
                    <a href="javascript:;" class="text-success icon-move-right pull-right">Read More
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card card-profile card-plain">
                  <div class="card-body text-center bg-white shadow border-radius-lg p-3">
                    <a href="javascript:;">
                      <img class="w-100 border-radius-md" src="../img/ivancik.jpg">
                    </a>
                    <h5 class="mt-3 mb-1 d-md-block d-none">Natalie Paisley</h5>
                    <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Natalie Paisley</p>
                    <p class="mb-0 text-xs font-weight-bolder text-warning text-gradient text-uppercase">Credit Analyst</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div class="card card-profile mt-md-0 mt-5">
                  <a href="javascript:;">
                    <div class="p-3">
                      <img class="w-100 border-radius-md" src="../img/ivancik.jpg">
                    </div>
                  </a>
                  <div class="card-body blur justify-content-center text-center mx-4 mb-4 border-radius-md">
                    <h4 class="mb-0">Bruce Mars</h4>
                    <p>Atlanta, U.S.</p>
                    <div class="row justify-content-center text-center">
                      <div class="col-12 mx-auto">
                        <h5 class="text-info mb-0">750</h5>
                        <small>Projects</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mt-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block blur-shadow-image">
                      <img src="../img/ivancik.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                    </a>
                  </div>
                  <div class="card-body px-1 pt-3">
                    <p class="text-gradient text-primary mb-2 text-sm">Entire Apartment • 2 Guests • 1 Bed</p>
                    <a href="javascript:;">
                      <h5>
                        Cozy Double Room Near Station
                      </h5>
                    </a>
                    <p>
                      Different people have different taste, and various types of music have many ways of leaving an impact on someone.
                    </p>
                    <button type="button" class="btn btn-outline-primary btn-sm">From / Night</button>
                  </div>
                </div>
              </div>

              <div class="col-md-8 mt-4">
                <div class="card">
                  <img class="card-img-top" src="../img/ivancik.jpg">
                  <div class="card-body">
                    <h4>
                      Argon Dashboard
                    </h4>
                    <p>
                      One of the most beautiful and complex UI Kits built by the team behind Creative Tim. That's pretty impressive.
                    </p>
                    <a href="javascript:;" class="text-primary icon-move-right">More about us
                      <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
</div>
            </div>
        </div>
    </div>
@endsection


