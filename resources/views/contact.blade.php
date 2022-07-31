@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Contact Us', 'subtitle' => 'Contact'])
@endsection

@section('page-content')

<!-- Start Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="row align-items-center pb-100">
            <div class="col-lg-6 col-md-12">
                <div class="contact-content">
                    <span class="sub-title">CONTACT US</span>
                    <h2>Contact Us With Your Details & Ready To Start</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class="ri-home-7-line"></i>
                                </div>
                                <h3>Main Office</h3>
                                <p>[address]</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <h3>Our Phone</h3>
                                <p><span>Call:</span><a href="">[phone_1]</a></p>
                                <p><span>Call:</span><a href="">[phone_2]</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class="ri-mail-star-line"></i>
                                </div>
                                <h3>Email Address</h3>
                                <p><span>Email:</span><a href=""><span class="__cf_email__" data-cfemail="97fff2fbfbf8d7f2f9e5eeb9f4f8fa">[email&#160;protected]</span></a></p>
                                <p><span>Email:</span><a href=""><span class="__cf_email__" data-cfemail="8ae3e4ece5caefe4f8f3a4e9e5e7">[email&#160;protected]</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="contact-image">
                    <img src="assets/img/contact.png" alt="image">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63432.563649946!2d3.3867207636747154!3d6.453655393484504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4cc9b07cf55%3A0xc4ae10b395418b9b!2sLagos%20Island!5e0!3m2!1sen!2sng!4v1658957281495!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <span class="sub-title">SEND MESSAGE</span>
                    <h2>Lets Provide Us a Message & Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolo lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy liquyam erat, sed diam voluptua.</p>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Full Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Email Address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Mobile no">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Subject" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="default-btn">Send Message <i class="ri-arrow-right-line"></i></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->
@endsection