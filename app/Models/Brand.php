<?php

namespace App\Models;

use App\Http\Controllers\General\ConstantController;
use App\Http\Traits\StatusSwitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Brand extends Model
{
    use HasFactory, HasTranslations, StatusSwitch;
    protected $table ='brands';
    protected $guarded = [];

    protected $translatable = ['name'];


    function getLogoSrcAttribute(): string
    {
        $src = Storage::disk('uploads')->url('/' .$this->logo);
        return (file_exists(public_path($src)) && $this->logo)? asset($src) : asset(ConstantController::NO_IMAGE);
    }

    public function getIsFeaturedSwitchAttribute(){
        return $this->status? 'checked="checked"' : '';
    }

    public function getIsFeaturedAttribute($value){
        return $value? true : false;
    }

}
