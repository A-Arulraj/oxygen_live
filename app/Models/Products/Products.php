<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        "login_id",
        "product_id",
        "category",
        "category_main",
        "category_sub",
        "product_name",
        "tax_id",
        "gst_id",
        "product_image",
        "product_gallery_image",
        "description",
        "weight",
        "length",
        "width",
        "height",
        "specification",
        "offers",
        "collection",
        "flag",
        "status",
        "created_by"
    ];

    
}
