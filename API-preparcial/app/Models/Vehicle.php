<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',
        'model',
        'year',
        'type',
        'price',
        'description',
        'is_available',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected static function newFactory()
    {
        return \Database\Factories\VehicleFactory::new();
    }
}
