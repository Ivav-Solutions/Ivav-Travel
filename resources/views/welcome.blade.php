@extends('layouts.frontend')

@section('nav')
    @includeIf('layouts.nav')
@endsection

@section('banner')
    @includeIf('layouts.banner')
@endsection

@section('page-content')
    <!-- Start About Area -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image bg-image">
                        <img src="assets/img/about/about1.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <span class="sub-title">ABOUT US</span>
                        <h2>What Will You Get From Our Dedicated Company</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmo tempor invidunt ut labore et dolore magna aliquyam erat, sed diammi maxil voluptua. At ve ro eos et accusam et justo duo dolores et ea rebum.</p>
                        <ul class="features-list">
                            <li>
                                <div class="number">01</div>
                                <h3>Consistency</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra mpor invidunt ut labore et dolore magna aliquyam erat.</p>
                            </li>
                            <li>
                                <div class="number">02</div>
                                <h3>Strategy</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra mpor invidunt ut labore et dolore magna aliquyam erat.</p>
                            </li>
                        </ul>
                        <a href="/about" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Services Area -->
    <div class="services-area ptb-100 bg-fbf9f7">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">SERVICES</span>
                <h2>Our Services At a Glance</h2>
            </div>

            
            <div class="services-slides-two owl-carousel owl-theme">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="ri-briefcase-line"></i>
                    </div>
                    <h3><a href="#">Post Graduate Program</a></h3>
                    <p>Lorem ipsum dolor sit amet, consetet elitr, sed diam nonumy eiod temp labore et dolore magna.</p>
                    <a href="#" class="link-btn">Read More</a>
                </div>

                <div class="single-services-item">
                    <div class="icon">
                        <i class="ri-money-dollar-box-line"></i>
                    </div>
                    <h3><a href="#">Under Graduate Prgram</a></h3>
                    <p>Lorem ipsum dolor sit amet, consetet elitr, sed diam nonumy eiod temp labore et dolore magna.</p>
                    <a href="#" class="link-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Free Quote Area -->
    <div class="free-quote-area pb-100 bg-fbf9f7">
        <div class="container">
            <div class="free-quote-inner">
                <div class="section-title">
                    <span class="sub-title">FREE QUOTE</span>
                    <h2>Searching For An Expert Consultant From Us?</h2>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Services</label>
                                <select class="form-select">
                                    <option selected>Graduate</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <button type="submit" class="default-btn">Request A Quote <i class="ri-arrow-right-line"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Free Quote Area -->

    <!-- Start What We Do Area -->
    <div class="what-we-do-area pb-100 bg-fbf9f7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="what-we-do-text">
                        <span class="sub-title">SEE WHAT WE DO</span>
                        <h2>Information is the Main Point to Success</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diammi maxil voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clitaiai to ankasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Adasta na lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ant extra eirmod tempor invidunt ut labore et dolore magna.</p>
                        <a href="/contact" class="default-btn">Contact Us <i class="ri-arrow-right-line"></i></a>
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

    <!-- Start Why Choose Us Area -->
    <div class="why-choose-us-area pt-100 pb-70 bg-fbf9f7">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">REASON OF CHOICE</span>
                <h2>Why You Choose Us From All Of The Other's</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-why-choose-us-box">
                        <div class="icon">
                            <i class="ri-rocket-line"></i>
                        </div>
                        <h3>Consistency</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur elitr, sed diam nonumy eirmod. To the great and best.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-why-choose-us-box">
                        <div class="icon">
                            <i class="ri-settings-5-line"></i>
                        </div>
                        <h3>Easy Understand</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur elitr, sed diam nonumy eirmod. To the great and best.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-why-choose-us-box">
                        <div class="icon">
                            <i class="ri-briefcase-line"></i>
                        </div>
                        <h3>Professional</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur elitr, sed diam nonumy eirmod. To the great and best.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-why-choose-us-box">
                        <div class="icon">
                            <i class="ri-bar-chart-box-line"></i>
                        </div>
                        <h3>Reliable</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur elitr, sed diam nonumy eirmod. To the great and best.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->

    <!-- Start Call Back Request Area -->
    <!-- <div class="call-back-request-area ptb-100 bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="call-back-request-img">
                        <img src="assets/img/call-back-request2.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="call-back-request-text">
                        <span class="sub-title">CALL BACK REQUEST</span>
                        <h2>Help You Reach Your Dreams and Goal</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy a eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At verorh eos et accusam at vero eos et accusam.</p>
                        
                        <a href="/contact" class="default-btn">Request A Call <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Call Back Request Area -->

    <!-- Start Testimonial Area -->
    <div class="testimonial-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="testimonial-content">
                        <span class="sub-title text-center">TESTIMONIAL</span>
                        <h2>Lets Meet Our Clients</h2>
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

    <!-- Start Blog Area -->
    <!-- <div class="blog-area ptb-100 bg-fbf9f7">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">OUR BLOGS</span>
                <h2>Our Blogs</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
            </div>

            <!-- <div class="blog-slides owl-carousel owl-theme">
                <div class="single-blog-item">
                    <div class="post-image">
                        <a href="blog-details.html" class="d-block">
                            <img src="assets/img/blog/blog1.jpg" alt="image">
                        </a>
                    </div>
                    <div class="post-content">
                        <ul class="meta">
                            <li><i class="ri-calendar-2-line"></i> Jan 22, 2021</li>
                            <li><i class="ri-user-voice-line"></i> <a href="blog-grid.html">Lords Evans</a></li>
                        </ul>
                        <h3><a href="blog-details.html">The Secret of Your Business Success Find Quickly</a></h3>
                        <p>Lorem ipsum dolor sit amet, conseteturants atal into sadipscing elitr, sed diam nonumy eirmod nsa ada tempor invidunt ut.</p>
                        <a href="blog-details.html" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

                <div class="single-blog-item">
                    <div class="post-image">
                        <a href="blog-details.html" class="d-block">
                            <img src="assets/img/blog/blog2.jpg" alt="image">
                        </a>
                    </div>
                    <div class="post-content">
                        <ul class="meta">
                            <li><i class="ri-calendar-2-line"></i> Jan 20, 2021</li>
                            <li><i class="ri-user-voice-line"></i> <a href="blog-grid.html">Sarah Taylor</a></li>
                        </ul>
                        <h3><a href="blog-details.html">Consulting is a Good and Best Into Our Company</a></h3>
                        <p>Lorem ipsum dolor sit amet, conseteturants atal into sadipscing elitr, sed diam nonumy eirmod nsa ada tempor invidunt ut.</p>
                        <a href="blog-details.html" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

                <div class="single-blog-item">
                    <div class="post-image">
                        <a href="blog-details.html" class="d-block">
                            <img src="assets/img/blog/blog3.jpg" alt="image">
                        </a>
                    </div>
                    <div class="post-content">
                        <ul class="meta">
                            <li><i class="ri-calendar-2-line"></i> Jan 18, 2021</li>
                            <li><i class="ri-user-voice-line"></i> <a href="blog-grid.html">James Andy</a></li>
                        </ul>
                        <h3><a href="blog-details.html">Business Has Become a Good in the Global World</a></h3>
                        <p>Lorem ipsum dolor sit amet, conseteturants atal into sadipscing elitr, sed diam nonumy eirmod nsa ada tempor invidunt ut.</p>
                        <a href="blog-details.html" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

                <div class="single-blog-item">
                    <div class="post-image">
                        <a href="blog-details.html" class="d-block">
                            <img src="assets/img/blog/blog4.jpg" alt="image">
                        </a>
                    </div>
                    <div class="post-content">
                        <ul class="meta">
                            <li><i class="ri-calendar-2-line"></i> Jan 16, 2021</li>
                            <li><i class="ri-user-voice-line"></i> <a href="blog-grid.html">James Andy</a></li>
                        </ul>
                        <h3><a href="blog-details.html">Business Has Become a Good in the Global World</a></h3>
                        <p>Lorem ipsum dolor sit amet, conseteturants atal into sadipscing elitr, sed diam nonumy eirmod nsa ada tempor invidunt ut.</p>
                        <a href="blog-details.html" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div> -->
    <!-- End Blog Area -->
@endsection