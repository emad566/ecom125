<?php

namespace App\Models;

use App\Http\Controllers\General\ConstantController;
use App\Http\Traits\StatusSwitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory, HasTranslations, StatusSwitch;
    protected $table ='sliders';
    protected $guarded = [];

    protected $translatable = ['title'];

    function getBannerSrcAttribute(): string
    {
        $src = Storage::disk('uploads')->url('/' .$this->banner);
        return (file_exists(public_path($src)) && $this->banner)? asset($src) : asset(ConstantController::NO_IMAGE);
    }
}
