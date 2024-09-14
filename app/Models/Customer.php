<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'shopify_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'orders_count',
        'total_spent',
        'currency',
        'state',
        'address1',
        'address2',
        'city',
        'province',
        'zip',
        'country_code',
        'country_name',
        'total_base_points',
        'total_redeemable_points',
    ];

    public function collectibles()
    {
        return $this->hasMany(Collectible::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }

}
