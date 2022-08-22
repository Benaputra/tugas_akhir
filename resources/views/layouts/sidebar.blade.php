<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i
                data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/default.png"
            alt="">
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
            @if (auth()->check())
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
            @else
            <h6 class="mt-3 f-14 f-w-600">Blank</h6>
            @endif
        </a>
        <p class="mb-0 font-roboto">Super Admin</p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Akademik </h6>
                        </div>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title " href="javascript:void(0)"><i
                                data-feather="home"></i><span>Dashboard</span></a>
                        <ul class="nav-submenu menu-content active">
                            <li><a href="index.html">Default</a></li>
                            <li><a href="dashboard-02.html">Ecommerce</a></li>
                        </ul>
                    </li>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
