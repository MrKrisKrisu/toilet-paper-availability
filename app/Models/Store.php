<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'last_checked'];
    protected $hidden = ['street', 'postal_code', 'city', 'last_checked', 'created_at', 'updated_at'];
    protected $appends = ['currentStock', 'address'];

    public function getCurrentStockAttribute()
    {
        $newestDate = ProductAvailability::where('store_id', $this->id)->orderBy('created_at', 'DESC')->limit(1)->first();
        if ($newestDate == null)
            return 0;

        return ProductAvailability::where('store_id', $this->id)
                                  ->where('created_at', $newestDate->created_at)
                                  ->get()
                                  ->sum('stock_level');
    }

    public function getAddressAttribute()
    {
        return strtr('street, postal city', [
            'street' => $this->street,
            'postal' => $this->postalCode,
            'city'   => $this->city,
        ]);
    }
}
