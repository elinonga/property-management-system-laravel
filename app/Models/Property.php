<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'area',
        'desc',
        'price',
        'price_label',
        'status',
        'type',
        'bedrooms',
        'bathrooms',
        'lot_area',
        'year_built',
        'flooring',
        'garage_size',
        'roofling',
        'parking',
        'style',
        'address',
        'location',
        'sub_location',
        'long',
        'lat',
        'video',
        'image'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
