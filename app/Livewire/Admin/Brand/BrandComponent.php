<?php

namespace App\Livewire\Admin\Brand;

use App\Http\Traits\WithTable;
use App\Models\Brand as Model;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class BrandComponent extends Component
{

    use WithTable, WithFileUploads;

    public Model $currentItem;
    public  $name;
    public $newLogo;

    protected  const MODEL = Model::class;

    public function rules(){
        return [
            'name' => ['required','max:191'],
            'currentItem.logo' => ['required','max:191'],
            'currentItem.slug' => ['string', 'max:191'],
            'currentItem.is_featured' => ['nullable'],
            'currentItem.status' => ['nullable']
        ];
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
        $this->newLogo='';
        $this->currentItem = Model::make();
        $this->resetErrorBag();
    }

    public function updatedNewLogo(){
        $this->validate([
            'newLogo' => 'image|max:1024'
        ]);
        $LogoName = $this->newLogo->store('/brands', 'uploads');
        if($this->currentItem->logo){

        }
        $this->currentItem->logo =$LogoName;
        $this->alertSuccess(__('Logo Uploaded'));
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
        return view('livewire.admin.brand.brand-component', [
            'items'=> $this->search(),
        ]);
    }

}
