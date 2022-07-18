    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html"
                target="_blank">
                <img src="{{ asset('dashboard') }}/assets/img/logo1.png" class="navbar-brand-img h-100"
                    alt="main_logo">
            </a>
        </div>

        <hr class="horizontal dark mt-0">

        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                {{-- <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Hasil Survey </h6>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="{{ url('admin') }}">
                        <i class="fas fa-chart-pie"></i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('hasilClustering') ? 'active' : '' }}"
                        href="{{ url('hasilClustering') }}">
                        <i class="fas fa-table"></i>
                        <span class="nav-link-text ms-1">Hasil Clustering<br> Kemiskinan</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class=" nav-link {{ request()->is('pertanyaan/index') ? ' active' : '' }}"
                        href="
                    {{ url('pertanyaan/index') }}">
                        <i class="fas fa-question-circle"></i>
                        <span class="nav-link-text ms-1">Pertanyaan Survey</span>

                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link{{ request()->is('status/index') ? ' active' : '' }}"
                        href="{{ url('status/index') }}">

                        <span class="nav-link-text ms-1">Status</span>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('penduduk/index') ? ' active' : '' }}"
                        href="{{ url('penduduk/index') }}">
                        <i class="fas fa-users"></i>
                        <span class="nav-link-text ms-1">Data Penduduk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('hasilSurvey/index') ? ' active' : '' }} "
                        href="{{ url('hasilSurvey/index') }}">
                        <i class="fas fa-check-double"></i>
                        <span class="nav-link-text ms-1">Hasil Survey</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('pengguna/index') ? ' active' : '' }} "
                        href="{{ url('pengguna/index') }}">
                        <i class="fas fa-users-cog"></i>
                        <span class="nav-link-text ms-1">Manage User</span>
                    </a>
                </li>


            </ul>
        </div>

    </aside>
