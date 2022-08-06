<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="{{route('dashboard')}}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-calendar"></i>
                    <span class="nav-text">Consulations</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.undergraduate')}}">Under Graduate</a></li>
                    <li><a href="{{route('admin.postgraduate')}}">Post Graduate</a></li>
                    <li><a href="{{route('admin.uk_global_talent_program')}}">UK Global Talent Program</a></li>
                </ul>
            </li>
            <li><a class="ai-icon" href="{{route('admin.transactions')}}" aria-expanded="false">
                    <i class="flaticon-381-view-2"></i>
                    <span class="nav-text">Transactions</span>
                </a>
            </li>
            <li><a class="ai-icon" href="{{route('admin.profile')}}" aria-expanded="false">
                    <i class="flaticon-381-user-7"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>
            <li><a class="ai-icon" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-expanded="false">
                    <i class="flaticon-381-turn-off"></i>
                    <span class="nav-text">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>