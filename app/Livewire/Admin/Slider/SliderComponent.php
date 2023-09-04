<?php

namespace App\Livewire\Admin\Slider;

use App\Http\Traits\WithTable;
use App\Models\Slider as Model;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class SliderComponent extends Component
{
    use WithTable, WithFileUploads;

    public Model $currentItem;
    public  $title;
    public $newBanner;

    protected  const MODEL = Model::class;

    public function rules(){
        return [
            'title' => ['required','max:191'],
            'currentItem.banner' => ['required','max:191'],
            'currentItem.type' => ['string', 'max:191'],
            'currentItem.starting_price' => ['max:1000'],
            'currentItem.btn_url' => ['url'],
            'currentItem.serial' => ['required', 'integer'],
            'currentItem.status' => ['nullable']
        ];
    }

    public function edit(Model $item)
    {
        $this->resetInputFields();
        $this->is_edit = true;
        $this->currentItem = $item;
        $this->title = $item->title;
        $this->show_modal = true;
    }

    public function save()
    {
        $this->validate();
        $this->currentItem->title = $this->title;
        $this->currentItem->save();
        $this->cancel();
        $this->alertSuccess(__('Saved'));
        $this->dispatch('alert-saved');
    }

    private function resetInputFields(){
        $this->title='';
        $this->newBanner='';
        $this->currentItem = Model::make();
        $this->resetErrorBag();
    }

    public function updatedNewBanner(){
        $this->validate([
            'newBanner' => 'image|max:1024'
        ]);
        $bannerName = $this->newBanner->store('/sliders', 'uploads');
        if($this->currentItem->banner){

        }
        $this->currentItem->banner =$bannerName;
        $this->alertSuccess(__('Banner Uploaded'));
    }
    function search()
    {
        $result = Model::search('title', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $result->get() : $result->paginate($this->paginate);
    }

    #[Layout('components.layouts.admin.master')]
    public function render()
    {
        return view('livewire.admin.slider.slider-component', [
            'items'=> $this->search(),
        ]);
    }
}
