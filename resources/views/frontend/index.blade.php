@extends('frontend.layouts.app')

@section('title', 'Home')
@section('header_img')
<img class="header-img homeBanner" src="{{ asset('frontend/images/header-image.png') }}" alt="">
@endsection
@section('hero')
<!-- hero-section -->
<section class="hero">
    <div class="hero-content">
        <h1>Stylish curtains and blinds at honest and affordable prices</h1>
        <p>in the comfort of your home</p>
        <div class="hero-cta d-flex justify-content-start">
            <button class="primary-btn me-3" data-bs-toggle="modal" data-bs-target="#BookHomeModal">Book
                your appointment</button>
            <!-- <button class="primary-btn" data-bs-toggle="modal" data-bs-target="#BookHomeModal">Book for
                Office</button> -->
        </div>
    </div>
</section>
@endsection
@section('content')
 
<div class="modal fade" id="BookHomeModal" tabindex="-1" aria-labelledby="BookHomeModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content d-flex flex-row justify-content-start align-items-center">
        <img src="images/pop-upleft.png" class="img-fluid me-2" style="max-width: 280px;" alt="">
        <div class="modal-body">
            <h2 class="NewKansas-medium mb-3 d-block">Request a Call</h2>
            <div class="mb-3">
                <input type="text" class="form-control" id="NameInput" placeholder="Enter Name" required>
            </div>
            <div class="mb-3">

                <input type="email" class="form-control" id="EmailInput" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="AddressInput" placeholder="Enter Address"
                    required>
            </div>
            <button type="submit" class="primary-btn">Submit</button>
        </div>
    </div>
</div>
</div>

<section class="request_call wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-6 content">
            <h4>Request an in-house consultation with our experts:</h4>
            <p>Just scan the QR code and let the experts get to work. Be prepared for a hassle free
                expirience to window dressing. Please do check the PIN code to confirm your area is being
                serviced</p>
        </div>

        <div class="col-md-6">
            <div class="request-form p-4">
                <div id="checkzipCode">
                    <h4 class="NewKansas-medium text-white mb-3 border-bottom pb-2">Your Info</h4>
                    <div class="mb-3">
                        <label for="ZipCodeInput" class="form-label text-white">Zip Code*</label>
                        <input type="text" class="form-control" id="ZipCodeInput" placeholder="Enter Zip Code" required>
                    </div>
                    <button type="submit" class="btn gradient-btn" onclick="toggleSections()">Submit</button>
                </div>
                
                <div id="showQR" class="d-flex justify-content-center align-items-center flex-column d-none">
                    <p class="text-white">Just scan the QR code and book an appointment.</p>
                    <div class="qrImage">
                        <img src="images/demoQR.jpeg" alt="QR Code">
                    </div>
                </div>

                <!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active NewKansas-regular" id="pills-home-tab"
                            data-bs-toggle="pill" data-bs-target="#pill-zip" type="button" role="tab"
                            aria-controls="pills-home" aria-selected="true">Your Info</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link NewKansas-regular" id="pills-profile-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-project-info" type="button"
                            role="tab" aria-controls="pills-profile" aria-selected="false">Project
                            Info</button>
                    </li>
                </ul> -->
                <!-- <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pill-zip" role="tabpanel"
                        aria-labelledby="pill-zip-tab" tabindex="0">
                        <div class="mb-3">
                            <label for="ZipCodeInput" class="form-label text-white">Zip Code*</label>
                            <input type="text" class="form-control" id="ZipCodeInput"
                                placeholder="Enter Zip Code" required>
                        </div>
                        <button type="submit" class="btn gradient-btn">Submit</button>
                    </div>
                    <div class="tab-pane fade" id="pills-project-info" role="tabpanel"
                        aria-labelledby="pills-project-info-tab" tabindex="0">
                        <form class="request-form-pill">
                            <div class="mb-3">
                                <label for="NameInput" class="form-label text-white">Name*</label>
                                <input type="text" class="form-control" id="NameInput"
                                    placeholder="Enter Zip Code" required>
                            </div>
                            <div class="mb-3">
                                <label for="EmailInput" class="form-label text-white">Email*</label>
                                <input type="email" class="form-control" id="EmailInput"
                                    placeholder="Enter Zip Code" required>
                            </div>
                            <div class="mb-3">
                                <label for="AddressInput" class="form-label text-white">Address*</label>
                                <input type="text" class="form-control" id="AddressInput"
                                    placeholder="Enter Zip Code" required>
                            </div>
                            <button type="submit" class="btn gradient-btn">Submit</button>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
</section>

