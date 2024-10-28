@extends('frontend.layouts.app')

@section('title', 'Home')
@section('header_img')
<img class="header-img" src="{{ asset('frontend/images/header-image.png') }}" alt="">
@endsection
@section('hero')
<!-- hero-section -->
<section class="hero">
    <div class="hero-content">
        <h1>Stylish curtains and blinds at affordable prices </h1>
        <p>Stylise and choose your curtains and blinds in the comfort of your home / office</p>
        <div class="hero-cta d-flex justify-content-start">
            <button class="primary-btn me-3" data-bs-toggle="modal" data-bs-target="#BookHomeModal">Book for
                Home</button>
            <button class="primary-btn" data-bs-toggle="modal" data-bs-target="#BookHomeModal">Book for
                Office</button>
        </div>
    </div>
</section>
@endsection
@section('content')
        
        <!-- request a call section -->

        <!-- Book for Home Modal -->

        <div class="modal fade" id="BookHomeModal" tabindex="-1" aria-labelledby="BookHomeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content d-flex flex-row justify-content-start align-items-center">
                    <img src="{{ asset('frontend/images/pop-upleft.png') }}" class="img-fluid me-2" style="max-width: 280px;" alt="">
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
                    <div class="col-md-7 content">
                        <h4>Request a Free In-Home or Virtual* Consultation</h4>
                        <p>Provide your contact information and we'll be in touch via phone, email or text to schedule
                            your free window treatments consultation and more.</p>
                    </div>

                    <div class="col-md-5">
                        <div class="request-form p-4">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
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
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
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
                            </div>
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
                                        <img src="{{ asset('frontend/images/pro-1.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="{{ asset('frontend/images/pro-2.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="{{ asset('frontend/images/pro-3.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
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
                                        <img src="{{ asset('frontend/images/pro-1.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="{{ asset('frontend/images/pro-2.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Sheer Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="{{ asset('frontend/images/pro-3.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
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
                                        <img src="{{ asset('frontend/images/pro-1.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="{{ asset('frontend/images/pro-2.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="{{ asset('frontend/images/pro-3.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
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
                                        <img src="{{ asset('frontend/images/pro-1.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="{{ asset('frontend/images/pro-2.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card">
                                        <img src="{{ asset('frontend/images/pro-3.png') }}" alt="">
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
                <div class="col-md-5">
                    <div class="accordion" id="customAccordionExample">
                        <div class="accordion-item custom-accordion-item mb-3 border-0 border-bottom active">
                            <h2 class="accordion-header">
                                <button class="accordion-button custom-accordion-button active-header" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="pointer NewKansas-medium">1</span>Shop our samples
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#customAccordionExample">
                                <div class="accordion-body">
                                    <p>This is the first item's accordion body. It is shown by default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element.</p>
                                    <a href="#" class="btn primary-btn">Shop samples</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item custom-accordion-item mb-3 border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button custom-accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="pointer NewKansas-medium">2</span>Choose the material and style
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#customAccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item custom-accordion-item mb-3 border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button custom-accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="pointer NewKansas-medium">3</span>Choose the hardware
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#customAccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item custom-accordion-item mb-3 border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button custom-accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="pointer NewKansas-medium">3</span>Sit back and relax
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#customAccordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('frontend/images/shopSideImg.png') }}" class="img-fluid accordionSideImage" style="max-width: 525px;"
                        alt="">
                </div>
            </div>
        </section>

        <section class="services wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <h2 class="NewKansas-medium">30 Years of Style & Expert <br> Service</h2>
                        <div class="services-tab">
                            <a class="NewKansas-regular" href="#">Living Room</a>
                            <a class="NewKansas-regular" href="#">Bedroom</a>
                            <a class="NewKansas-regular" href="#">Office</a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="service-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="card product-card">
                                    <img src="{{ asset('frontend/images/pro-1.png') }}" alt="">
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
                                <img src="{{ asset('frontend/images/user.png') }}" alt="user" class="img-fluid me-3" style="max-width: 62px;">
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
        <section class="ourstory">
            <div class="container wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/images/storyLeftImg.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 d-flex justify-content-start align-items-center">
                        <div class="card storycard">
                            <h4>Our story</h4>
                            <h2>We know window furnishings</h2>
                            <p>We are dedicated to providing an enhanced customer experience with plenty of choice in
                                deciding trendy and stylish window furnishings in the comfort of your homes.</p>
                            <a href="#" class="primary-btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- DIY section -->
        <section class="wrapper diyProducts">
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
                                        <img src="{{ asset('frontend/images/pro-1.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card bg-color">
                                        <img src="{{ asset('frontend/images/blinds.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card bg-color">
                                        <img src="{{ asset('frontend/images/pro-3.png') }}" alt="">
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
                                        <img src="{{ asset('frontend/images/pro-1.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card bg-color">
                                        <img src="{{ asset('frontend/images/shutters.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Sheer Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card bg-color">
                                        <img src="{{ asset('frontend/images/pro-3.png') }}" alt="">
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
                                        <img src="{{ asset('frontend/images/pro-1.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card bg-color">
                                        <img src="{{ asset('frontend/images/pro-2.png') }}" alt="">
                                        <div class="card-body p-4">
                                            <h4>Blockout Curtains</h4>
                                            <p class="m-0 text-color">Budget Blinds is here to help you design stylish
                                                window blinds for your home. Our experienc...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card product-card bg-color">
                                        <img src="{{ asset('frontend/images/pro-3.png') }}" alt="">
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

        <!-- FAQ -->

        <section class="faq wrapper">
            <div class="container">
                <h2 class="NewKansas-medium text-center mb-4">How to order</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio architecto quia
                    beatae dolores in quis corporis? Aperiam, magni delectu</p>
                <div class="w-75 m-auto">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos numquam eos tempora
                                    veniam eaque voluptatem? At recusandae itaque, illum maiores hic deserunt culpa in
                                    provident sed ex, explicabo, officia ratione.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos numquam eos tempora
                                    veniam eaque voluptatem? At recusandae itaque, illum maiores hic deserunt culpa in
                                    provident sed ex, explicabo, officia ratione.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos numquam eos tempora
                                    veniam eaque voluptatem? At recusandae itaque, illum maiores hic deserunt culpa in
                                    provident sed ex, explicabo, officia ratione.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center"><button class="primary-btn mt-3">See All FAQ’s</button></div>
            </div>
        </section>
@endsection