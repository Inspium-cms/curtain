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
        'type',
        'tally_code',
        'file_number',
        'supplier_name',
        'supplier_collection',
        'supplier_collection_design',
        'design_sku',
        'rubs_martendale',
        'width',
        'image',
        'image_alt',
        'colour',
        'composition',
        'design_type',
        'usage',
        'note',
        'currency',
        'supplier_price',
        'freight',
        'duty_percentage',
        'profit_percentage',
        'gst_percentage',
        'mrp',
        'unit',
    ];

    // Optionally, you can add accessors and mutators for custom behavior if needed
}