<!-- product-showcase -->
<section class="showcase-product wrapper">
<div class="container">
    <h2 class="NewKansas-medium text-center mb-4">Now choosing and ordering curtains and blinds from <br>the
        comfort of your home or office is easy.</h2>
    <div class="product-collection">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active NewKansas-regular" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-curtains"
                    aria-selected="true">Curtains</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link NewKansas-regular" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-blinds"
                    aria-selected="false">Blinds</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link NewKansas-regular" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-stylise"
                    aria-selected="false">Stylise</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link NewKansas-regular" id="pills-disabled-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-hardware"
                    aria-selected="false">Hardware</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row" style="margin-top: 42px;">
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/pro-1.png" alt="">
                            <div class="card-body p-4">
                                <h4>We spoil you for choice</h4>
                                <p class="m-0 text-color">Plenty of options with over 800 SKUs, yet
                                    clutter-free. A perfect fusion of physical and digital experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/pro-2.png" alt="">
                            <div class="card-body p-4">
                                <h4>Find your perfect match</h4>
                                <p class="m-0 text-color">Make informed choices and experience the products
                                    firsthand. Match the fabrics to real surroundings- So no guess work</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/pro-3.png" alt="">
                            <div class="card-body p-4">
                                <h4>Affordable and budget friendly</h4>
                                <p class="m-0 text-color">At CAB we ensure that you get Honest pricing. No
                                    haggling, No material wastage. Only the original, Receive the final
                                    product as selected.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row" style="margin-top: 42px;">
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/blinds1.jpg" alt="">
                            <div class="card-body p-4">
                                <!-- <h4>Blockout Curtains</h4> -->
                                <p class="m-0 text-color">We offer the perfect blinds to complement the
                                    bohemian style of your décor. Pair them with our sheer blinds that
                                    beautifully enhance your main curtains for a cohesive, stylish look.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/blinds2.jpg" alt="">
                            <div class="card-body p-4">
                                <!-- <h4>Sheer Curtains</h4> -->
                                <p class="m-0 text-color">No space to install blinds outside? Don’t worry,
                                    we’ve got you covered with solutions tailored to fit your space
                                    perfectly. Not only that, we can add the borders to add to the drama</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/blinds3.jpg" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Why settle for boring. Enjoy playing around with
                                    prints and jaquards and add to the flovour. Match it or contrast it with
                                    your curtains for that designer look</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="row" style="margin-top: 42px;">
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/Stylise1.jpg" alt="">
                            <div class="card-body p-4">
                                <!-- <h4>Blockout Curtains</h4> -->
                                <p class="m-0 text-color">Why settle for boring? Our design team ensures you
                                    stay up-to-date with the latest trends and styles, offering the perfect
                                    blend of physical and digital presentations to bring your vision to
                                    life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/Stylise2.jpg" alt="">
                            <div class="card-body p-4">
                                <!-- <h4>Blockout Curtains</h4> -->
                                <p class="m-0 text-color">At Curtains and Blinds, we offer a variety of
                                    value-added options such as borders and embroideries to elevate your
                                    design and seamlessly coordinate with your existing art and décor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/Stylise3.jpg" alt="">
                            <div class="card-body p-4">
                                <!-- <h4>Blockout Curtains</h4> -->
                                <p class="m-0 text-color">Perfection lies in the details, and at Curtains
                                    and Blinds, we get it right the first time. Our expert consultants will
                                    visit your space and help you style your windows with the perfect
                                    selection of textures and colors, adding that extra touch with valuable
                                    enhancements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel"
                aria-labelledby="pills-disabled-tab" tabindex="0">
                <div class="row" style="margin-top: 42px;">
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/handware1.png" alt="">
                            <div class="card-body p-4">
                                <!-- <h4>Blockout Curtains</h4> -->
                                <p class="m-0 text-color">No coves? No problem! We have the perfect solution
                                    for you. Our flat tracks are smart, trendy, and available in a variety
                                    of colors to complement your décor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/handware2.png" alt="">
                            <div class="card-body p-4">
                                <!-- <h4>Blockout Curtains</h4> -->
                                <p class="m-0 text-color">Why settle for boring and outdated? Our sleek
                                    round channels come in a variety of exciting colors to enhance your
                                    décor and add a modern touch.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="images/pro-3.png" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- order-process -->
<section class="order-process container wrapper">
<h2 class="NewKansas-medium text-center">How to order</h2>
<p class="m-auto text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio architecto quia
    beatae dolores in quis corporis? Aperiam, magni delectu</p>
