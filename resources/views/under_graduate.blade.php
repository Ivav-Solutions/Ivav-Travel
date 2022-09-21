@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Services', 'subtitle' => 'UnderGraduate'])
@endsection

@section('page-content')
<!-- Start Services Details Area -->
<div class="services-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="services-details-desc">
                    <h3>UK UnderGraduate Program</h3>
                    <p>Admissions into UK universities are managed by the  Universities and Colleges Admissions Service (UCAS). It's is a UK-based organisation whose main designation is to facilitate the application process for British universities. </p>
                    <img src="{{URL::asset('assets/img/services/services3.jpg')}}" alt="image">
                    <p>Most of the universities and other higher education colleges in the UK employ the service of UCAS to accept applications.</p> 
                    <p>So, if you're coming in as a undergraduate, you must apply through UCAS. </p>
                    <h3>Where can I study an undergraduate degree?</h3>
                    <p>There are over 130 UK universities offering undergraduate courses. 
                        Also, there are over 65,000 UK undergraduate courses. 
                        Your desired course will influence your university choice. </p>
                    <h3>Where We Come In</h3>
                    <p>Starting an undergraduate degree programme in the UK may be tedious. From application to settling down, all may seem overwhelming. But our time tested assistance will help you navigate this journey easily. </p>    
                    <a href="/book_consultation" class="default-btn">Book Consultation With Us <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">

                    <div class="widget widget_service_categories">
                        <h3 class="widget-title">Service Category</h3>

                        <ul>
                            <li><a href="/service/uk_study_program/post_graduate">Post Graduate<i class="ri-arrow-right-s-line"></i></a></li>
                            <li><a href="/service/uk_global_talent_program">UK Global Talent Program<i class="ri-arrow-right-s-line"></i></a></li>
                        </ul>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Services Details Area -->
@endsection