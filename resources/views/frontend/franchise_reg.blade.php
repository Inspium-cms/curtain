@extends('frontend.layouts.app')

@section('title', 'Home')
@section('header_img')
<img class="header-img" src="{{ asset('frontend/images/franchise-bg.jpg') }}" style="width: 100% !important;" alt="">
@endsection
@section('hero')
<div class="page-title-section m-auto">
    <div class="breadcrumbs">
        <a class="text-white" href="#">Home </a>
        <i class="bi bi-arrow-right"></i>
        <a class="text-white" href="#" class="active"> Franchise</a>
    </div>
    <h1 class="text-white NewKansas-medium">Become a Partner</h1>
</div>
@endsection
@section('content')
<section class="container wrapper m-100">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h3 class="NewKansas-medium">Give Your Financial Future a Lift</h3>
            <p class="mt-4">Open a window into your future with the #1 provider of custom window coverings
                franchise in North America. Budget Blinds, established in 1992, has nearly 1,500 franchise
                territories that serve over 10,000 cities.</p>
            <p class="mt-4">We offer exclusive design-driven window coverings solutions that consumers can shop
                at home for, and provide our customers with free in-home consultations, virtual consultations,
                window measurements, and installation services.</p>
            <p class="mt-4">
                Every week, our Budget Blinds franchisees install 50,000 blinds, shades, shutters, draperies,
                and smart home solutions across the U.S. and Canada.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('frontend/images/img-8.png') }}" alt="" class="img-fluid">
        </div>
    </div>
</section>

