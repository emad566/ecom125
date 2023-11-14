<?php

namespace App\Models;

use App\Http\Controllers\General\ConstantController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImageGallery extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    function getImageSrcAttribute(): string
    {
        $src = Storage::disk('uploads')->url('/' .$this->image);
        return (file_exists(public_path($src)) && $this->image)? asset($src) : asset(ConstantController::NO_IMAGE);
    }
}