<div class="row mt-4 p-4">
    <div class="col-md-6">
        <div class="accordion" id="customAccordionExample">
            <div class="accordion-item custom-accordion-item mb-3 border-0 border-bottom active">
                <h2 class="accordion-header">
                    <button class="accordion-button custom-accordion-button active-header" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <span class="pointer NewKansas-medium"
                            style="line-height: normal !important;">1</span>
                        Scan the QR code and fill in the request form. On receiving the call fix an
                        appointment for our consultant visit.
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show"
                    data-bs-parent="#customAccordionExample">
                    <div class="accordion-body">
                        <p>It is simple. Just scan the QR code or fill up the form. Some one from CAB team
                            will connect with you to fix the appointment. Once done we will send you the
                            visiting person details in advance to ensure safety and security.
                            There would be a small non-refundable consultation charge of Rs 750 which can be
                            adjusted against the order placed.
                        </p>
                        <!-- <a href="#" class="btn primary-btn">Shop samples</a> -->
                    </div>
                </div>
            </div>
            <div class="accordion-item custom-accordion-item mb-3 border-0 border-bottom">
                <h2 class="accordion-header">
                    <button class="accordion-button custom-accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <span class="pointer NewKansas-medium">2</span>Choose the material and the hardware
                        in the comfort of your home.
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse"
                    data-bs-parent="#customAccordionExample">
                    <div class="accordion-body">
                        We will get the CAB selection Box along with all the other information to your
                        doorstep. Browse through the entire collection in your own sweet time. Play around
                        with various permutations and combinations till you get your perfect match.
                    </div>
                </div>
            </div>
            <div class="accordion-item custom-accordion-item mb-3 border-0 border-bottom">
                <h2 class="accordion-header">
                    <button class="accordion-button custom-accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        <span class="pointer NewKansas-medium">3</span>Make the payment through our safe and
                        reliable payment gateway.
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#customAccordionExample">
                    <div class="accordion-body">
                        You can choose to pay with debit or credit cards of all major banks, UPI or net
                        banking.
                    </div>
                </div>
            </div>
            <div class="accordion-item custom-accordion-item mb-3 border-0 border-bottom">
                <h2 class="accordion-header">
                    <button class="accordion-button custom-accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour">
                        <span class="pointer NewKansas-medium">4</span>Sit back, relax and wait for the
                        magic to happen
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse"
                    data-bs-parent="#customAccordionExample">
                    <div class="accordion-body">
                        Enjoy hassle free installation as per the dates provided.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
        <img src="images/HOW1.png" class="img-fluid accordionSideImage" style="max-width: 100%;" alt="">
    </div>
</div>
</section>

<!-- <section class="services wrapper">
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-5">
            <h2 class="NewKansas-medium">A Legacy of 30 years</h2>
            <div class="services-tab">
                <a class="NewKansas-regular active" href="#">Living Room</a>
                <a class="NewKansas-regular" href="#">Bedroom</a>
                <a class="NewKansas-regular" href="#">Office</a>
            </div>
        </div>
        <div class="col-md-7">
            <div class="service-carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="card product-card">
                        <img src="images/livingRoom1.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Blockout Curtains</h4>
                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                window blinds for your home. Our experienc...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card">
                        <img src="images/livingRoom2.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Blockout Curtains</h4>
                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                window blinds for your home. Our experienc...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card product-card">
                        <img src="images/livingRoom1.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Blockout Curtains</h4>
                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                window blinds for your home. Our experienc...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> -->


