<?php

namespace App\Models;

use App\Http\Controllers\General\ConstantController;
use App\Http\Traits\StatusSwitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, HasTranslations, StatusSwitch;

    protected $fillable = [
        'name',
        'slug',
        'thumb_image',
        'vendor_id',
        'category_id',
        'brand_id',
        'qty',
        'short_description',
        'long_description',
        'video_link',
        'sku',
        'price',
        'offer_price',
        'offer_start_date',
        'offer_end_date',
        'product_type',
        'status',
        'is_approved',
        'seo_title',
        'seo_description',
    ];

    protected $translatable = [
        'name',
        'short_description',
        'long_description',
        'seo_title',
        'seo_description',
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productImageGalleries()
    {
        return $this->hasMany(ProductImageGallery::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    function getThumbImageSrcAttribute(): string
    {
        $src = Storage::disk('uploads')->url('/' .$this->thumb_image);
        return (file_exists(public_path($src)) && $this->thumb_image)? asset($src) : asset(ConstantController::NO_IMAGE);
    }
}
