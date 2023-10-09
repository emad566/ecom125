<?php
namespace App\Http\Controllers\Web\Dashboard;
use App\Livewire\Admin\Category\CategoryComponent;
use App\Livewire\Admin\Home\HomeComponent;
use App\Livewire\Admin\Product\CreateProductComponent;
use App\Livewire\Admin\Product\ProductComponent;
use App\Livewire\Admin\Product\ProductImageGalleryComponent;
use App\Livewire\Admin\Product\ProductVariantComponent;
use App\Livewire\Admin\Profile\ProfileComponent;
use App\Livewire\Admin\Brand\BrandComponent;
use App\Livewire\Admin\Slider\SliderComponent;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', HomeComponent::class)->name('dashboard');
Route::get('profile/edit', ProfileComponent::class)->name('profile.edit');
Route::group(['prefix' => 'manages'], function(){
    Route::get('sliders', SliderComponent::class)->name('sliders');
});

Route::group(['prefix' => 'categories'], function(){
    Route::get('index', CategoryComponent::class)->name('categories.index');
});

Route::group(['prefix' => 'products'], function(){
    Route::get('index', ProductComponent::class)->name('products.index');
    Route::get('{productId?}', CreateProductComponent::class)->name('products.create');
    Route::get('brands/index', BrandComponent::class)->name('brands.index');
    Route::get('imagegallery/{product}', ProductImageGalleryComponent::class)->name('imagegallery.index');
    Route::get('variants/{product}', ProductVariantComponent::class)->name('variants.index');
});

