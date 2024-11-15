<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show the "Add Product" form
    public function create()
    {
        return view('admin.product.create');
    }

    // Store the product in the database
    public function store(Request $request)
{
    // Validate incoming data
    $validated = $request->validate([
        'product_name' => 'required|string|max:255',
        'tally_code' => 'required|string|max:255',
        'file_number' => 'required|string|max:255',
        'supplier_name' => 'required|string|max:255',
        'supplier_collection' => 'required|string|max:255',
        'supplier_collection_design' => 'required|string|max:255',
        'design_sku' => 'required|string|max:255',
        'width' => 'nullable|numeric',
        'rubs_martendale' => 'nullable|string',
        'note' => 'nullable|string',
        'supplier_price' => 'nullable|numeric',
        'freight' => 'nullable|numeric',
        'duty' => 'nullable|numeric',
        'profit' => 'nullable|numeric',
        'gst' => 'nullable|numeric',
        'mrp' => 'nullable|numeric',
        'unit' => 'nullable|string|max:255',
        'color' => 'nullable|array',
        'composition' => 'nullable|array',
        'design_type' => 'nullable|array',
        'usage' => 'nullable|array',
        'type' => 'nullable|array',
        'product_images' => 'nullable|array', // Validate images field as an array
        'product_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each image
    ]);

    // Handle Image Uploads
    $imagePaths = [];
    if ($request->hasFile('product_images')) {
        foreach ($request->file('product_images') as $image) {
            // Store image in 'public/product_images' directory
            $imagePath = $image->store('product_images', 'public');
            $imagePaths[] = $imagePath;
        }
    }

    // Store product data along with the image paths
    $validated['image_gallery'] = $imagePaths;

    Product::create($validated);

    // Redirect with success message
    return redirect()->route('products.create')->with('success', 'Product added successfully.');
}
 // Display the product list
 public function index()
 {
     $products = Product::paginate(10); // You can adjust the pagination size
     return view('admin.product.index', compact('products'));
 }

 // Show the form for editing the product
 public function edit($id)
 {
     $product = Product::findOrFail($id);
     return view('admin.product.edit', compact('product'));
 }

 // Update the product in the database
 public function update(Request $request, $id)
 {
     $product = Product::findOrFail($id);
     $product->update($request->all());
     return redirect()->route('products.index')->with('success', 'Product updated successfully');
 }

 // Remove the product from the database
 public function destroy($id)
 {
     $product = Product::findOrFail($id);
     $product->delete();
     return redirect()->route('products.index')->with('success', 'Product deleted successfully');
 }
 public function show($id)
{
    $product = Product::findOrFail($id); // Retrieve the product by ID
    return view('admin.product.view', compact('product')); // Pass the product data to the view
}

}

