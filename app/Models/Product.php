<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name if different from the default 'products'
    protected $table = 'products';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'product_name',
        'tally_code',
        'file_number',
        'supplier_name',
        'supplier_collection',
        'supplier_collection_design',
        'design_sku',
        'width',
        'rubs_martendale',
        'note',
        'supplier_price',
        'freight',
        'duty',
        'profit',
        'gst',
        'mrp',
        'unit',
        'color',
        'composition',
        'design_type',
        'usage',
        'type',
        'image_gallery',  // Added for storing image paths
    ];

    // Cast JSON fields to arrays
    protected $casts = [
        'color' => 'array',
        'composition' => 'array',
        'design_type' => 'array',
        'usage' => 'array',
        'type' => 'array',
        'image_gallery' => 'array',  // Automatically cast the image gallery to an array
    ];

    // Optionally, you can add accessors and mutators for custom behavior if needed
}
