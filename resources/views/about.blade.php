@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'About Us', 'subtitle' => 'About'])
@endsection

@section('page-content')
<!-- Start About Area -->
<div class="about-area ptb-100">
    <div class="container">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-img">
                    <img src="assets/img/about/about2.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-text">
                    <span class="sub-title">ABOUT ALL OF US</span>
                    <h2>One of the Fastest Way to Gain Success</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diammi maxil voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clitaiai to ankasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Adasta na lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diammi maxil voluptua.</p>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="single-about-box">
                                <div class="icon">
                                    <i class="ri-star-line"></i>
                                </div>
                                <h3>Consistency</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="single-about-box">
                                <div class="icon">
                                    <i class="ri-settings-2-line"></i>
                                </div>
                                <h3>Strategy</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Start What We Do Area -->
<div class="what-we-do-area ptb-100 bg-fbf9f7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="what-we-do-text">
                    <span class="sub-title">SEE WHAT WE DO</span>
                    <h2>Information is the Main Point to Success</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diammi maxil voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clitaiai to ankasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Adasta na lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmod tempor invidunt ut labore et dolore magna.</p>
                    <a href="contact.html" class="default-btn">Contact Us <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="what-we-do-img">
                    <img src="assets/img/what-we-do/what-we-do2.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End What We Do Area -->

<!-- Start Funfacts Area -->
<div class="funfacts-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">FUN FACTS</span>
            <h2>Let's Meet Up With Our Fun Facts And Introduce To Us</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-3 col-6 col-md-3">
                <div class="funfacts-box">
                    <i class="ri-star-smile-line"></i>
                    <h3><span class="odometer" data-count="99">00</span><span class="sign">%</span></h3>
                    <p>Clients Satisfaction</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-6 col-md-3">
                <div class="funfacts-box">
                    <i class="ri-user-settings-line"></i>
                    <h3><span class="odometer" data-count="120">00</span><span class="sign"><sup>+</sup></span></h3>
                    <p>Customers</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Funfacts Area -->

<!-- Start Team Area -->
<div class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">TEAM</span>
            <h2>Meet Members of Our Exclusive Team</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <img src="https://via.placeholder.com/600x600" alt="image">
                    <div class="content">
                        <h3>[Name]</h3>
                        <span>CEO & Founder</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <img src="https://via.placeholder.com/600x600" alt="image">
                    <div class="content">
                        <h3>[Name]</h3>
                        <span>Office Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <img src="https://via.placeholder.com/600x600" alt="image">
                    <div class="content">
                        <h3>[Name]</h3>
                        <span>General Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <img src="https://via.placeholder.com/600x600" alt="image">
                    <div class="content">
                        <h3>[Name]</h3>
                        <span>PR and Consulting</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Team Area -->

<!-- Start Testimonial Area -->
<div class="testimonial-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-12">
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="testimonial-content">
                    <span class="sub-title text-center">TESTIMONIAL</span>
                    <h2>Lets Meet Up With Our All Of The Clients Says At A Glance</h2>
                    <div class="testimonial-slides owl-carousel owl-theme">
                        <div class="testimonial-desc">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmod ut labore et dolore magna aliquyam erat, sed diammi maxil voluptua. At vero eos et accusam lores et ea rebum. Stet clitaiai to ankasd gubergren, no sea takimata sanctus est Lorem ipsu adasta na. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                            <div class="info">
                                <h3>[Name]</h3>
                                <span>CEO, Switch Color Ltd.</span>
                            </div>
                        </div>
                        <div class="testimonial-desc">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmod ut labore et dolore magna aliquyam erat, sed diammi maxil voluptua. At vero eos et accusam lores et ea rebum. Stet clitaiai to ankasd gubergren, no sea takimata sanctus est Lorem ipsu adasta na. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                            <div class="info">
                                <h3>[Name]</h3>
                                <span>[Position]</span>
                            </div>
                        </div>
                        <div class="testimonial-desc">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmod ut labore et dolore magna aliquyam erat, sed diammi maxil voluptua. At vero eos et accusam lores et ea rebum. Stet clitaiai to ankasd gubergren, no sea takimata sanctus est Lorem ipsu adasta na. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                            <div class="info">
                                <h3>[Name]</h3>
                                <span>[Position]</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Area -->

@endsection