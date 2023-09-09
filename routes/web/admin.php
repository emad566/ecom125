<?php
namespace App\Http\Controllers\Web\Dashboard;
use App\Livewire\Admin\Category\CategoryComponent;
use App\Livewire\Admin\Home\HomeComponent;
use App\Livewire\Admin\Profile\ProfileComponent;
use App\Livewire\Admin\Brand\BrandComponent;
use App\Livewire\Admin\Slider\SliderComponent;
use Illuminate\Support\Facades\Route;


Route::get('dashboa
rd', HomeComponent::class)->name('dashboard');
Route::get('profile/edit', ProfileComponent::class)->name('profile.edit');
Route::group(['prefix' => 'manages'], function(){
    Route::get('sliders', SliderComponent::class)->name('sliders');
    Route::get('sliders', BrandComponent::class)->name('brands');
});

Route::group(['prefix' => 'categories'], function(){
    Route::get('index', CategoryComponent::class)->name('categories.index');
});

