<?php

namespace App\Models;

use App\Http\Traits\StatusSwitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, StatusSwitch;

    public function childes(){
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent(){
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }
}
