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
                    <span class="sub-title" style="font-size: 2rem; font-weight: 700;">ABOUT US</span>
                    <!-- <h2>One of the Fastest Way to Gain Success</h2> -->
                    <p>As a dignified education and travel consultancy, our utmost priority is to make your travelling to the UK and other countries hassle-free.</p>
                    <p>For this reason, our team of dedicated experts will hold you by the hand and guide you in every way so that your admission and travel plans are safely taken care of.</p>
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
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="single-about-box">
                                <div class="icon">
                                    <i class="ri-settings-2-line"></i>
                                </div>
                                <h3>Integrity</h3>
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
<div class="what-we-do-area pb-100 bg-fbf9f7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="what-we-do-text" style="margin-top: 2rem;">
                    <span class="sub-title" style="font-size: 2rem; font-weight: 700;">OUR PROCESS</span>
                    <!-- <h2>Information is the Main Point to Success</h2> -->
                    <p>When you partner with us, it's really easy for you to set your ball rolling and become a student in 
                        your dream university. Here's how to achieve that in no time</p>
                    <ul class="features-list" style="list-style-type: none;">
                        <li style="margin-bottom: 1.5rem">
                            <h3>Tell Us Your Needs</h3>
                            <p>Simply fill our consultation form and schedule a time with us.
                            One of our experts will have a personal discussion with you to understand your needs and outline what specific steps to take.</p>    
                        </li>
                        <li style="margin-bottom: 1.5rem">
                            <h3>Complete Your Application</h3>
                            <p>Starting and submitting an application could be daunting. Our team will assist you to make it less 
                                stressful. All you need to do is just sit back and watch your offers roll in.</p>    
                        </li>
                        <li style="margin-bottom: 1.5rem">
                            <h3>Apply for Visa</h3>
                            <p>Admission is not enough, applying and securing a Visa guarantees travelling abroad. Anyway, 
                                we won't back out but assist you all the way.</p>    
                        </li>
                        <li style="margin-bottom: 1.5rem">
                            <h3>Complete Your Travel Plans</h3>
                            <p>Our team will help you with the secured and affordable flight tickets booking and make your stay 
                            comfortable by arranging for the best accommodation.</p>
                        </li>
                        <li style="margin-bottom: 1.5rem">
                            <h3>Earn While You Study</h3>
                            <p>If you choose to make some money while you study, we won't hesitate to connect you to 
                                different job opportunities.</p>    
                        </li>
                    </ul>
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