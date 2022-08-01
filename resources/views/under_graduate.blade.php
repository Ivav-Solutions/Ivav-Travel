@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Services', 'subtitle' => 'Under Graduate'])
@endsection

@section('page-content')
<!-- Start Services Details Area -->
<div class="services-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="services-details-desc">
                    <h3>Discuss About The Service</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam <a href="#">voluptuased</a> diam voluptua.</p>
                    <img src="{{URL::asset('assets/img/services/services3.jpg')}}" alt="image">
                    <ul>
                        <li>a console</li>
                        <li>Two Joy-Con controllers that are detachable</li>
                        <li>A grip that enables you to combine them into a single gamepad for play on the TV</li>
                        <li>Two straps for turning the Joy-Cons into controllers</li>
                        <li>A dock which you can use to connect your console to the television for traditional gameplay</li>
                    </ul>
                    <h3>Consultation</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
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