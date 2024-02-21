@extends('layouts.home.app')
@section('title')
Website Design
@endsection
@section('head')

@endsection
@section('content')

<?php
define('page_url', 'https://www.softication.com/website-design.php');
define('page_title', 'Web Design & Development Agency in India');
define('page_name', 'Website Development');
define('page_keyword', 'Website Development Companies in India, Best E-Commerce Development, PHP, Node, react, based Website Development, Web agency near by me ');
define('page_description', 'We are web Development Agency - Looking for best hardcode E-Commerce, Dynamic Websites in India, Call now +91-7404664714.');
$page = "Website Development Agency";
?>

<section class="page-title" style="background-image: url(images/background/15.png);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title"><?= page_title; ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><?= page_name; ?></li>
            </ul>
        </div>
    </div>
</section>

<section class="services-details">
    <div class="container">
        <div class="row">

            <div class="col-xl-4 col-lg-4">
                <div class="service-sidebar">
                    <div class="service-details-help" style="background-color: #1d1854; margin-bottom:10px;">
                        <div class="inner-column">

                            <div class="contact-form style-two wow fadeInLeft">
                                <form id="contact_form" name="contact_form" class action="#" method="post">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <div class>
                                                <input name="form_name" class="form-control required" type="text" placeholder="Enter Name" style="background-color: #f8f9fa;">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <div class>
                                                <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" style="background-color: #f8f9fa;">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 form-group">
                                            <div class>
                                                <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone" style="background-color: #f8f9fa;">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <div class>
                                                <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject" style="background-color: #f8f9fa;">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message" style="background-color: #f8f9fa;"></textarea>
                                        </div>
                                        <div class>
                                            <input name="form_botcheck" class="form-control" type="hidden" value />
                                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..." style="background-color:black;"><span class="btn-title">Send
                                                    message</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="sidebar-widget service-sidebar-single">
                        <div class="sidebar-service-list">
                            <ul>
                                <li><a href="page-service-details.html" class="current"><i class="fas fa-angle-right"></i><span>Digital Agency</span></a></li>
                                <li class="current"><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>Web designing</span></a></li>
                                <li><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>Web development</span></a></li>
                                <li><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>Web application</span></a></li>
                                <li><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>Digital Marketing</span></a>
                                </li>
                                <li><a href="page-service-details.html"><i class="fas fa-angle-right"></i><span>App Development</span></a></li>
                            </ul>
                        </div>
                        <div class="service-details-help">
                            <div class="help-shape-1"></div>
                            <div class="help-shape-2"></div>
                            <h2 class="help-title">Contact with <br> us for any <br> advice</h2>
                            <div class="help-icon">
                                <span class=" lnr-icon-phone-handset"></span>
                            </div>
                            <div class="help-contact">
                                <p>Need help? Talk to an expert</p>
                                <a href="tel:+917404664714">+91-7404664714</a>
                            </div>
                        </div>

                        <div class="sidebar-widget service-sidebar-single mt-4">
                            <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1200m">
                                <a href="#" class="theme-btn btn-style-one d-grid"><span class="btn-title"><span class="fas fa-file-pdf"></span> download pdf file</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-8 col-lg-8">
                <div class="services-details__content">
                    <img src="images/resource/29.png" alt />
                    <h3 class="mt-4">Welcome to SoftiCation Technology - Your UI/UX Design Partner</h3>
                    <p>SoftiCation Technology is your trusted partner for exceptional UI/UX design services that elevate your digital experiences to new heights. With a team of skilled designers and strategists, we specialize in creating intuitive, engaging, and visually stunning interfaces that delight users and drive results. Explore our UI/UX design services to learn how we can help you create memorable experiences for your audience:</p>
                    <p>We cater to clients across various industries, including finance, healthcare, e-commerce, education, travel, resturant, real state, NGO, Suppliment and many more.
                        Our team understands the unique requirements and challenges of different sectors, allowing us to create tailored solutions that meet industry-specific needs. </p>
                    <div class="content mt-40">
                        <div class="text">
                            <h3>Our UI/UX Design Services</h3>
                            <p>Empower your business with a stunning, high-performing website that leaves a lasting impression.
                                Contact us today to discuss your website development needs, and let's bring your digital vision to life.</p>
                            <blockquote class="blockquote-one">Website Design is the first impression of your company and speaks volumes about your work, not just in terms of the information
                                that it carries but more importantly through the experience it gives to website visitors.
                                While getting a website designed & developed, you need a partner with an industry specific approach and creative zeal.</blockquote>
                        </div>
                        <div class="feature-list mt-4">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <img class="mb-3" src="images/resource/30.png" alt="Custom Web Design & Development company in India" title="Responsive & Mobile-Optimized Design Agency in Delhi" />
                                    <h5>User Research and Analysis</h5>
                                    <p>We start by understanding your target audience, their needs, preferences, and behaviors. Through user research, surveys, and interviews,
                                        we gather valuable insights that inform our design decisions and help us create user-centric solutions that resonate with your audience.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <img class="mb-3" src="images/resource/31.png" alt="Responsive Web Design & Develop company in India" title="Responsive & Mobile-Optimized Design Agency in Delhi" />
                                    <h5>Wireframing and Prototyping</h5>
                                    <p>Once we have a clear understanding of your users and their goals, we begin the design process by creating wireframes and prototypes.
                                        These low-fidelity representations of your interface allow us to test and iterate on design concepts quickly, ensuring optimal usability and functionality.</p>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <img class="mb-3" src="images/resource/32.png" alt="Content Management Systems company in India" title="Responsive & Mobile-Optimized Design Agency in Delhi" />
                                    <h5>User Interface (UI) Design</h5>
                                    <p>Our team of talented designers brings your wireframes to life with beautiful and intuitive user interfaces.
                                        We focus on creating visually appealing designs that reflect your brand identity and provide a seamless and enjoyable experience for your users across all devices and screen sizes.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <img class="mb-3" src="images/resource/33.png" alt="WWebsite Maintenance and Support company in India" title="Responsive & Mobile-Optimized Design Agency in Delhi" />
                                    <h5>User Experience (UX) Design</h5>
                                    <p>In addition to stunning visuals, we prioritize usability and user experience in our designs. We create clear navigation paths, intuitive interactions, and engaging microinteractions that guide users through your interface and encourage them to take desired actions, whether it's making a purchase, signing up for a newsletter, or completing a form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="about-section">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">Get to Know</span>
                        <h2>Our Great Features</h2>
                        <div class="text">
                            <p class="text-muted">At SoftiCation Technology, we believe in creative & innovative web pages design that don't just look good but also deliver exceptional performance, functionality, and user experience.
                                Our team of expert designers and developers specializes in creating websites that stand out in the digital landscape. Here are some of the greatest features that set us apart:<br>Partner with SoftiCation Technology and harness the power of exceptional UI/UX design to elevate your digital presence. Contact us today to discuss your project requirements and let's create unforgettable experiences for your audience together.

                            </p>
                        </div>
                    </div>
                    <ul class="list-style-two">
                        <li><i class="fa fa-check-circle"></i> Innovative Design Concepts</li>
                        <li><i class="fa fa-check-circle"></i> SEO-Optimized Architecture</li>
                        <li><i class="fa fa-check-circle"></i> Responsive & Mobile-Optimized Design</li>
                        <li><i class="fa fa-check-circle"></i> Web & E-commerce Expertise
                        </li>
                        <li><i class="fa fa-check-circle"></i> Scalability and Flexibility</li>
                    </ul>
                    <div class="btn-box">
                        <a href="tel:+92(8800)9806" class="info-btn">
                            <i class="icon fa fa-phone"></i>
                            <small>Call Anytime</small> +91-7404664714
                        </a>
                        <a href="contact.html" class="theme-btn btn-style-one"><span class="btn-title">Explore now</span></a>
                    </div>
                </div>
            </div>

            <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                    <figure class="image-1 overlay-anim wow fadeInUp"><img src="images/resource/34.png" alt="Web design & Develop company in India" title="Responsive & Mobile-Optimized Design Agency in Delhi"></figure>
                    <figure class="image-2 overlay-anim wow fadeInRight" title="Responsive & Mobile-Optimized Design Agency in Delhi"><img src="images/resource/35.png" alt="Web design & Develop company in India" title="Responsive & Mobile-Optimized Design Agency in Delhi"></figure>
                    <div class="experience bounce-y">
                        <div class="inner">
                            <i class="icon flaticon-discuss"></i>
                            <div class="text"><strong>6+</strong> Years of <br>experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="process-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">Work Process</span>
            <h2>3 easy working steps</h2>
            <p>We provide customized solutions to build a user centric digital environment with enhanced operational and data efficiency by using Data Analytics, AI, Cloud and business process strategies. Adopting digital marketing stategies built by us based on smart insights, our clients are able to cultivate attention where it matters.

            </p>
        </div>
        <div class="row">

            <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="count">01</span>
                        <i class="icon flaticon-concept"></i>
                    </div>
                    <h6 class="title">Design concept Planning</h6>
                    <div class="text">We're always at your side in your planning phase. This is where we help you set up goals.</div>
                </div>
            </div>

            <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="count">02</span>
                        <i class="icon flaticon-programmer"></i>
                    </div>
                    <h6 class="title">Strategy of Web development</h6>
                    <div class="text">We make a customized plan for you according to your goals in business.</div>
                </div>
            </div>

            <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="count">03</span>
                        <i class="icon flaticon-access"></i>
                    </div>
                    <h6 class="title">Launch website</h6>
                    <div class="text">We start developing/implementing your plan.</div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-details">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-12">

                <div class=" mt-25">
                    <h3>Frequently Asked Question</h3>
                    <p>SoftiCation Technology is your trusted partner for exceptional UI/UX design services that elevate your digital experiences to new heights. With a team of skilled designers and strategists, we specialize in creating intuitive, engaging, and visually stunning interfaces that delight users and drive results.
                        Explore our greatest features and frequently asked questions (FAQs) to learn how we can help you create memorable experiences for your audience:</p>
                    <ul class="accordion-box wow fadeInRight">

                        <li class="accordion block">
                            <div class="acc-btn">What is the difference between UI and UX design?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">UI (User Interface) design focuses on the visual aspects of a digital product, including layout, typography, color scheme, and interactive elements. UX (User Experience) design, on the other hand, deals with the overall user experience, including usability, accessibility, and interaction flow. While UI and UX are closely related, they serve different purposes and require distinct skill sets.</div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block active-block">
                            <div class="acc-btn active">How long does the UI/UX design process take?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">The timeline for the UI/UX design process varies depending on the scope and complexity of the project, as well as client feedback and revisions. On average, the design phase can take anywhere from a few weeks to a few months. We work closely with our clients to establish realistic timelines and milestones and keep them informed throughout the process.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Do you provide prototypes or wireframes before finalizing the design?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, we provide prototypes and wireframes as part of our design process. These low-fidelity representations of the final product allow us to test and validate design concepts, gather feedback, and make adjustments before finalizing the design. Prototypes and wireframes help ensure that the final product meets your expectations and user needs.</div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">Can you redesign an existing website or app?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, we offer redesign services for existing websites, apps, and digital products. Whether you're looking to refresh your brand identity, improve usability, or enhance the overall user experience, we can help you transform your digital presence with a fresh and modern design.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">How do you ensure that your designs are accessible to all users?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Accessibility is a key consideration in our design process. We follow best practices and guidelines for web accessibility (WCAG) to ensure that our designs are inclusive and accessible to users of all abilities. We design with accessibility in mind, incorporating features such as keyboard navigation, alternative text for images, and color contrast ratios to make our designs usable by everyone.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>

@endsection
@section('js')

@endsection
