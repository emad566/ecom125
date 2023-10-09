<?php

namespace App\Livewire\Admin\Product;

use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\WithTable;
use App\Models\Product;
use App\Models\ProductVariant as Model;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductVariantComponent extends Component
{

    use WithTable, WithFileUploads;

    public Model $currentItem;
    public  $name;
    public Product $product;

    protected  const MODEL = Model::class;

    public function rules(){
        return [
            'name' => ['required','max:191'],
            'currentItem.status' => ['nullable']
        ];
    }

    function mount(Product $product)
    {
        $this->product = $product;
        $this->paginate_list = OptionsController::PAGINATE_LIST;
        $this->paginate = ConstantController::PAGINATE_PAGE_LENGTH;
        $this->resetInputFields();
    }
    public function edit(Model $item)
    {
        $this->resetInputFields();
        $this->is_edit = true;
        $this->currentItem = $item;
        $this->name = $item->name;
        $this->show_modal = true;
    }

    public function save()
    {
        $this->validate();
        $this->currentItem->name = $this->name;
        $this->currentItem->save();
        $this->cancel();
        $this->alertSuccess(__('Saved'));
        $this->dispatch('alert-saved');
    }

    private function resetInputFields(){
        $this->name='';
        $this->currentItem = Model::make(['product_id'=>$this->product->id]);
        $this->resetErrorBag();
    }



    function search()
    {
        $result = Model::search('name', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $result->get() : $result->paginate($this->paginate);
    }

    #[Layout('components.layouts.admin.master')]
    public function render()
    {
        return view('livewire.admin.product.product-variant-component', [
            'items'=> $this->search(),
        ]);
    }

}
