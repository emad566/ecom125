<?php

namespace App\Livewire\Admin\Product;

use App\Http\Traits\WithTable;
use App\Models\Product as Model;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProductComponent extends Component
{
    use WithTable;

    protected  const MODEL = Model::class;



    function search()
    {
        $result = Model::search('name', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $result->get() : $result->paginate($this->paginate);
    }

    #[Layout('components.layouts.admin.master')]
    public function render()
    {
        return view('livewire.admin.product.product-component', [
            'items'=> $this->search(),
        ]);
    }
}
