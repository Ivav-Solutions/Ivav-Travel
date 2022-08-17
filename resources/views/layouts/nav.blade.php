<!-- Start Navbar Area -->
<div class="navbar-area navbar-style-three">
            <div class="enry-responsive-nav">
                <div class="container">
                    <div class="enry-responsive-menu">
                        <div class="logo">
                            <a href="/"><img src="{{URL::asset('assets/img/ivavtravel_logo.png')}}" width="50px" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enry-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/"><img src="{{URL::asset('assets/img/ivavtravel_logo.png')}}" alt="logo"></a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="/" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a</li>
                                <li class="nav-item"><a href="/about-us" class="nav-link {{ (request()->is('about-us')) ? 'active' : '' }}">About Us</a></li>
                                <li class="nav-item"><a href="/faq" class="nav-link {{ (request()->is('faq')) ? 'active' : '' }}">Faq</a></li>
                                <li class="nav-item"><a href="#" class="dropdown-toggle nav-link {{ (request()->is('service*')) ? 'active' : '' }}">Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="dropdown-toggle nav-link {{ (request()->is('service/uk_study_program*')) ? 'active' : '' }}">UK Study Program</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="/service/uk_study_program/under_graduate" class="nav-link {{ (request()->is('service/uk_study_program/under_graduate')) ? 'active' : '' }}">Under Graduate</a></li>
        
                                                <li class="nav-item"><a href="/service/uk_study_program/post_graduate" class="nav-link {{ (request()->is('service/uk_study_program/post_graduate')) ? 'active' : '' }}">Post Graduate</a></li>
                                            </ul>
                                        </li>
                                            <li class="nav-item"><a href="/service/uk_global_talent_program" class="nav-link {{ (request()->is('service/uk_global_talent_program')) ? 'active' : '' }}">UK Global Talent Program</a></li>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="https://blog.ivavtravel.com/" class="nav-link {{ (request()->is('')) ? 'active' : '' }}">Blog</a></li>
                                <li class="nav-item"><a href="/contact" class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a></li>
                            </ul>

                            <div class="others-option">
                                <div class="dropdown language-switcher">
                                    <button class="btn btn-secondary d-flex align-items-center dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{URL::asset('assets/img/flag/us.jpg')}}" alt="image">
                                        <span>Eng <i class="ri-arrow-down-s-line"></i></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="{{URL::asset('assets/img/flag/germany.jpg')}}" alt="flag">
                                                <span>Ger</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="{{URL::asset('assets/img/flag/france.jpg')}}" alt="flag">
                                                <span>Fre</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="{{URL::asset('assets/img/flag/spain.jpg')}}" alt="flag">
                                                <span>Spa</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="{{URL::asset('assets/img/flag/russia.jpg')}}" alt="flag">
                                                <span>Rus</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item d-flex align-items-center">
                                                <img src="{{URL::asset('assets/img/flag/italy.jpg')}}" alt="flag">
                                                <span>Ita</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="search-icon">
                                    <a href="/book_consultation" style="color: #fff; padding-right: 30px !important; background-color: #0000ff;" class="default-btn {{ (request()->is('book_consultation')) ? 'active' : '' }}">Book Consultation</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->