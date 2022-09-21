@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Service', 'subtitle' => 'PostGraduate'])
@endsection

@section('page-content')
<!-- Start Services Details Area -->
<div class="services-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="services-details-desc">
                    <h3>UK PostGraduate Program</h3>
                    <p>After your undergraduate degree, you can apply to a suitable university in the UK for your postgraduate degree programme. 
                        You can apply for a Masters degree or a PhD programme. </p>
                    <p>In the United Kingdom, a Masters programme doesn't exceed two years. That is, it can be completed in just a year or a maximum of two years and this usually depends on the course you're studying. </p>
                    <p>This in particular is unlike what's obtainable in other countries. Getting admitted into a Masters programme in the UK already affords of when exactly you will complete your studies. </p>
                    <img src="{{URL::asset('assets/img/services/services3.jpg')}}" alt="image">
                    <p>A Masters programme in the UK will help you:</p>
                    <ul>
                        <li>Gain multicultural exposure and become internationally relevant.</li>
                        <li>Learn from world-class tutors</li>
                        <li>Set the right foundation and pace for your after-school life.</li>
                        <li>Acquire not only theoretical knowledge but practical approaches to solving real world problems. </li>
                        <li>Become internationally sort after by gaining a full time employment in any industry relevant to your discipline. </li>
                    </ul>
                    <h3>Types of Masters degree</h3>
                    <p>Basically, there are two types of Masters degree in the UK. </p>
                    <ol>
                        <li>Taught Masters</li>
                        <li>Research Masters</li>
                    </ol>

                    <h3>Taught Masters</h3>
                    <p>As a taught master's student, you are required to participate in lectures, seminars and you will also be graded through examinations, dissertation or project. </p>
                    <p>This category also has four main types and each of them lasts between 1 year to 2 years full-time. The types include: </p>
                    <ul>
                        <li>Master of Arts (MA)</li>
                        <li>Master of Science (MSc)</li>
                        <li>Master of Business Administration (MBA) Master of Engineering (MEng).</li>
                    </ul>

                    <h3>Research Masters</h3>
                    <p>As a research student, you will write a thesis and have an academic assigned to supervise your work. Also, you will control your work and schedule.</p>
                    <p>Usually, a research degree is a PhD programme and it can last between 3 to 4 years. In addition, a research student's thesis is expected to consist of 60,000 to 100,000 words. After submission, you will have to orally defend your work in front of a panel.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">

                    <div class="widget widget_service_categories">
                        <h3 class="widget-title">Service Category</h3>

                        <ul>
                            <li><a href="/service/uk_global_talent_program">UK Global Talent Program<i class="ri-arrow-right-s-line"></i></a></li>
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