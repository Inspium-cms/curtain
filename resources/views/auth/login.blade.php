<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('admin/CSS/designSystem.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/CSS/login.css') }}">
</head>

<body class="white-bg">

    <section class="loginScreen">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-start">
                    <div class="login-section">
                        <img class="logo" src="{{ asset('images/logo.svg') }}" alt="">
                        <div class="section-title mb-4 flex-column align-items-start p-0">
                            <p class="m-0 small">Welcome back!!</p>
                            <h4 class="fw-bold">Please Sign In</h4>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                          @csrf
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control w-100" id="email" name="email"
                                    aria-describedby="emailHelp" placeholder="Enter Email">
                                    @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                            </div>
                            <div class="mb-2">
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control w-100" id="password" name="password"
                                    placeholder="Enter Password">
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <a href="/login" class="red-link small text-decoration-underline">I forgot
                                    my password</a>
                            </div>

                            <button type="submit" class="primary-btn w-100 mt-4">Sign In</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <img src="{{ asset('admin/images/loginScreenImage.jpg') }}" class="w-100 img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
<!-- success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="thankuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <i class="bi bi-check-circle" style="color: #181818; font-size: 40px;"></i>
                <h6 id="successMessage">Your Message</h6>
            </div>
        </div>
    </div>
</div>


<!-- error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="thankuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <i class="bi bi-x-circle" style="color: #ff3f3f; font-size: 40px;"></i>
                <h6 id="errorMessage">Your Message</h6>
            </div>
        </div>
    </div>
</div>

<!-- Check for success message and show modal -->
@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set the message
            document.getElementById('successMessage').textContent = "{{ session('success') }}";

            // Show the modal
            let successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        });
    </script>
@endif

<!-- Check for error message and show modal -->
@if(session('error'))
    hhhhhhhh
@endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="{{ asset('admin/JS/main.js') }}"></script>
</body>

</html>