<!--**********************************
				Nav header start
			***********************************-->
<div class="nav-header" style="background: #000;">
    <a href="#" class="brand-logo">
        <img src="{{URL::asset('assets/img/ivavtravel_logo.png')}}" width="80px" alt="logo">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
				Nav header end
			***********************************-->


<!--**********************************
				Header start
			***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <div class="header-info">
                                <span>Super {{Auth::user()->name}}</span>
                                <!-- <small>Super Admin</small> -->
                            </div>
                            <i class="fa fa-caret-down ml-3 mr-2 " aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route('admin.profile')}}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ml-2">Profile </span>
                            </a>
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ml-2">Logout </span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item lenguage-btn">
                        <select class="form-control btn-head default-select mr-3">
                            <option>EN</option>
                            <option>SP</option>
                            <option>GER</option>
                            <option>FREN</option>
                        </select>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
				Header end ti-comment-alt
			***********************************-->