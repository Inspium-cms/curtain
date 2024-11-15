<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title', 'Curtains & Blinds | Dashboard')</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="" />
    @yield('seo')
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
    <link rel="stylesheet" href="{{ asset('admin/CSS/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/CSS/dashboard.css') }}">
    @yield('css')
</head>

<body>
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-start">
            @include('admin.layouts.sidebar')
            <div class="w-100">
                @include('admin.layouts.nav')
                @yield('content')
            </div>
        </div>
        

        <!-- Footer -->
        @include('admin.layouts.footer')
        <!-- / Footer -->
       <!-- delete modal start -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Are your sure you want to delete?</p>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="secondary-btn me-2 addBtn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="primary-btn addBtn">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delete modal end -->
    <!-- delete modal start -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p style="color: green;font-weight:bold"></p>                   
                </div>
            </div>
        </div>
    </div>
    <!-- delete modal end -->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- datatabel -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin/JS/datatable.js') }}"></script>

    <!-- menu script -->
    <script src="{{ asset('admin/JS/sidebar.js') }}"></script>
    <script src="{{ asset('admin/JS/menu.js') }}"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    @yield('script')
</body>

</html>