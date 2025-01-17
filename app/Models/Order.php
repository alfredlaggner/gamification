<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total_amount', 'status'];

    public function collectibles()
    {
        return $this->belongsToMany(Collectible::class);
    }
}
