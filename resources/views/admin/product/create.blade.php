@extends('admin.layouts.app')

@section('title', 'Add Product')

@section('content')
<div class="dataOverviewSection mt-3">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="mt-3" id="productForm">
       
            @csrf 
               <div class="dataOverview mt-3">
                    <h6 class="m-0">Add New Product</h6>
                    <hr class="m-0 mt-2 mb-2">
            
                    @csrf 
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <div class="mb-1 w-100">
                                <label for="tally_code" class="form-label mb-1">Product Type <span class="text-danger">*</span></label>
                                <select name="product_name" id="product_name" class="form-select w-100">
                                    <option value="">Select</option>
                                    @foreach ($productType as $productTypes)
                                    <option value="{{ $productTypes->id }}">{{ $productTypes->product_type }}</option>
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1 w-100">
                                <label for="tally_code" class="form-label mb-1">Tally Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-100" id="tally_code" name="tally_code" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1 w-100">
                                <label for="file_number" class="form-label mb-1">File Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-100" id="file_number" name="file_number" required>
                            </div>
                        </div>
                    </div>
            
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="supplier_name" class="form-label m-0 mb-1">Supplier Name <span class="text-danger">*</span></label>
                            <select name="supplier_name" id="supplier_name" class="form-select w-100" required>
                                <option value="">Select</option>
                                @foreach ($supplier as $suppliers)
                                <option value="{{ $suppliers->id }}">{{ $suppliers->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="supplier_collection" class="form-label m-0 mb-1">Supplier Collection <span class="text-danger">*</span></label>
                            <select name="supplier_collection" id="supplier_collection" class="form-select w-100" required>
                                <option value="">Select</option>
                                @foreach ($supplierCollection as $supplierCollections)
                                <option value="{{ $supplierCollections->id }}">{{ $supplierCollections->collection_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="supplier_collection_design" class="form-label m-0 mb-1">Supplier Collection Design <span class="text-danger">*</span></label>
                            <select name="supplier_collection_design" id="supplier_collection_design" class="form-select w-100" required>
                                <option value="">Select</option>
                                @foreach ($supplierCollectionDesign as $supplierCollectionDesigns)
                                <option value="{{ $supplierCollectionDesigns->id }}">{{ $supplierCollectionDesigns->design_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <div class="mb-1 w-100">
                                <label for="design_sku" class="form-label mb-1">Design Sku <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-100" id="design_sku" name="design_sku" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1 w-100">
                                <label for="rubs_martendale" class="form-label mb-1">Rubs/Martendale <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-100" id="rubs_martendale" name="rubs_martendale" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1 w-100">
                                <label for="width" class="form-label mb-1">Width <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-100" id="width" name="width" required>
                            </div>
                        </div>
                    </div>
            
                    <div class="mb-2 w-100 d-flex justify-content-start">
                        <img src="{{ asset('admin/images/image.jpg') }}" class="rounded" id="imagePreview" alt="" width="140" height="140">
                        <div class="w-100 ms-3">
                            <div>
                                <label for="image" class="form-label mb-1">Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control w-100" id="image" name="image" onchange="previewImage(event)" required>
                            </div>
                            <div>
                                <label for="image_alt" class="form-label mb-1">Image Alt <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-100" id="image_alt" name="image_alt" required>
                            </div>
                        </div>
                    </div>
            
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="colour" class="form-label m-0 mb-1">Colour</label>
                            <select name="colour[]" id="colour" class="form-select w-100 select2">
                                <option value="">select</option>
                                @foreach ($color as $cx=>$colors)
                                <option value="{{ $colors->id }}">{{ $colors->color }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="col-md-4">
                            <label for="composition" class="form-label m-0 mb-1">Composition</label>
                            <div class="selectMultiple">
                                <div>
                                    <span>Select</span>
                                    <div class="arrow"></div>
                                </div>
                                <ul>
                                    <div class="dropdown-search"><input type="text" class="search-input" placeholder="Search..."></div>
                                    @foreach ($composition as $cm=>$compositions)
                                    <li><input type="checkbox" id="composition{{ $cm }}" name="composition[]" value="{{ $compositions->id }}"> {{ $compositions->composition }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label m-0 mb-1" for="type">Type <span class="text-danger">*</span></label>
                            <select name="type" id="type" class="form-select w-100" required>
                                <option value="">Select</option>
                                @foreach ($type as $tp=>$types)
                                <option value="{{ $types->id }}">{{ $types->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="usage" class="form-label m-0 mb-1">Usage</label>
                            <div class="selectMultiple">
                                <div>
                                    <span>Select</span>
                                    <div class="arrow"></div>
                                </div>
                                <ul>
                                    <div class="dropdown-search"><input type="text" class="search-input" id="usageSearch" name="usageSearch" placeholder="Search..."></div>
                                    @foreach ($usage as $ug=>$usages)
                                    <li><input type="checkbox" id="usage{{ $ug }}" name="usage[]" value="{{ $usages->id }}"> {{ $usages->usages }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <label for="designType" class="form-label m-0 mb-1">Design Type</label>
                            <div class="selectMultiple">
                                <div>
                                    <span>Select</span>
                                    <div class="arrow"></div>
                                </div>
                                <ul>
                                    <div class="dropdown-search"><input type="text" class="search-input" id="designTypeOtherSearch" name="designTypeOtherSearch" placeholder="Search..."></div>
                                    @foreach ($designType as $dt=>$designTypes)
                                    <li><input type="checkbox" id="designType{{ $dt }}" name="designTypeOther[]" value="{{ $designTypes->id }}"> {{ $designTypes->design_type }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="noteInput" class="form-label mb-1">Note <span class="text-danger">*</span></label>
                            <textarea name="note" id="noteInput" cols="30" rows="10" class="form-control w-100" required></textarea>
                        </div>
                    </div>
                
                    <hr class="m-0 mt-4 mb-2">
                
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <label class="form-label m-0 mb-1" for="currency">Currency</label>
                            <select name="currency" id="currency" class="form-select w-100" aria-label="Currency select">
                                <option value="rupee" selected>₹ (Rupee)</option>
                                <option value="dollar">$ (US Dollar)</option>
                                <option value="euro">€ (Euro)</option>
                            </select>
                        </div>
                
                        <div class="col-md-3">
                            <div class="mb-1 w-100">
                                <label for="supplierPriceInput" class="form-label mb-1">Supplier Price</label>
                                <input type="text" class="form-control w-100" id="supplierPriceInput" name="supplier_price">
                            </div>
                        </div>
                
                        <div class="col-md-3">
                            <div class="mb-1 w-100">
                                <label for="freightInput" class="form-label mb-1">Freight</label>
                                <input type="text" class="form-control w-100" id="freightInput" name="freight">
                            </div>
                        </div>
                
                        <div class="col-md-3">
                            <div class="mb-1 w-100">
                                <label for="dutyInput" class="form-label mb-1">Duty %</label>
                                <input type="text" class="form-control w-100" id="dutyInput" name="duty_percentage">
                            </div>
                        </div>
                    </div>
                
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <div class="mb-1 w-100">
                                <label for="profitInput" class="form-label mb-1">Profit %</label>
                                <input type="text" class="form-control w-100" id="profitInput" name="profit_percentage">
                            </div>
                        </div>
                
                        <div class="col-md-3">
                            <div class="mb-1 w-100">
                                <label for="gstInput" class="form-label mb-1">GST %</label>
                                <input type="text" class="form-control w-100" id="gstInput" name="gst_percentage">
                            </div>
                        </div>
                
                        <div class="col-md-3">
                            <div class="mb-1 w-100">
                                <label for="mrpInput" class="form-label mb-1">MRP</label>
                                <input type="text" class="form-control w-100" id="mrpInput" name="mrp">
                            </div>
                        </div>
                
                        <div class="col-md-3">
                            <div class="mb-1 w-100">
                                <label for="unitInput" class="form-label mb-1">Unit</label>
                                <input type="text" class="form-control w-100" id="unitInput" name="unit">
                            </div>
                        </div>
                    </div>
        </div>
    
        <div class="mt-3 d-flex gap-3 mb-4">
            <button type="submit" class="btn primary-btn">Create Product</button>
            <button type="reset" class="btn secondary-btn">Cancel</button>
        </div>
    </form>
</div>

@endsection

@section('script')

<script>
    // Image Preview
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    // jQuery Validation
    $(document).ready(function() {
    
        $('#productForm').validate({
            rules: {
                type: { required: true },
                tally_code: { required: true },
                file_number: { required: true },
                supplier_name: { required: true },
                supplier_collection: { required: true },
                supplier_collection_design: { required: true },
                design_sku: { required: true },
                rubs_martendale: { required: true },
                width: { required: true },
                image: { required: true },
                image_alt: { required: true },
                note: { required: true },
                // Add rules for other fields as needed
            },
            messages: {
                type: { required: "Please select a type." },
                tally_code: { required: "Please enter the tally code." },
                file_number: { required: "Please enter the file number." },
                supplier_name: { required: "Please select a supplier." },
                supplier_collection: { required: "Please select a supplier collection." },
                supplier_collection_design: { required: "Please select a supplier collection design." },
                design_sku: { required: "Please enter a design SKU." },
                rubs_martendale: { required: "Please enter rubs/martendale." },
                width: { required: "Please enter the width." },
                image: { required: "Please upload an image." },
                image_alt: { required: "Please enter an image alt text." },
                note: { required: "Please enter a note." }
            },
            errorElement: "div", // Use div to display errors
            errorPlacement: function (error, element) {
                error.addClass("form-text text-danger xsmall");
                error.insertAfter(element); // Place the error directly after the input element
            },
            highlight: function (element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function (element) {
                $(element).removeClass("is-invalid").addClass("is-valid");
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>

@endsection

