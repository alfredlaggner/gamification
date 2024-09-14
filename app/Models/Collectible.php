<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collectible extends Model
{
    use HasFactory;

    protected $fillable = [
        'shopify_id',
        'name',
        'description',
        'vendor',
        'product_type',
        'price',
        'inventory_quantity',
        'sku',
        'image_src',
        'rarity_id',
        'customer_id',
        
    ];

    // Relationship to Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relationship to Rarity
    public function rarity()
    {
        return $this->belongsTo(Rarity::class);
    }

    // Relationship to Order (many-to-many)
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
