<?php

namespace App\Livewire\Admin\Product;

use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use App\Http\Traits\WithTable;
use App\Models\Product;
use App\Models\ProductImageGallery;
use App\Models\ProductImageGallery as Model;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductImageGalleryComponent extends Component
{
    use Toast, WithFileUploads, WithTable;
    public $product;
    public $images;
//    public $imageGallery;

    protected  const MODEL = Model::class;
    public function rules(){
        return [
//            'name'=>'required|min:1|max:90',
        ];
    }

    function mount($product)
    {
        $this->product = Product::find($product);
        $this->paginate_list = OptionsController::PAGINATE_LIST;
        $this->paginate = ConstantController::PAGINATE_PAGE_LENGTH;
        $this->resetInputFields();

    }

    public function updatedImages(){
        $this->validate([
            'images' => 'array',
            'images.*' => 'image|max:512'
        ]);
    }

    public function uploaddata(){
        if(!$this->images) return;
        foreach ($this->images as $image){
            $thumbName = $image->store('/products', 'uploads');
            ProductImageGallery::create(['image'=>$thumbName, 'product_id'=>$this->product->id]);
        }
        $this->alertSuccess('ok');
    }

    public function search(){
        return ProductImageGallery::where('product_id', $this->product->id)->get();
    }


    #[Layout('components.layouts.admin.master')]
    public function render()
    {
        return view('livewire.admin.product.product-gallery-component', [
            'items'=> $this->search(),
        ]);
    }
}
