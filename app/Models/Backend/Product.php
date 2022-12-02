<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        "cat_name",
        "brand_name",
        "desc",
        "images",
        "gallaries",
        "status"
    ];
}
