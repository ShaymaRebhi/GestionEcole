<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"  target="_blank">
            <img src="/img/School Lab (1).png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">RunTime Terror</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="{{route('home')}}" :active="request()->routeIs('home')">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span>{{ __('Dashboard') }}</span>
                    </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('categories.index') }}" :active="request()->routeIs('tables')">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                    </div>
                    <span >{{ __('Categories') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('tags.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tag text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('Tags') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('posts.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tag text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('Posts') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('clubs.clubsList') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chat-round text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Clubs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('events.eventsList') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Events</span>
                </a>
            </li>


            <li class="nav-item">
                                       <a class="nav-link " href="{{ route('cours.index') }}">
                                           <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                               <i class="ni ni-book-bookmark text-info text-sm opacity-10"></i>
                                           </div>
                                           <span class="nav-link-text ms-1">Liste des Cours</span>
                                       </a>
                        </li>
                        <li class="nav-item">
                                        <a class="nav-link " href="{{ route('module.index') }}">
                                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="ni ni-book-bookmark text-info text-sm opacity-10"></i>
                                            </div>
                                            <span class="nav-link-text ms-1">Liste des modules Modules</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                                                 <a class="nav-link " href="{{ route('classe.index') }}">
                                                                     <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                                         <i class="ni ni-book-bookmark text-info text-sm opacity-10"></i>
                                                                     </div>
                                                                     <span class="nav-link-text ms-1"> Liste des Classe</span>
                                                                 </a>
                                                             </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('FormationExterne.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Formations externes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('FormationInterne.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Formations internes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('CentreFormation.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Centre Formations</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('Etablissement.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-hospital-o text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Etablissements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('Departement.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-university text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Departements</span>
                </a>
            </li>






        </ul>
    </div>
</aside>
