@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Services', 'subtitle' => 'UK Global Talent Program'])
@endsection

@section('page-content')
<!-- Start Services Details Area -->
<div class="services-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="services-details-desc">
                    <h3>UK Wants You</h3>
                    <p>In February 2020, the government of the United Kingdom effected a new programme called Global Talent Visa and it's aimed at attracting talents into UK. </p>
                    <p>Although they are quite similar in nature, the Global Talent Visa replaced Tier 1 (Exceptional Talent) Visa because of its simplicity. </p>
                    <img src="{{URL::asset('assets/img/services/services3.jpg')}}" alt="image">
                    <p>To qualify for Global Talent Visa, you must be an exceptional talent or a promising talent in any of the careers listed below: </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>1. Academia or Research</p>
                                <ul>
                                    <li>Science</li>
                                    <li>Medicine</li>
                                    <li>Engineering</li>
                                    <li>Humanities</li>
                                </ul>
                        </div>
                        <div class="col-lg-6">
                            <p>2. Arts and Culture</p>
                                <ul>
                                    <li>Combined Arts</li>
                                    <li>Dance</li>
                                    <li>Literature</li>
                                    <li>Music</li>
                                    <li>Theatre</li>
                                    <li>Visual Arts</li>
                                </ul>
                        </div>
                        <div class="col-lg-6">
                            <p>3. Architecture</p>
                        </div>
                        <div class="col-lg-6">
                            <p>4. Fashion Design</p>
                        </div>
                        <div class="col-lg-6">
                            <p>5. Film and Television</p>
                        </div>
                        <div class="col-lg-6">
                            <p>6. Digital Technology</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">

                    <div class="widget widget_service_categories">
                        <h3 class="widget-title">Service Category</h3>

                        <ul>
                            <li><a href="/service/uk_study_program/post_graduate">Post Graduate<i class="ri-arrow-right-s-line"></i></a></li>
                            <li><a href="/service/uk_study_program/under_graduate">Under Graduate<i class="ri-arrow-right-s-line"></i></a></li>
                        </ul>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Services Details Area -->
@endsection