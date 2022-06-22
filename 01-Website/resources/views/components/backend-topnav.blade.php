<div>
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i data-feather="bell" class="align-self-center topbar-icon"></i>
                    <span class="badge bg-danger rounded-pill noti-icon-badge">1</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                    <h6
                        class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notificaties <span class="badge bg-primary rounded-pill">1</span>
                    </h6>
                    <div class="notification-menu" data-simplebar>

                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min geleden</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="thumb-sm rounded-circle fas fa-user"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Test bericht</h6>
                                    <small class="text-muted mb-0">Blabalaba.</small>
                                </div>
                                <!--end media-body-->
                            </div>
                            <!--end media-->
                        </a>
                        <!--end-item-->

                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                       Bekijk alles <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="ms-1 nav-user-name hidden-sm">{{ Auth::user()->name}}</span>
                    <img src="{{ asset('back-end/images/users/user-5.jpg') }}" alt="profile-user" class="rounded-circle thumb-xs" />
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i data-feather="user"
                            class="align-self-center icon-xs icon-dual me-1"></i> Profiel</a>
                    <a class="dropdown-item" href="#"><i data-feather="settings"
                            class="align-self-center icon-xs icon-dual me-1"></i> Instellingen</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i data-feather="power"
                            class="align-self-center icon-xs icon-dual me-1"></i> Uitloggen</a>
                </div>
            </li>
        </ul>
        <!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile">
                    <i data-feather="menu" class="align-self-center topbar-icon"></i>
                </button>
            </li>
        </ul>
    </nav>
    
</div>
