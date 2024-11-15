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
        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'type' => 'required|string',
            'tally_code' => 'required|string',
            'file_number' => 'required|string',
            'supplier_name' => 'required|integer',
            'supplier_collection' => 'required|integer',
            'supplier_collection_design' => 'required|integer',
            'design_sku' => 'required|string',
            'rubs_martendale' => 'required|string',
            'width' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_alt' => 'required|string',
            'colour' => 'nullable|array',
            'composition' => 'nullable|array',
            'design_type' => 'nullable|array',
            'usage' => 'nullable|string',
            'note' => 'required|string',
            'currency' => 'required|string',
            'supplier_price' => 'nullable|numeric',
            'freight' => 'nullable|numeric',
            'duty_percentage' => 'nullable|numeric',
            'profit_percentage' => 'nullable|numeric',
            'gst_percentage' => 'nullable|numeric',
            'mrp' => 'nullable|numeric',
            'unit' => 'nullable|string',
        ]);

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Save the image and get the path
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // Create the product
        $product = Product::create([
            'product_name' => $request->input('product_name'),
            'type' => $request->input('type'),
            'tally_code' => $request->input('tally_code'),
            'file_number' => $request->input('file_number'),
            'supplier_name' => $request->input('supplier_name'),
            'supplier_collection' => $request->input('supplier_collection'),
            'supplier_collection_design' => $request->input('supplier_collection_design'),
            'design_sku' => $request->input('design_sku'),
            'rubs_martendale' => $request->input('rubs_martendale'),
            'width' => $request->input('width'),
            'image' => $imagePath,
            'image_alt' => $request->input('image_alt'),
            'colour' => json_encode($request->input('colour', [])),
            'composition' => json_encode($request->input('composition', [])),
            'design_type' => json_encode($request->input('design_type', [])),
            'usage_proj' => json_encode($request->input('usage', [])),
            'note' => $request->input('note'),
            'currency' => $request->input('currency'),
            'supplier_price' => $request->input('supplier_price'),
            'freight' => $request->input('freight'),
            'duty_percentage' => $request->input('duty_percentage'),
            'profit_percentage' => $request->input('profit_percentage'),
            'gst_percentage' => $request->input('gst_percentage'),
            'mrp' => $request->input('mrp'),
            'unit' => $request->input('unit'),
        ]);

        // Return a response, redirecting or showing a success message
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
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

