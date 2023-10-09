<?php

namespace App\Models;

use App\Http\Traits\StatusSwitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductVariantItem extends Model
{
    use HasFactory, HasTranslations, StatusSwitch;
    protected $translatable = ['name'];

    protected $guarded = [];

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
