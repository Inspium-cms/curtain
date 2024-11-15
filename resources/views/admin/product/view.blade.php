@extends('admin.layouts.app')

@section('title', 'Product Details')

@section('content')
<div class="card">
    <h5 class="card-header text-center">
        Product Details
    </h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>Product Name</th>
                        <td>{{ $product->product_name }}</td>
                    </tr>
                    <tr>
                        <th>Tally Code</th>
                        <td>{{ $product->tally_code }}</td>
                    </tr>
                    <tr>
                        <th>File Number</th>
                        <td>{{ $product->file_number }}</td>
                    </tr>
                    <tr>
                        <th>Supplier Name</th>
                        <td>{{ $product->supplier_name }}</td>
                    </tr>
                    <tr>
                        <th>Supplier Collection</th>
                        <td>{{ $product->supplier_collection }}</td>
                    </tr>
                    <tr>
                        <th>Supplier Collection Design</th>
                        <td>{{ $product->supplier_collection_design }}</td>
                    </tr>
                    <tr>
                        <th>Design SKU</th>
                        <td>{{ $product->design_sku }}</td>
                    </tr>
                    <tr>
                        <th>Width</th>
                        <td>{{ number_format($product->width, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Rubs Martendale</th>
                        <td>{{ $product->rubs_martendale }}</td>
                    </tr>
                    <tr>
                        <th>Note</th>
                        <td>{{ $product->note }}</td>
                    </tr>
                    <tr>
                        <th>Supplier Price</th>
                        <td>{{ number_format($product->supplier_price, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Freight</th>
                        <td>{{ number_format($product->freight, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Duty</th>
                        <td>{{ number_format($product->duty, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Profit</th>
                        <td>{{ number_format($product->profit, 2) }}</td>
                    </tr>
                    <tr>
                        <th>GST</th>
                        <td>{{ number_format($product->gst, 2) }}</td>
                    </tr>
                    <tr>
                        <th>MRP</th>
                        <td>{{ number_format($product->mrp, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Unit</th>
                        <td>{{ $product->unit }}</td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>{{ json_encode($product->color) }}</td>
                    </tr>
                    <tr>
                        <th>Composition</th>
                        <td>{{ json_encode($product->composition) }}</td>
                    </tr>
                    <tr>
                        <th>Design Type</th>
                        <td>{{ json_encode($product->design_type) }}</td>
                    </tr>
                    <tr>
                        <th>Usage</th>
                        <td>{{ json_encode($product->usage) }}</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>{{ json_encode($product->type) }}</td>
                    </tr>
                    <tr>
                        <th>Image Gallery</th>
                        <td>
                            @foreach($product->image_gallery as $image)
                                <img src="{{ asset('storage/' . $image) }}" alt="Product Image" style="width: 100px; height: 100px; margin: 5px;">
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $product->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products List</a>
        </div>
    </div>
</div>
@endsection