<section class="cab-usp container bg-dark wrapper" style="border-radius: 30px; padding: 42px;">
    <div class="container">
        <h2 class="NewKansas-medium text-center text-white mb-4">3 Simple Step to Join Us</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card uspCard d-flex justify-content-center align-items-center flex-column"
                    style="height: 314px; border-radius: 20px; padding: 30px 24px; text-align: center;">
                    <img src="{{ asset('frontend/images/design.svg') }}" class="mb-4" alt="">
                    <p class="fs-small">#Step 1</p>
                    <h4>Step Title</h4>
                    <p>Budget Blinds is here to help you design stylish window blinds for your home.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card uspCard d-flex justify-content-center align-items-center flex-column"
                    style="height: 314px; border-radius: 20px; padding: 30px 24px; text-align: center;">
                    <img src="{{ asset('frontend/images/machine.svg') }}" class="mb-4" alt="">
                    <p class="fs-small">#Step 1</p>
                    <h4>Step Title</h4>
                    <p>Budget Blinds is here to help you design stylish window blinds for your home.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card uspCard d-flex justify-content-center align-items-center flex-column"
                    style="height: 314px; border-radius: 20px; padding: 30px 24px; text-align: center;">
                    <img src="{{ asset('frontend/images/material.svg') }}" class="mb-4" alt="">
                    <p class="fs-small">#Step 1</p>
                    <h4>Step Title</h4>
                    <p>Budget Blinds is here to help you design stylish window blinds for your home.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container wrapper">
    <div class="registrationSection">
        <h2 class="NewKansas-medium text-center" id="form-title1">Register with us</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('franchise_temp.store') }}" method="POST" class="mt-4" id="contact-form1" >
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company Name <span class="requried">*</span></label>
                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name<span class="requried">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID<span class="requried">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="mobile" class="form-label col-md-12">Mobile Number<span class="requried">*</span></label>
                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" pattern="^[0-9]+$" style="width:34em;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="alt_mobile" class="form-label">Alternate Number</label>
                        <input type="number" class="form-control" id="alt_mobile" name="alt_mobile" placeholder="Enter Alternate Number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="employees" class="form-label">Number of Employees<span class="requried">*</span></label>
                        <input type="number" class="form-control" id="employees" name="employees" placeholder="Enter Number of Employees">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address<span class="requried">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="pincode" class="form-label">Pincode<span class="requried">*</span></label>
                        <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="city" class="form-label">City<span class="requried">*</span></label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="state" class="form-label">State<span class="requried">*</span></label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="Enter State">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="country" class="form-label">Country<span class="requried">*</span></label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" value="India">
                    </div>
                </div>
            </div>
            <button type="submit" class="primary-btn mt-2">Submit</button>
        </form>
        

        <div id="thankYouMessage1" style=" margin-top: 20px; display: none;">
            <h3 class="NewKansas-medium">Thank you for register with us!</h3>
            <p class="mb-2">We will get back to you shortly.</p>
            <a href="#" id="sendAnother" onclick="resetForm()"
                style="font-family: var(--secondary-font); text-decoration: underline;">Send another
                response</a>
        </div>
    </div>

    <div class="contact-info">
        <div class="row">
            <div class="col-md-6">
                <h3 class="NewKansas-medium">Connect with us</h3>
                <p>At Curtain & Blind Co, we understand that when you're choosing, measuring or installing your
                    own curtains and blinds, having access to a real person can make all the difference.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <div class="d-flex flex-column justify-content-end">
                    <a href="tel:+91 987654321" class="NewKansas-medium mb-3" style="font-size: 22px;"><img
                            src="{{ asset('frontend/images/call-fill.svg') }}" alt=""> +91 987654321</a>
                    <a href="mailto:+91 987654321" class="NewKansas-medium" style="font-size: 22px;"><img
                            src="{{ asset('frontend/images/mail-fill.svg') }}" alt=""> support@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $("#contact-form1").validate({
            rules: {
                company_name: "required",
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 15
                },
                alt_mobile: {
                    digits: true,
                    minlength: 10,
                    maxlength: 15
                },
                employees: {
                    required: true,
                    digits: true
                },
                address: "required",
                pincode: {
                    required: true,
                    digits: true,
                    minlength: 6,
                    maxlength: 6
                },
                city: "required",
                state: "required",
                country: "required"
            },
            messages: {
                company_name: "Please enter your company name",
                name: "Please enter your name",
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                mobile: {
                    required: "Please enter your mobile number",
                    digits: "Please enter a valid mobile number"
                },
                employees: "Please enter the number of employees",
                address: "Please enter your address",
                pincode: {
                    required: "Please enter your pincode",
                    digits: "Please enter a valid pincode"
                },
                city: "Please enter your city",
                state: "Please enter your state",
                country: "Please enter your country"
            },
            submitHandler: function(form) {
                saveData();
            }
        });
    });
    </script>
    <script>
        var input = document.querySelector("#mobile");
var iti = window.intlTelInput(input, {
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.3/build/js/utils.js",
});

// store the instance variable so we can access it in the console e.g. window.iti.getNumber()
window.iti = iti;
        function saveData() {
            const formData = {
                company_name: $("#company_name").val(), // Match the name attribute in the input
                name: $("#name").val(),
                email: $("#email").val(),
                mobile: $("#mobile").val(),
                alt_mobile: $("#alt_mobile").val(),
                employees: $("#employees").val(),
                address: $("#address").val(),
                pincode: $("#pincode").val(),
                city: $("#city").val(),
                state: $("#state").val(),
                country: $("#country").val(),
                _token: $("input[name='_token']").val(), // CSRF token
            };
        
            $.ajax({
                type: "POST",
                url: "{{ route('franchise_temp.store') }}", // Your server-side script to save data
                data: formData,
                success: function(response) {
                    alert('ddd');
                    document.getElementById('contact-form1').style.display = 'none'; // Hide all form fields
    document.getElementById('form-title1').style.display = 'none';
    document.getElementById('thankYouMessage1').style.display = 'block'; // Show the thank you message
                    $("#contact-form")[0].reset(); // Reset the form after successful submission
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while saving data: " + error);
                }
            });
        }
        </script>
        
@endsection