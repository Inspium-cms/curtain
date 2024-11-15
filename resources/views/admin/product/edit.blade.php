@extends('admin.layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="card">
    <h5 class="card-header pb-0 text-md-start text-center">
        Edit Product
    </h5>
    <div class="card-body mt-4">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" id="editProductForm">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- Product Name -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="product_name">Product Name*</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" value="{{ old('product_name', $product->product_name) }}" required>
                    <span class="text-danger" id="product_name_error"></span>
                </div>

                <!-- Tally Code -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="tally_code">Tally Code*</label>
                    <input type="text" name="tally_code" id="tally_code" class="form-control" value="{{ old('tally_code', $product->tally_code) }}" required>
                    <span class="text-danger" id="tally_code_error"></span>
                </div>

                <!-- Supplier Name -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="supplier_name">Supplier Name*</label>
                    <input type="text" name="supplier_name" id="supplier_name" class="form-control" value="{{ old('supplier_name', $product->supplier_name) }}" required>
                    <span class="text-danger" id="supplier_name_error"></span>
                </div>
            </div>

            <div class="row">
                <!-- MRP -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="mrp">MRP*</label>
                    <input type="number" name="mrp" id="mrp" class="form-control" value="{{ old('mrp', $product->mrp) }}" required step="0.01">
                    <span class="text-danger" id="mrp_error"></span>
                </div>

                <!-- Unit -->
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="unit">Unit*</label>
                    <select name="unit" id="unit" class="form-control" required>
                        <option value="">Select Unit</option>
                        <option value="Kg" {{ $product->unit == 'Kg' ? 'selected' : '' }}>Kg</option>
                        <option value="L" {{ $product->unit == 'L' ? 'selected' : '' }}>L</option>
                        <option value="Piece" {{ $product->unit == 'Piece' ? 'selected' : '' }}>Piece</option>
                    </select>
                    <span class="text-danger" id="unit_error"></span>
                </div>
            </div>

            <!-- Image Upload -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="col-form-label text-md-end" for="product_image">Product Image</label>
                    <input type="file" name="product_image" id="product_image" class="form-control">
                    @if($product->product_image)
                        <img src="{{ asset('storage/' . $product->product_image) }}" alt="Product Image" class="mt-2" width="100">
                    @endif
                    <span class="text-danger" id="product_image_error"></span>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    // Form validation logic
    document.getElementById('editProductForm').addEventListener('submit', function(event) {
        let isValid = true;

        // Reset all error messages
        document.querySelectorAll('.text-danger').forEach(function(error) {
            error.textContent = '';
        });

        // Validate Product Name
        let productName = document.getElementById('product_name').value;
        if (productName === '') {
            document.getElementById('product_name_error').textContent = 'Product Name is required.';
            isValid = false;
        }

        // Validate Tally Code
        let tallyCode = document.getElementById('tally_code').value;
        if (tallyCode === '') {
            document.getElementById('tally_code_error').textContent = 'Tally Code is required.';
            isValid = false;
        }

        // Validate Supplier Name
        let supplierName = document.getElementById('supplier_name').value;
        if (supplierName === '') {
            document.getElementById('supplier_name_error').textContent = 'Supplier Name is required.';
            isValid = false;
        }

        // Validate MRP
        let mrp = document.getElementById('mrp').value;
        if (mrp === '' || parseFloat(mrp) <= 0) {
            document.getElementById('mrp_error').textContent = 'MRP is required and should be greater than 0.';
            isValid = false;
        }

        // Validate Unit
        let unit = document.getElementById('unit').value;
        if (unit === '') {
            document.getElementById('unit_error').textContent = 'Unit is required.';
            isValid = false;
        }

        // If form is not valid, prevent submission
        if (!isValid) {
            event.preventDefault();
        }
    });
</script>
@endsection

