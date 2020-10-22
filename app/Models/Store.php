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

    public function getAddressAttribute()
    {
        return strtr('street, postal city', [
            'street' => $this->street,
            'postal' => $this->postalCode,
            'city'   => $this->city,
        ]);
    }
}
