<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['customer_id', 'vendor_id', 'inventory_id', 'start_date', 'end_date', 'total_price', 'status'];

// The booking belongs to a Customer
public function customer()
{
    return $this->belongsTo(User::class, 'customer_id');
}

// The booking belongs to a Vendor
public function vendor()
{
    return $this->belongsTo(User::class, 'vendor_id');
}

// The booking belongs to a specific inventory item
public function inventory()
{
    return $this->belongsTo(Inventory::class);
}
}
