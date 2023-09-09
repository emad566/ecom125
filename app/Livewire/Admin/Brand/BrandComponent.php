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
    public $newFile;
    public $newFileName;

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

    public function updatedNewBanner(){
        $this->validate([
            'newFile' => 'image|max:1024'
        ]);
        $this->newFileName = $this->newFile->store('/brands', 'uploads');
        $this->currentItem->logo = $this->newFileName;
        $this->alertSuccess(__('Banner Uploaded'));
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
        $this->newFile='';
        $this->currentItem = Model::make();
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
        return view('livewire.admin.brand.brand-component', [
            'items'=> $this->search(),
        ]);
    }
}
