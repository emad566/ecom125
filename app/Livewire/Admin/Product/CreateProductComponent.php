<?php

namespace App\Livewire\Admin\Product;

use App\Http\Traits\Toast;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProductComponent extends Component
{
    use Toast, WithFileUploads;
    public Product $product;
    public $categories;
    public $brands;
    public bool $is_edit;
    public $name;
    public $short_description;
    public $long_description;
    public $seo_title;
    public $seo_description;
    public $newThumb;
    public $newGalleries;

    public function rules(){
        return [
            'name'=>'required|min:1|max:90',
            'product.slug'=>'required|min:1|max:100',
            'short_description'=>'required|min:1|max:191',
            'long_description'=>'required|min:1|max:1000',
            'seo_title'=>'nullable|min:1|max:100',
            'seo_description'=>'nullable|min:1|max:191',
            'product.thumb_image'=>'required|min:4|max:191',
            'product.vendor_id'=>'nullable|exists:users,id',
            'product.category_id'=>'required|exists:categories,id',
            'product.brand_id'=>'nullable|exists:brands,id',
            'product.video_link'=>'nullable|url|min:1|max:191',
            'product.sku'=>'required|min:3|max:191',
            'product.qty'=>'required|numeric|min:1|max:1000',
            'product.price'=>'required|numeric|min:1|max:100000',
            'product.offer_price'=>'nullable|numeric|min:1|max:100000',
            'product.offer_start_date'=>'nullable|date_format:Y-m-d|after:yesterday',
            'product.offer_end_date'=>'nullable||date_format:Y-m-d|after:product.offer_start_date',
            'product.product_type'=>'nullable|min:1|max:191',
            'product.status'=>'nullable',
            'product.is_approved'=>'nullable',
        ];
    }

    public function mount($productId = "")
    {
        $this->is_edit = $productId? true : false;
        $this->product = $productId? Product::find($productId) : Product::make(['vendor_id'=>Auth::id()]);
        $this->categories = Category::active()->get();
        $this->brands = Brand::active()->get();
        if ($this->is_edit){
            $this->product->vendor_id = Auth::id();
            $this->name = $this->product->name;
            $this->short_description = $this->product->short_description;
            $this->long_description = $this->product->long_description;
            $this->seo_title = $this->product->seo_title;
            $this->seo_description = $this->product->seo_description;
        }
    }

    public function updatedName()
    {
        $this->product->slug = str_replace([' ', '_'], '-', $this->name);
    }

    public function updatedNewThumb(){
        $this->validate([
            'newThumb' => 'image|max:512'
        ]);
        $thumbName = $this->newThumb->store('/products', 'uploads');

        $this->product->thumb_image =$thumbName;
    }
    public function updatedNewGallries(){
        $this->alertError('ok');
        return;

        $this->validate([
            'newThumb' => 'image|max:512'
        ]);
        $thumbName = $this->newThumb->store('/products', 'uploads');

        $this->product->thumb_image =$thumbName;
    }

    public function cancel()
    {
        $this->product = $this->is_edit ? Product::find($this->product->id) : Product::make(['vendor_id'=>Auth::id()]);
        $this->name = '';
        $this->short_description = '';
        $this->long_description = '';
        $this->seo_title = '';
        $this->seo_description = '';
        $this->newThumb = '';

    }

    public function save()
    {
        $this->product->name = $this->name;
        $this->product->short_description = $this->short_description;
        $this->product->long_description = $this->long_description;
        $this->product->seo_title = $this->seo_title;
        $this->product->seo_description = $this->seo_description;
        $this->validate();
        $this->product->save();
        $this->alertSuccess(__('Saved'));
    }

    #[Layout('components.layouts.admin.master')]
    public function render()
    {
        $this->dispatch('gallery');
        return view('livewire.admin.product.create-product-component');
    }
}
