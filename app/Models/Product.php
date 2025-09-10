<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="products";  // make sure this model work with table products
    // allow user can CRUD on this table
    protected $fillable=[
        'name',
        'price',
        'stock',
        'brand',
        'color',
        'image',
        'description'
    ];
}
