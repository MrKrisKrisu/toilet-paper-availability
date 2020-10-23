<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAvailability extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'product_id', 'stock_level', 'created_at'];
    protected $hidden = ['updated_at'];
}
