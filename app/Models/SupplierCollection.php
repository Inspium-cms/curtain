<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierCollection extends Model
{
    use HasFactory;

    // Define the table if it's not pluralized by default
    protected $table = 'supplier_collections';

    // Define the fillable columns
    protected $fillable = [
        'collection_name',
    ];

    // Optional: you can set timestamps to false if you're not using them
    public $timestamps = true;
}
