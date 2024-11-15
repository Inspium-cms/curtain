@extends('admin.layouts.app')

@section('title', 'Product List')

@section('content')
<div class="card">
    <h5 class="card-header pb-0 text-md-start text-center">
        Product List
    </h5>
    <div class="card-body mt-4">
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
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
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->tally_code }}</td>
                        <td>{{ $product->supplier_name }}</td>
                        <td>{{ $product->mrp }}</td>
                        <td>{{ $product->unit }}</td>
                        
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                            @if (Auth::user()->getRoleNames()[0] != 'Franchise')
                            <!-- Edit Button -->
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <!-- Delete Button with confirmation -->
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            @endif
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Pagination links -->
        {{ $products->links() }}
    </div>
</div>
@endsection
