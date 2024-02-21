@extends('layouts.home.app')
@section('title')
Contact Us
@endsection
@section('head')

@endsection
@section('content')

<?php
define('page_url', 'https://www.softication.com/contact.php');
define('page_title', 'Customer Support : Web design Support, IT Support');
define('page_name', 'Contact Us');
define('page_keyword', 'Contact Us, Customer Support, Web design Support, IT Support, Hosting Support, Domain buy support, cloud support, Business Development assistance, Raise your Tickets');
define('page_description', 'SoftiCation Technology always there for your IT support such as Web development, hosting, how to buy domain, cloud service and many more.');
$page = "contact";
?>

<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title"><?= page_title; ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><?= page_name; ?></li>
            </ul>
        </div>
    </div>
</section>


<section class="contact-details">
    <div class="container ">
        <div class="row">
            <div class="col-xl-5 col-lg-6 mb-md-60">
                <div class="contact-details__right">
                    <div class="sec-title">
                        <span class="sub-title">Need any help?</span>
                        <h2>Get in touch with us</h2>
                        <div class="text">Embark on a digital journey with SoftiCation – where innovation meets excellence, and your business growth becomes our priority.</div>
                    </div>
                    <ul class="list-unstyled contact-details__info">
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-phone-plus"></span>
                            </div>
                            <div class="text">
                                <h6>Have any question?</h6>
                                <a href="tel:+917404664714"><span>Free</span> +91-7404664714</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-envelope1"></span>
                            </div>
                            <div class="text">
                                <h6>Write email</h6>
                                <a href="#"><span class="__cf_email__">sales@softication.com</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>
                            <div class="text">
                                <h6>Visit anytime</h6>
                                <span>3rd Foloor, Office no. 301, Building no. 57, vijay block, Laxminagar, Delhi-110092
                                    <br>Near Jain School Uniform, Metro pillar no. 51-52, Laxminagar, (Delhi NCR) India.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">

                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=rd%20Foloor,%20Office%20no.%20301,%20Building%20no.%2057,%20vijay%20block%20Laxminagar,%20Delhi-110092%20Near%20Jain%20School%20Uniform,%20Metro%20pillar%20no.%2051-52+(SoftiCation%20Technology%20)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" class="video-play-icon h6 text-primary" name="Softiation Technology : Website development Agency in India" width="100%" height="550" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>


<section class="team-contact-form">
    <div class="container pb-100">
        <div class="sec-title text-center">
            <span class="sub-title">Contact With Us Now</span>
            <h2 class="section-title__title">Feel Free to Write Our <br> Tecnology Experts</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <form id="contact_form" name="contact_form" class action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <div class="mb-3">
                                <input name="form_name" class="form-control required" type="text" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <div class="mb-3">
                                <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <div class="mb-3">
                                <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <div class="mb-3">
                                <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 form-group">
                        <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <input name="form_botcheck" class="form-control" type="hidden" value />
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send
                                message</span></button>
                        <button type="reset" class="theme-btn btn-style-one"><span class="btn-title">Reset</span></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


@endsection
@section('js')

@endsection
