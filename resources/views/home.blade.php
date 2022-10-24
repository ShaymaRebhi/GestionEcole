
@extends('layouts.mainlayout')
@section('content')


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Les cours</p>
                                    <h5 class="font-weight-bolder">
                                        $53,000
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>

                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Les formations</p>
                                    <h5 class="font-weight-bolder">
                                        2,300
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>

                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Les événements</p>
                                    <h5 class="font-weight-bolder">
                                        12
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-warning text-sm font-weight-bolder">Jusqu'à Aujourd'hui</span>

                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Les utilisateurs</p>
                                    <h5 class="font-weight-bolder">
                                        $103,430
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+5%</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Sales overview</h6>
                        <p class="text-sm mb-0">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card card-carousel overflow-hidden h-100 p-0">
                    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner border-radius-lg h-100">
                            <div class="carousel-item h-100 active" style="background-image: url('data:image/jpeg;base64,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');
      background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Get started with Argon</h5>
                                    <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100" style="background-image: url('https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_720/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/rdupocooutluzwx2c0ne/TheHarvardTourAHarvardUniversityStudent-LedCampusTourfromBoston.jpg');
      background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                    <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100" style="background-image: url('https://images.squarespace-cdn.com/content/v1/57c99e749de4bb3184279ffc/1632137509624-UP9HADAPEDWLT0U72KJA/HARVARD.png');
      background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-trophy text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                    <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

            <div class="row">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Etablissements</h6>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="ni ni-mobile-button text-white opacity-10"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                        <span class="text-xs">250 in stock, <span class="font-weight-bold">346+ sold</span></span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="ni ni-tag text-white opacity-10"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                                        <span class="text-xs">123 closed, <span class="font-weight-bold">15 open</span></span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="ni ni-box-2 text-white opacity-10"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                                        <span class="text-xs">1 is active, <span class="font-weight-bold">40 closed</span></span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="ni ni-satisfied text-white opacity-10"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Happy users</h6>
                                        <span class="text-xs font-weight-bold">+ 430</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Argon Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0 overflow-auto">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="d-flex my-3">
                <h6 class="mb-0">Navbar Fixed</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <div class="mt-2 mb-5 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                </div>
            </div>
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>


@endsection

