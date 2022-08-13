@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Consultation', 'subtitle' => 'Book Consulation'])
@endsection

@section('page-content')
<!-- Start Free Quote Area -->
<div class="free-quote-area ptb-100">
    <div class="container">
        <div class="free-quote-inner">
            <div class="section-title">
                <h2>An Expert Consultant From Us</h2>
                <div class="login-sec">
                    <ul class="sign-control">
                        <li data-tab="tab-1" class="current"><a href="#" title="">UK Study Program</a></li>
                        <li data-tab="tab-2"><a href="#" title="">UK Global Talent Program</a></li>
                    </ul>
                </div>
            </div>
            <div class="sign_in_sec current" id="tab-1">
                <form action="/uk_study_program" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            @includeIf('layouts.error_template')
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input id="phone" name="phone_number" class="form-control" type="tel" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Marital Status</label>
                                <select class="form-select" name="marital_status" required>
                                    <option value="">-- Select Marital Status --</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Sex</label>
                                <select class="form-select" name="sex" required>
                                    <option value="">-- Select Sex --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Services</label>
                                <select class="form-select" name="service" required>
                                    <option value="">-- Select Service --</option>
                                    <option value="Under Graduate">Under Graduate</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Do you Have Dependent?</label>
                                <div style="margin-top: 1rem">
                                    <input type="radio" id="e1" name="are_you_dependent" required onchange="show2()" value="Yes"><span style="color: #fff; margin-left: 5px; margin-right: 1rem;">Yes</span>
                                    <input type="radio" name="are_you_dependent" required onchange="show(this.value)" value="No" checked><span style="color: #fff; margin-left: 5px">No</span>
                                </div>
                            </div>
                        </div>
                        <div id="display_box" style="display: none;" class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>How many dependents are you travelling with?</label>
                                <input type="number" class="form-control" name="number_of_dependence">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Do you have any city of choice?</label>
                                <div style="margin-top: 1rem">
                                    <input type="radio" id="e1" name="any_city_of_choice" required onchange="display2()" value="Yes"><span style="color: #fff; margin-left: 5px; margin-right: 1rem;">Yes</span>
                                    <input type="radio" name="any_city_of_choice" required onchange="display(this.value)" value="No" checked><span style="color: #fff; margin-left: 5px">No</span>
                                </div>
                            </div>
                        </div>
                        <div id="city" style="display: none;" class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Enter the city of your choice</label>
                                <input type="text" class="form-control" name="city_of_your_choice">
                                <p>maximum of three cities</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Do you have any course Preference?</label>
                                <div style="margin-top: 1rem">
                                    <input type="radio" id="e1" name="any_course_of_reference" required onchange="course2()" value="Yes"><span style="color: #fff; margin-left: 5px; margin-right: 1rem;">Yes</span>
                                    <input type="radio" name="any_course_of_reference" required onchange="course(this.value)" value="No" checked><span style="color: #fff; margin-left: 5px">No</span>
                                </div>
                            </div>
                        </div>
                        <div id="reference" style="display: none;" class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Enter the course of Preference</label>
                                <input type="text" class="form-control" name="course_of_reference">
                                <p>maximum of three courses</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Your Documents</label>
                                <input type="file" class="form-control" name="documents[]" required multiple>
                                <p>Bachelor of Science/Higher National Diploma, Ordinary National Diploma(If Applicable), Marriage Certificate (If Applicable),
                                    Change of Name (If Applicable), International Passport, Academic Reference Letter, Work Reference Letter, Statement of Purpose,
                                    Academic Transcript </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <button type="submit" class="default-btn">Submit<i class="ri-arrow-right-line"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sign_in_sec" id="tab-2">
                <form action="/uk_global_talent_program" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            @includeIf('layouts.error_template')
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input id="phone_number" name="phone_number" class="form-control" type="tel" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Marital Status</label>
                                <select class="form-select" name="marital_status" required>
                                    <option value="">-- Select Marital Status --</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Sex</label>
                                <select class="form-select" name="sex" required>
                                    <option value="">-- Select Sex --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Services</label>
                                <select class="form-select" name="service" required>
                                    <option>-- Select Service --</option>
                                    <option value="UK Global Talent Program (Science)">Science</option>
                                    <option value="UK Global Talent Program (Medicine)">Medicine</option>
                                    <option value="UK Global Talent Program (Engineering)">Engineering</option>
                                    <option value="UK Global Talent Program (Humanities)">Humanities</option>
                                    <option value="UK Global Talent Program (Combined Arts)">Combined Arts</option>
                                    <option value="UK Global Talent Program (Dance)">Dance</option>
                                    <option value="UK Global Talent Program (Literature)">Literature</option>
                                    <option value="UK Global Talent Program (Music)">Music</option>
                                    <option value="UK Global Talent Program (Theatre)">Theatre</option>
                                    <option value="UK Global Talent Program (Visual Arts)">Visual Arts</option>
                                    <option value="UK Global Talent Program (Architecture)">Architecture</option>
                                    <option value="UK Global Talent Program (Fashion Design)">Fashion Design</option>
                                    <option value="UK Global Talent Program (Film and Television)">Film and Television</option>
                                    <option value="UK Global Talent Program (Digital Technology)">Digital Technology</option>
                                    <option value="UK Global Talent Program (Others)">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Do you Have Dependent?</label>
                                <div style="margin-top: 1rem">
                                    <input type="radio" id="e1" name="are_you_dependent" required onchange="show3()" value="Yes"><span style="color: #fff; margin-left: 5px; margin-right: 1rem;">Yes</span>
                                    <input type="radio" name="are_you_dependent" required onchange="show1(this.value)" value="No" checked><span style="color: #fff; margin-left: 5px">No</span>
                                </div>
                            </div>
                        </div>
                        <div id="show_box" style="display: none;" class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>How many dependents are you travelling with?</label>
                                <input type="number" class="form-control" name="number_of_dependence">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Time</label>
                                <input type="time" class="form-control" name="time" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p style="color:#fff"><span style="color: red">Note:</span> This service requires a charge fee of One Hundred Thousand (#100,000)</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <button type="submit" class="default-btn">Proceed To Payment<i class="ri-arrow-right-line"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Free Quote Area -->
@endsection