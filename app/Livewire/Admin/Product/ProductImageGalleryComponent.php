<?php

namespace App\Livewire\Admin\Product;

use App\Http\Traits\Toast;
use App\Http\Traits\WithTable;
use App\Models\ProductImageGallery as Model;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductImageGalleryComponent extends Component
{
    use Toast, WithFileUploads, WithTable;
    protected  const MODEL = Model::class;
    public function rules(){
        return [
//            'name'=>'required|min:1|max:90',
        ];
    }



    #[Layout('components.layouts.admin.master')]
    public function render()
    {
        return view('livewire.admin.product.product-gallery-component');
    }
}
