<?php

namespace App\Models;

use App\Http\Traits\StatusSwitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductVariant extends Model
{
    use HasFactory, HasTranslations, StatusSwitch;
    protected $translatable = ['name'];

    protected $guarded = [];
    public function productVariantItems()
    {
        return $this->hasMany(ProductVariantItem::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
