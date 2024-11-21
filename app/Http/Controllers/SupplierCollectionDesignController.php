<?php

namespace App\Http\Controllers;

use App\Models\SupplierCollectionDesign;
use Illuminate\Http\Request;

class SupplierCollectionDesignController extends Controller
{
    // Display all supplier collection designs
    public function index()
    {
        $supplierCollectionDesigns = SupplierCollectionDesign::all();
        return view('admin.master.suppliercollectiondesign', compact('supplierCollectionDesigns'));
    }

    // Show the form to create a new supplier collection design
    public function create()
    {
        // Just return the view for creation if needed
    }

    // Store a new supplier collection design
    public function store(Request $request)
    {
        $request->validate([
            'design_name' => 'required|max:255',
        ]);

        SupplierCollectionDesign::create([
            'design_name' => $request->design_name,
        ]);

        return redirect()->route('supplierCollectionDesigns.index')
                         ->with('success', 'Supplier Collection Design added successfully!');
    }

    // Show the form to edit an existing supplier collection design
    public function edit($id)
    {
        $design = SupplierCollectionDesign::findOrFail($id);
        return response()->json($design);
    }

    // Update an existing supplier collection design
    public function update(Request $request, $id)
    {
        $request->validate([
            'design_name' => 'required|max:255',
        ]);

        $design = SupplierCollectionDesign::findOrFail($id);
        $design->update([
            'design_name' => $request->design_name,
        ]);

        return redirect()->route('supplierCollectionDesigns.index')
                         ->with('success', 'Supplier Collection Design updated successfully!');
    }

    // Delete a supplier collection design
    public function destroy($id)
    {
        $design = SupplierCollectionDesign::findOrFail($id);
        $design->delete();

        return redirect()->route('supplierCollectionDesigns.index')
                         ->with('success', 'Supplier Collection Design deleted successfully!');
    }
}

