<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierCollectionDesign extends Model
{
    use HasFactory;

    protected $fillable = ['design_name']; // Mass assignable columns

    // If you want to disable timestamp management, uncomment the following line
    // public $timestamps = false;
}

