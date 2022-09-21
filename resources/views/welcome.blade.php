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
                    <span class="sub-title" style="font-size: 2rem; font-weight: 700;">ABOUT US</span>
                    <!-- <h2>What Will You Get From Our Dedicated Company</h2> -->
                    <p>As a dignified education and travel consultancy, our utmost priority is to make your travelling to the UK and other countries hassle-free.</p>
                    <p>For this reason, our team of dedicated experts will hold you by the hand and guide you in every way so that your admission and travel plans are safely taken care of.</p>
                        <a href="/about-us" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
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
                <h3><a href="/service/uk_study_program/post_graduate">PostGraduate Program</a></h3>
                <p>Enrol for your Masters, PhD or Postdoctoral programme in the quickest way possible with our
                    guidance.</p>
                <a href="/service/uk_study_program/post_graduate" class="link-btn">Learn More</a>
            </div>

            <div class="single-services-item">
                <div class="icon">
                    <i class="ri-money-dollar-box-line"></i>
                </div>
                <h3><a href="/service/uk_study_program/under_graduate">UnderGraduate Program</a></h3>
                <p>Start your higher academic journey with our professional recommendation. We will guide you to
                    choose the best university for your desired programme.</p>
                <a href="/service/uk_study_program/under_graduatee" class="link-btn">Learn More</a>
            </div>

            <div class="single-services-item">
                <div class="icon">
                    <i class="ri-money-dollar-box-line"></i>
                </div>
                <h3><a href="/service/uk_global_talent_program">UK Global Talent Program</a></h3>
                <p>Live and work as a professional in the United Kingdom. If you qualify for the Global Talent Visa, 
                    you will earn better because your service is so much relevant to the UK economy.</p>
                <a href="/service/uk_global_talent_program" class="link-btn">Learn More</a>
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
            <form action="/request_quote" method="post">
                @csrf
                @includeIf('layouts.error_template')
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Your Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Services</label>
                            <select class="form-select" name="service" required>
                                <option>-- Select Service --</option>
                                <option value="Under Graduate">Under Graduate</option>
                                <option value="Post Graduate">Post Graduate</option>
                                <option value="UK Global Talent Program">UK Global Talent Program</option>
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

<!-- Start Team Area -->
<!-- <div class="team-area pt-100 pb-70">
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
</div> -->
<!-- End Team Area -->

<!-- Start Why Choose Us Area -->
<div class="why-choose-us-area pt-100 pb-70 bg-fbf9f7">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">REASON OF CHOICE</span>
            <h2>Why You Should Work With Us</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-why-choose-us-box">
                    <div class="icon">
                        <i class="ri-rocket-line"></i>
                    </div>
                    <h3>Consistency</h3>
                    <p>So far, our brand has recorded 99% success rate which means your dream will also become a 
                        reality very soon if you decide to take a step with us.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-why-choose-us-box">
                    <div class="icon">
                        <i class="ri-settings-5-line"></i>
                    </div>
                    <h3>Easy To Understand</h3>
                    <p>Our process is not complicated. We carefully listen to your expectations and work out what's best for you.</p></div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-why-choose-us-box">
                    <div class="icon">
                        <i class="ri-briefcase-line"></i>
                    </div>
                    <h3>Professional</h3>
                    <p>At Ivav Travel, we are meticulous with our service and we constantly work towards a swift delivery.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-why-choose-us-box">
                    <div class="icon">
                        <i class="ri-bar-chart-box-line"></i>
                    </div>
                    <h3>Reliable</h3>
                    <p>Our clients trust us and the reason is simple: we meet and exceed their expectations and that's why they recommend us to their friends and family members.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us Area -->

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
                            <p>Thanks to Ivavtravel for making our UK family relocation a successful. The services were more than just professional. Ivavtravel is that travel consultant that goes over and beyond to make client comfortable.</p>
                            <div class="info">
                                <h3>The Thompsons</h3>
                                <!-- <span>CEO, Switch Color Ltd.</span> -->
                            </div>
                        </div>
                        <div class="testimonial-desc">
                            <p>Ivavtravel was exceptional. We were initially scared due to many fraudulent companies out there but it can only be Ivavtravel. Outstanding delivery. Our family now resides in the UK.</p>
                            <div class="info">
                                <h3>The Tugbiyeles</h3>
                                <!-- <span>[Position]</span> -->
                            </div>
                        </div>
                        <div class="testimonial-desc">
                            <p>Ivavtravel was God’s sent. I will give 100 STARSSSSS. We faced many challenges but Ivavtravel ensured our Uk family relocation yielded positively. They are the best and I recommend anytime.</p>
                            <div class="info">
                                <h3>Deborah Falodun</h3>
                                <!-- <span>[Position]</span> -->
                            </div>
                        </div>
                        <div class="testimonial-desc">
                            <p>Ivavtravel was like home, very welcoming and highly concerned. They made my Uk Study a reality. Even after I got my UK study visa, they assisted with my ticket and entire settling upon arrival. Thanks Ivavtravel.</p>
                            <div class="info">
                                <h3>Opeyemi</h3>
                                <!-- <span>[Position]</span> -->
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