<!-- <section class="services wrapper">
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-5">
            <h2 class="NewKansas-medium">A Legacy of 30 years</h2>
            <div class="services-tab">
                <a class="NewKansas-regular active" href="#" data-target="livingRoom">Living Room</a>
                <a class="NewKansas-regular" href="#" data-target="bedroom">Bedroom</a>
                <a class="NewKansas-regular" href="#" data-target="office">Office</a>
            </div>
        </div>
        <div class="col-md-7">
            <div class="service-carousel owl-carousel owl-theme">
                
                <div class="item livingRoom">
                    <div class="card product-card">
                        <img src="images/livingRoom1.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Blockout Curtains</h4>
                            <p class="m-0 text-color">Stylish window blinds for your living room...</p>
                        </div>
                    </div>
                </div>
                <div class="item livingRoom">
                    <div class="card product-card">
                        <img src="images/livingRoom1.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Blockout Curtains</h4>
                            <p class="m-0 text-color">Stylish window blinds for your living room...</p>
                        </div>
                    </div>
                </div>
                <div class="item livingRoom">
                    <div class="card product-card">
                        <img src="images/livingRoom1.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Blockout Curtains</h4>
                            <p class="m-0 text-color">Stylish window blinds for your living room...</p>
                        </div>
                    </div>
                </div>

                
                <div class="item bedroom d-none">
                    <div class="card product-card">
                        <img src="images/blinds1.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Comfortable Bedding</h4>
                            <p class="m-0 text-color">Relax with our premium bedding options...</p>
                        </div>
                    </div>
                </div>
                <div class="item bedroom d-none">
                    <div class="card product-card">
                        <img src="images/blinds1.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Comfortable Bedding</h4>
                            <p class="m-0 text-color">Relax with our premium bedding options...</p>
                        </div>
                    </div>
                </div>
                <div class="item bedroom d-none">
                    <div class="card product-card">
                        <img src="images/blinds1.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Comfortable Bedding</h4>
                            <p class="m-0 text-color">Relax with our premium bedding options...</p>
                        </div>
                    </div>
                </div>
                <div class="item bedroom d-none">
                    <div class="card product-card">
                        <img src="images/blinds1.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Comfortable Bedding</h4>
                            <p class="m-0 text-color">Relax with our premium bedding options...</p>
                        </div>
                    </div>
                </div>

                
                <div class="item office d-none">
                    <div class="card product-card">
                        <img src="images/blinds2.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Office Blinds</h4>
                            <p class="m-0 text-color">Modern blinds for a productive workspace...</p>
                        </div>
                    </div>
                </div>
                <div class="item office d-none">
                    <div class="card product-card">
                        <img src="images/blinds2.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Office Blinds</h4>
                            <p class="m-0 text-color">Modern blinds for a productive workspace...</p>
                        </div>
                    </div>
                </div>
                <div class="item office d-none">
                    <div class="card product-card">
                        <img src="images/blinds2.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Office Blinds</h4>
                            <p class="m-0 text-color">Modern blinds for a productive workspace...</p>
                        </div>
                    </div>
                </div>
                <div class="item office d-none">
                    <div class="card product-card">
                        <img src="images/blinds2.jpg" alt="">
                        <div class="card-body p-4">
                            <h4>Office Blinds</h4>
                            <p class="m-0 text-color">Modern blinds for a productive workspace...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> -->



<section class="services wrapper">
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-5">
            <h2 class="NewKansas-medium">A Legacy of 30 years</h2>
            <div class="services-tab">
                <a class="NewKansas-regular active" href="#" data-target="livingRoom">Living Room</a>
                <a class="NewKansas-regular" href="#" data-target="bedroom">Bedroom</a>
                <a class="NewKansas-regular" href="#" data-target="office">Office</a>
            </div>
        </div>
        <div class="col-md-7">
            <div class="service-carousel owl-carousel owl-theme">
                <!-- Carousel items will be dynamically inserted here -->
            </div>
        </div>
    </div>
</div>
</section>

<!-- testimonial-section -->
<section class="testimonial wrapper">
<div class="container">
    <h2 class="NewKansas-medium text-center text-white">What do our customers say</h2>
    <p class="text-center text-white mb-4">We can keep the same style and have many testimonials </p>
    <div class="testimonial-carousel owl-carousel owl-theme">
        <div class="item">
            <div class="card testimonial-card">
                <h4>These guys are well priced</h4>
                <p>"Best experience EVER! From the quote to the installation! These guys are well priced,
                    have
                    great staff and installers, and are fast and efficient!"</p>
                <div class="user-info d-flex justify-content-start align-items-center">
                    <img src="images/user.png" alt="user" class="img-fluid me-3" style="max-width: 62px;">
                    <div>
                        <p class="NewKansas-medium m-0">John Doe</p>
                        <p class="m-0"><i class="bi bi-geo-alt"></i> Delhi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- our story section -->
<srction class="ourstory">
<div class="container wrapper">
    <div class="row">
        <div class="col-md-6">
            <img src="images/storyLeftImg.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 d-flex justify-content-start align-items-center">
            <div class="card storycard">
                <h4>Our story</h4>
                <!-- <h2>We know window furnishings</h2> -->
                <p>Curtains and Blinds (CAB) is your one-stop destination for all your trendy home
                    furnishing needs. We believe in making home decor simple and hassle-free, offering a
                    wide range of stylish curtains, blinds, and furnishing solutions—all from the comfort of
                    your own home.</p>
                <p>Tired of the confusion and clutter that come with choosing the perfect decor? At CAB, we
                    take the guesswork out of the process. Our expert team curates the latest designs to
                    match your style and taste, ensuring that every solution is tailored just for you.
                    Whether you prefer minimalist elegance, bold patterns, or something in between, we’ve
                    got you covered.</p>
                <a href="#" class="primary-btn">About Us</a>
            </div>
        </div>
    </div>
