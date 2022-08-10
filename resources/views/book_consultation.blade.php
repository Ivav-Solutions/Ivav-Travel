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
                                    <option>-- Select Marital Status --</option>
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
                                <label>Services</label>
                                <select class="form-select" name="service" required>
                                    <option>-- Select Service --</option>
                                    <option value="Under Graduate">Under Graduate</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your CV</label>
                                <input type="file" class="form-control" name="cv" required>
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
                                    <option>-- Select Marital Status --</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Service</label>
                                <input type="text" class="form-control" name="service" value="UK Global Talent Program" readonly>
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