<?php

namespace App\Http\Controllers;

use App\Models\SupplierCollection;
use Illuminate\Http\Request;

class SupplierCollectionController extends Controller
{
    // Display a listing of the supplier collections
    public function index()
    {
        // Get all supplier collections (or paginate if needed)
        $collections = SupplierCollection::all();

        // Return the view with collections data
        return view('admin.master.suppliercollection', compact('collections'));
    }

    // Show the form for creating a new supplier collection
    public function create()
    {
        return view('admin.supplier-collections.create');
    }

    // Store a newly created supplier collection in the database
    public function store(Request $request)
    {
        $request->validate([
            'collection_name' => 'required|max:255',
        ]);

        // Create the new supplier collection
        SupplierCollection::create([
            'collection_name' => $request->collection_name,
        ]);

        return redirect()->route('supplier-collections.index')->with('success', 'Supplier Collection added successfully');
    }

    // Show the form for editing the specified supplier collection
    public function edit($id)
    {
        $collection = SupplierCollection::findOrFail($id);
        return response()->json($collection);
    }

    // Update the specified supplier collection in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'collection_name' => 'required|max:255',
        ]);

        $collection = SupplierCollection::findOrFail($id);
        $collection->update([
            'collection_name' => $request->collection_name,
        ]);

        return redirect()->route('supplier-collections.index')->with('success', 'Supplier Collection updated successfully');
    }

    // Remove the specified supplier collection from the database
    public function destroy($id)
    {
        $collection = SupplierCollection::findOrFail($id);
        $collection->delete();

        return redirect()->route('supplier-collections.index')->with('success', 'Supplier Collection deleted successfully');
    }
}
