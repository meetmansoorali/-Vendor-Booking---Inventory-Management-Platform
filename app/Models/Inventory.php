<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['user_id', 'item_name', 'total_stock', 'price_per_day'];

// Each inventory item belongs to a specific Vendor (User)
public function vendor()
{
    return $this->belongsTo(User::class, 'user_id');
}

// An inventory item can have multiple bookings over time
public function bookings()
{
    return $this->hasMany(Booking::class);
}
}
