<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'last_checked', 'last_stock'];
    protected $hidden = ['street', 'postal_code', 'city', 'created_at', 'updated_at'];
    protected $appends = ['address'];
    protected $dates = ['last_checked'];

    public function getAddressAttribute()
    {
        return strtr('street, postal city', [
            'street' => $this->street,
            'postal' => $this->postal_code,
            'city'   => $this->city,
        ]);
    }

    public function productAvailabilities()
    {
        return $this->hasMany(ProductAvailability::class, 'store_id', 'id');
    }
}
