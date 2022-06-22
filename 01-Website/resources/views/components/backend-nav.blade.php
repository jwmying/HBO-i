<div>
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="{{ route('admin.dashboard.index') }}" class="logo">
                <span>
                    <img src="{{ asset('front-end/img/logos/logoHBO-i.svg') }}" alt="logo-small" class="logo-sm-new">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Information</li>
                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="home" class="align-self-center menu-icon"></i>
                        <span>Dashboard</span>
                            <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                                <i class="ti-control-record"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                                <i class="ti-control-record"></i>
                                Profiel
                            </a>
                        </li>
                    </ul>
                </li>

                <hr class="hr-dashed hr-menu">

                <li class="menu-label my-2">Webpagina's</li>
                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="home" class="align-self-center menu-icon"></i>
                        <span>Domeinbeschrijving</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.domain.description.index') }}">
                                <i class="ti-control-record"></i>
                                Lijst
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.domain.description.create') }}">
                                <i class="ti-control-record"></i>
                                Toevoegen
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="archive" class="align-self-center menu-icon"></i>
                        <span>Nieuwsartikelen</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.news.index') }}">
                                <i class="ti-control-record"></i>
                                Lijst
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.news.create') }}">
                                <i class="ti-control-record"></i>
                                Toevoegen
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="calendar" class="align-self-center menu-icon"></i>
                        <span>Agenda items</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.agenda.index') }}">
                                <i class="ti-control-record"></i>
                                Lijst
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.agenda.create') }}">
                                <i class="ti-control-record"></i>
                                Toevoegen
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="users" class="align-self-center menu-icon"></i>
                        <span>Leden</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.members.index') }}">
                                <i class="ti-control-record"></i>
                                Lijst
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.members.create') }}">
                                <i class="ti-control-record"></i>
                                Toevoegen
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- end left-sidenav-->
</div>