</div>
</srction>

<!-- DIY section -->
<!-- <section class="wrapper diyProducts">
<div class="container">
    <h2 class="NewKansas-medium text-center mb-4">DIY Curtains, Blinds and Shutters</h2>
    <div class="product-collection">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active NewKansas-regular" id="pills-measure-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-measure" type="button" role="tab"
                    aria-controls="pills-curtains" aria-selected="true">Measure</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link NewKansas-regular" id="pills-install-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-install" type="button" role="tab" aria-controls="pills-blinds"
                    aria-selected="false">Install</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link NewKansas-regular" id="pills-inspiration-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-inspiration" type="button" role="tab"
                    aria-controls="pills-stylise" aria-selected="false">Inspiration</button>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-measure" role="tabpanel"
                aria-labelledby="pills-measure-tab" tabindex="0">
                <div class="row" style="margin-top: 42px;">
                    <div class="col-md-4">
                        <div class="card product-card bg-color">
                            <img src="images/pro-1.png" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card bg-color">
                            <img src="images/blinds.png" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card bg-color">
                            <img src="images/pro-3.png" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-install" role="tabpanel"
                aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row" style="margin-top: 42px;">
                    <div class="col-md-4">
                        <div class="card product-card bg-color">
                            <img src="images/pro-1.png" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card bg-color">
                            <img src="images/shutters.png" alt="">
                            <div class="card-body p-4">
                                <h4>Sheer Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card bg-color">
                            <img src="images/pro-3.png" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-inspiration" role="tabpanel"
                aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="row" style="margin-top: 42px;">
                    <div class="col-md-4">
                        <div class="card product-card bg-color">
                            <img src="images/pro-1.png" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card bg-color">
                            <img src="images/pro-2.png" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card product-card bg-color">
                            <img src="images/pro-3.png" alt="">
                            <div class="card-body p-4">
                                <h4>Blockout Curtains</h4>
                                <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                    window blinds for your home. Our experienc...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> -->

<!-- FAQ -->

<section class="faq wrapper">
<div class="container">
    <h2 class="NewKansas-medium text-center mb-4">CAB FAQ</h2>
    <p class="text-center">Frequently Asked Questions</p>
    <div class="w-75 m-auto">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        How long will it take for my order to arrive?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        Typically from the date of order confirmation we need 15 days to fabricate and
                        install your curtains and blinds.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        What is your returns policy?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Since all our products are custom made-to-measure, we do not accept returns.
                        However, if for any reason your order does not meet your expectations, we will work
                        with you to resolve the issue. For more details, please refer to our full returns
                        and warranty policy on our 'Terms & Conditions' page.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Do you ship curtains and blinds and hardware separately?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Ideally we ship your complete order in one go. This helps us in keeping our costings
                        in check and helps our installation team to complete the job in a more efficient
                        manner. You will receive tracking information for each consignment as soon as it
                        leaves our factory. As always, feel free to contact us if you’d like an update on
                        your order delivery status.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapse4">
                        What do you charge for delivery?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        We believe in sharing is caring. As a gesture of goodwill and our client first
                        policy we have shared the cost of shipping and charge only ———— per kg against ————-
                        as regular price
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapse5">
                        What payment options do you offer?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Payments can be done through a number of existing payment gateways using credit or
                        debit cards, net banking or UPI options.
                        Please discuss this in detail with our channel partner or contact us for any other
                        information.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapse6">
                        Can I track my order progress and delivery?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Yes, you can. You will be receiving real time information about the progress of your
                        order. Saperate messages will be sent about order confirmation and dispatch details.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapse7">
                        Should the curtains always be lined?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Yes. It is very important to line the main curtains to ensure proper fall and life
                        of the curtains. Lining a curtain saves the main fabric from heat and sun protecting
                        it from fading. Also it helps the filtration of light during the day time. The
                        designs are better formed and the colours are sharper from the inside. From the
                        outside the look from the multiple room windows is uniformed and neat
                        Sheers are never to be lined.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapse8">
                        What is the type of lining that I should use?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        There are 2 types of lining that we offer.
                        polyester- cotton lining : A fine quality durable preshrunk fabric in off white
                        colour that ensures proper fall and protection to the main curtain.
                        Dim out curtains: To be used in bed rooms , home theater or any other such areas
                        where the outside light filteration needs to be controlled. Our dim out lining is
                        easily maintainable and of high grade and the ideal weight.

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center"><button class="primary-btn mt-3">See All FAQ’s</button></div>
</div>
</section>
@endsection