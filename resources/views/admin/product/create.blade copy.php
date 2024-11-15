@extends('admin.layouts.app')

@section('title', 'Add Product')

@section('content')
<div class="card">
    <h5 class="card-header pb-0 text-md-start text-center">
        Add Product
    </h5>
    <div class="card-body mt-4">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Product Name -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="product_name">Product Name*</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" required>
                </div>
                
                <!-- Tally Code -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="tally_code">Tally Code*</label>
                    <input type="text" name="tally_code" id="tally_code" class="form-control" required>
                </div>
                
                <!-- File Number -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="file_number">File Number*</label>
                    <input type="text" name="file_number" id="file_number" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <!-- Supplier Name -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="supplier_name">Supplier Name*</label>
                    <input type="text" name="supplier_name" id="supplier_name" class="form-control" required>
                </div>
                
                <!-- Supplier Collection -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="supplier_collection">Supplier Collection*</label>
                    <input type="text" name="supplier_collection" id="supplier_collection" class="form-control" required>
                </div>
                
                <!-- Supplier Collection Design -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="supplier_collection_design">Supplier Collection Design*</label>
                    <input type="text" name="supplier_collection_design" id="supplier_collection_design" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <!-- Design SKU -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="design_sku">Design SKU*</label>
                    <input type="text" name="design_sku" id="design_sku" class="form-control" required>
                </div>
                
                <!-- Width (INCH) -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="width">Width (INCH)</label>
                    <input type="number" name="width" id="width" class="form-control">
                </div>
                
                <!-- Rubs / Martendale -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="rubs">Rubs / Martendale</label>
                    <input type="text" name="rubs" id="rubs" class="form-control">
                </div>
            </div>
            <div class="row">
                <!-- Note -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="note">Note</label>
                    <textarea name="note" id="note" class="form-control"></textarea>
                </div>
                
                <!-- Supplier Price -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="supplier_price">Supplier Price</label>
                    <input type="number" name="supplier_price" id="supplier_price" class="form-control">
                </div>
                
                <!-- Freight -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="freight">Freight</label>
                    <input type="number" name="freight" id="freight" class="form-control">
                </div>
            </div>
            <div class="row">
                <!-- Duty (%) -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="duty">Duty (%)</label>
                    <input type="number" name="duty" id="duty" class="form-control" step="0.01">
                </div>
                
                <!-- Profit (%) -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="profit">Profit (%)</label>
                    <input type="number" name="profit" id="profit" class="form-control" step="0.01">
                </div>
                
                <!-- GST (%) -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="gst">GST (%)</label>
                    <input type="number" name="gst" id="gst" class="form-control" step="0.01">
                </div>
            </div>
            <div class="row">
                <!-- MRP -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="mrp">MRP</label>
                    <input type="number" name="mrp" id="mrp" class="form-control">
                </div>
                
                <!-- Unit -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="unit">Unit</label>
                    <input type="text" name="unit" id="unit" class="form-control">
                </div>
            
                <!-- Color -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="color">Color*</label>
                    <select name="color[]" id="color" class="form-select select2" multiple>
                        <option value="Red">Red</option>
                        <option value="Blue">Blue</option>
                        <option value="Green">Green</option>
                        <!-- Add more colors dynamically -->
                    </select>
                </div>
                
                <!-- Composition -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="composition">Composition*</label>
                    <select name="composition[]" id="composition" class="form-select select2" multiple>
                        <option value="Cotton">Cotton</option>
                        <option value="Wool">Wool</option>
                        <!-- Add more compositions dynamically -->
                    </select>
                </div>
                
                <!-- Design Type -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="design_type">Design Type*</label>
                    <select name="design_type[]" id="design_type" class="form-select select2" multiple>
                        <option value="Floral">Floral</option>
                        <option value="Geometric">Geometric</option>
                        <!-- Add more design types dynamically -->
                    </select>
                </div>
            
                <!-- Usage -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="usage">Usage*</label>
                    <select name="usage[]" id="usage" class="form-select select2" multiple>
                        <option value="Indoor">Indoor</option>
                        <option value="Outdoor">Outdoor</option>
                        <!-- Add more usage types dynamically -->
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="product_images" class="form-label">Product Images (Gallery)</label>
                    <!-- Dropzone Container -->
                    <div id="product_images" class="dropzone"></div>
                    @error('product_images')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
   document.addEventListener("DOMContentLoaded", function() {
    let productForm = document.querySelector("#productForm"); // Change ID to match your form

    if (productForm) {
        FormValidation.formValidation(productForm, {
            fields: {
                'product_name': {
                    validators: {
                        notEmpty: { message: "Product name is required" },
                        stringLength: { min: 3, message: "Product name must be at least 3 characters long" }
                    }
                },
                'tally_code': {
                    validators: {
                        notEmpty: { message: "Tally code is required" }
                    }
                },
                'file_number': {
                    validators: {
                        notEmpty: { message: "File number is required" }
                    }
                },
                'supplier_name': {
                    validators: {
                        notEmpty: { message: "Supplier name is required" }
                    }
                },
                'supplier_collection': {
                    validators: {
                        notEmpty: { message: "Supplier collection is required" }
                    }
                },
                'supplier_collection_design': {
                    validators: {
                        notEmpty: { message: "Supplier collection design is required" }
                    }
                },
                'design_sku': {
                    validators: {
                        notEmpty: { message: "Design SKU is required" }
                    }
                },
                'width': {
                    validators: {
                        numeric: { message: "Width must be a number" }
                    }
                },
                'duty': {
                    validators: {
                        numeric: { message: "Duty must be a valid percentage" },
                        between: { min: 0, max: 100, message: "Duty must be between 0% and 100%" }
                    }
                },
                'profit': {
                    validators: {
                        numeric: { message: "Profit must be a valid percentage" },
                        between: { min: 0, max: 100, message: "Profit must be between 0% and 100%" }
                    }
                },
                'gst': {
                    validators: {
                        numeric: { message: "GST must be a valid percentage" },
                        between: { min: 0, max: 100, message: "GST must be between 0% and 100%" }
                    }
                },
                'color[]': {
                    validators: {
                        notEmpty: { message: "Please select at least one color" }
                    }
                },
                'composition[]': {
                    validators: {
                        notEmpty: { message: "Please select at least one composition" }
                    }
                },
                'design_type[]': {
                    validators: {
                        notEmpty: { message: "Please select at least one design type" }
                    }
                },
                'usage[]': {
                    validators: {
                        notEmpty: { message: "Please select at least one usage" }
                    }
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    eleValidClass: "",
                    rowSelector: ".mb-3"
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                autoFocus: new FormValidation.plugins.AutoFocus()
            },
            init: e => {
                e.on("plugins.message.placed", function(e) {
                    if (e.element.parentElement.classList.contains("input-group")) {
                        e.element.parentElement.insertAdjacentElement("afterend", e.messageElement);
                    }
                });
            }
        });
    }
});

</script>

<script>
    $(document).ready(function(){
        $(".select2").select2();
    });
</script>
<script>
    // Initialize Dropzone.js
    Dropzone.options.productImages = {
    url: "{{ route('products.store') }}", // Form action URL
    method: 'POST', // Form submission method
    paramName: 'product_images[]', // Name attribute for file input
    addRemoveLinks: true, // Enable image removal
    dictDefaultMessage: 'Drag & Drop images here or click to select files.',
    maxFilesize: 2, // Maximum file size in MB
    acceptedFiles: 'image/*', // Accepted image file types
    parallelUploads: 10, // Allow multiple uploads
    autoProcessQueue: false, // Disable auto upload on file drop
    init: function () {
        var myDropzone = this;

        // Trigger the manual upload when the submit button is clicked
        $('#submitForm').on('click', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Manually process the files
            myDropzone.processQueue();
        });

        // On success, handle the response and display images
        this.on("successmultiple", function (files, response) {
            if (response && response.success) {
                // Handle successful upload, you can display the images as needed
                files.forEach(function (file) {
                    file.previewElement.querySelector("img").src = "{{ asset('storage') }}/" + response.filePath;
                });
            }
        });

        // Handle errors
        this.on("error", function (file, errorMessage) {
            alert("Error: " + errorMessage);
        });
    }
};

</script>
@endsection

