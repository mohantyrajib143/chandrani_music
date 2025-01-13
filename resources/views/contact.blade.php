@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg1">
        <div class="container">
            <div class="page-title-content">
                <h1 title="Contact Us">Contact Us</h1>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-info">
                        <span class="sub-title">Contact Details</span>
                        <h2>Get in Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>

                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <h3>Our Address</h3>
                                <p>2750 Quadra Street Victoria Road, New York, Canada</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-24-hours"></i>
                                </div>
                                <h3>Contact</h3>
                                <p>Mobile: <a href="tel:+44457895789">(+44) - 45789 - 5789</a></p>
                                <p>Mail: <a href="/cdn-cgi/l/email-protection#7c14191010133c061910181d521f1311"><span class="__cf_email__" data-cfemail="9df5f8f1f1f2dde7f8f1f9fcb3fef2f0">[email&#160;protected]</span></a></p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-network"></i>
                                </div>
                                <h3>Social</h3>
                                <div class="social-box">
                                    <a href="#" target="_blank"><i class="bx bxl-twitch"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-youtube"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" target="_blank"><i class="bx bxl-vimeo"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <h2>Ready to Get Started?</h2>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" required data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your phone number" placeholder="Your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection
