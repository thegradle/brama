<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'quantity',
        'section_id',
        'seller_id'
    ];

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
