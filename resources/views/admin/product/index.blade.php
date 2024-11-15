@extends('admin.layouts.app')

@section('title', 'Product List')

@section('content')

<div class="dataOverviewSection mt-3">
    <div class="section-title">
        <h6 class="fw-bold m-0">All Product <span class="fw-normal text-muted">({{ count($products) }})</span></h6>
        <a href="{{ route('products.create') }}" class="primary-btn addBtn">+ Add
            Product</a>
    </div>
    <div class="dataOverview mt-3">
        <div class="d-flex align-items-center justify-content-end mb-3">
            <a class="secondary-btn me-2 addBtn" href="#"><i class="bi bi-cloud-arrow-down me-2"></i>
                Export Data</a>
            <a class="secondary-btn addBtn" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                    class="bi bi-filter me-2"></i> Filter</a>
        </div>
        <div class="table-responsive">
            <table class="table" id="projectsTable">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Tally Code</th>
                        <th>Supplier Name</th>
                        <th>MRP</th>
                        <th>Unit</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="w-10">
                            <a href="{{ asset('storage/'.$product->image) }}" data-fancybox data-caption="Single image">
                                <img class="tabelImage" src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->image_alt }}"/>
                            </a>

                        </td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->tally_code }}</td>
                        <td>{{ $product->supplier_name }}</td>
                        <td>{{ $product->mrp }}</td>
                        <td>{{ $product->unit }}</td>
                        
                        <td>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item small" href="{{ route('products.edit', $product->id) }}">Edit</a></li>
                                    <li><a class="dropdown-item small" data-bs-toggle="offcanvas"
                                            href="#ProductView" role="button"
                                            aria-controls="ProductView">View</a></li>
                                    <li><a class="dropdown-item small" href="javascript:" onclick="openDeleteModal({{ $product->id }})">Delete</a></li>
                                </ul>
                            </div>
                            
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    <!-- Offcanvas Sidebar -->
    <div class="offcanvas ProductViewSidebar offcanvas-start" tabindex="-1" id="ProductView"
        aria-labelledby="ProductViewLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title fw-bold" id="ProductViewLabel">Product Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <table class="table table-hover">
                <tbody>

                <tbody>
                    <tr>
                        <th class="w-25">Product Type</th>
                        <td>Carpet Tiles</td>
                    </tr>
                    <tr>
                        <th class="w-25">Tally Code</th>
                        <td>203144</td>
                    </tr>
                    <tr>
                        <th class="w-25">File Number</th>
                        <td>1571</td>
                    </tr>
                    <tr>
                        <th class="w-25">Supplier Name</th>
                        <td>My Floor</td>
                    </tr>
                    <tr>
                        <th class="w-25">Supplier Collection</th>
                        <td>Gravity</td>
                    </tr>
                    <tr>
                        <th class="w-25">Supplier Collection Design</th>
                        <td>300/SHADOW GREY</td>
                    </tr>
                    <tr>
                        <th class="w-25">Design Sku</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="w-25">Rubs / Martendale</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="w-25">Image</th>
                        <td>
                            <a href="images/1.jpg" data-fancybox data-caption="Single image">
                                <img class="tabelImage" src="images/1.jpg" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Currency</th>
                        <td>₹</td>
                    </tr>
                    <tr>
                        <th class="w-25">Supplier Price</th>
                        <td>82</td>
                    </tr>
                    <tr>
                        <th class="w-25">Freight</th>
                        <td>20</td>
                    </tr>
                    <tr>
                        <th class="w-25">Duty %</th>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th class="w-25">Profit %</th>
                        <td>101</td>
                    </tr>
                    <tr>
                        <th class="w-25">GST %</th>
                        <td>12</td>
                    </tr>
                    <tr>
                        <th class="w-25">MRP</th>
                        <td>230</td>
                    </tr>
                    <tr>
                        <th class="w-25">Unit</th>
                        <td>/SQ FT</td>
                    </tr>
                    <tr>
                        <th class="w-25">Colour</th>
                        <td>Grey &amp; Black,</td>
                    </tr>
                    <tr>
                        <th class="w-25">Composition</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="w-25">Design Type</th>
                        <td>Texture,</td>
                    </tr>
                    <tr>
                        <th class="w-25">Usage</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="w-25">Type (Technical specs)</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="w-25">Note</th>
                        <td>Size-25cm X 100cm, 100% Solution Dyed Olefin, Satin Resistant, Anti Static, Flame Retardant,
                            Packing-20 pcs/Box, Constructions- Multi Level Loop, Gauge-1/12", Stitches-10 Per Inch, Pile
                            Weight-20 oz/yd2, Pile Height-4 mm, Backing-Eco Back(PVS Free), Warranty- 10 year Carpet
                            Wear Warranty, Lifetime Anti-Stock Carpet Warranty, Ideal For Heavy Contract Use.</td>
                    </tr>
                </tbody>

                <tr>
                    <th>Product Type</th>
                    <td>Carpet Tiles</td>
                </tr>
                <tr>
                    <th>Tally Code</th>
                    <td>203144</td>
                </tr>
                <tr>
                    <th>File Number</th>
                    <td>1571</td>
                </tr>
                <tr>
                    <th>Supplier Name</th>
                    <td>1571</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Filter Sidebar -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h6 class="offcanvas-title" id="FilterSidebarLabel">Add Filters</h6>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mb-2 w-100">
                <label class="form-label m-0 mb-1">Type</label>
                <select class="form-select w-100" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Blinds</option>
                    <option value="2">Carpet Tiles</option>
                    <option value="3">Wood Flooring</option>
                </select>
            </div>
            <div class="mb-2 w-100">
                <label class="form-label m-0 mb-1">Supplier Name</label>
                <select class="form-select w-100" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Blinds</option>
                    <option value="2">Carpet Tiles</option>
                    <option value="3">Wood Flooring</option>
                </select>
            </div>
            <div class="mb-2 w-100">
                <label class="form-label m-0 mb-1">Supplier Collection</label>
                <select class="form-select w-100" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Blinds</option>
                    <option value="2">Carpet Tiles</option>
                    <option value="3">Wood Flooring</option>
                </select>
            </div>
            <div class="mb-2 w-100">
                <label class="form-label m-0 mb-1">Supplier Collection Design</label>
                <select class="form-select w-100" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Blinds</option>
                    <option value="2">Carpet Tiles</option>
                    <option value="3">Wood Flooring</option>
                </select>
            </div>
            <div class="mb-1 w-100">
                <label for="TallyCodeInput" class="form-label mb-1">MRP From</label>
                <input type="range" class="w-100" id="TallyCodeInput">
                <div class="values d-flex justify-content-between">
                    <span class="text-muted">₹100</span>
                    <span class="text-muted">₹1000</span>
                </div>
            </div>
            <div class="mb-2 w-100">
                <label class="form-label m-0 mb-1">Colour</label>
                <select class="form-select w-100" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Blinds</option>
                    <option value="2">Carpet Tiles</option>
                    <option value="3">Wood Flooring</option>
                </select>
            </div>
            <div class="mb-2 w-100">
                <label class="form-label m-0 mb-1">Composition</label>
                <select class="form-select w-100" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Blinds</option>
                    <option value="2">Carpet Tiles</option>
                    <option value="3">Wood Flooring</option>
                </select>
            </div>
            <div class="mb-2 w-100">
                <label class="form-label m-0 mb-1">Usage</label>
                <select class="form-select w-100" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Blinds</option>
                    <option value="2">Carpet Tiles</option>
                    <option value="3">Wood Flooring</option>
                </select>
            </div>
            <div class="mb-2 w-100">
                <label class="form-label m-0 mb-1">Design Type</label>
                <select class="form-select w-100" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">Blinds</option>
                    <option value="2">Carpet Tiles</option>
                    <option value="3">Wood Flooring</option>
                </select>
            </div>
        </div>
        <div class="offcanvas-footer">
            <div class="d-flex justify-content-start p-3 border-top">
                <button type="button" class="secondary-btn me-2 addBtn" data-bs-dismiss="offcanvas">Clear</button>
                <button type="button" class="primary-btn addBtn">Apply</button>
            </div>
        </div>
    </div>
    <!-- Filter Sidebar end -->


    <!-- delete modal start -->
  <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="deleteUserForm" method="POST" action="{{ route('products.destroy', ['product' => '__product_id__']) }}" autocomplete="off">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteUserModalLabel">Delete Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this product?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="secondary-btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="primary-btn">Delete</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
    <!-- delete modal end -->

@endsection
@section('script')
<script>
function openDeleteModal(productId) {
    // Update the form action dynamically
    const form = document.getElementById('deleteUserForm');
    const actionUrl = "{{ route('products.destroy', ['product' => ':productId']) }}".replace(':productId', productId);
    form.action = actionUrl;

    // Show the modal (assuming you're using Bootstrap's modal)
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteUserModal'));
    deleteModal.show();
}
</script>
@endsection