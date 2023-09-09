<?php

namespace App\Livewire\Admin\Category;

use App\Http\Traits\StatusSwitch;
use App\Http\Traits\Toast;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CategoryComponent extends Component
{
    use Toast;
    public $currentItem;
    public $is_edit = false;

    public function rules(){
        return [
            'currentItem.parent_id'=>'nullable|exists:categories,id',
            'currentItem.serial'=>'numeric',
            'currentItem.name'=>'required|min:1|max:191',
            'currentItem.slug'=>'required|min:1|max:191',
            'currentItem.icon'=>'nullable|min:1|max:191',
            'currentItem.status'=>'nullable',
        ];
    }

    public function cancel(){
        $this->is_edit=false;
        $this->newItem();
    }

    public function updatedCurrentItemName(){
        $this->currentItem->slug = str_replace(' ', '-', strtolower($this->currentItem->name));
    }

    public function mount(){
        $this->newItem();
        $this->dispatch('render');
    }

    public function save(){
        if($this->currentItem->parent_id = '') $this->currentItem->parent_id =0;

        $this->validate();
        if(Category::count()>0){
            $serial = Category::orderBy('serial', 'DESC')->first()->serial;
            $serial = intval($serial) + 1000;
        }else{
            $serial = 0;
        }
        $this->currentItem->serial = $serial;
        $this->currentItem->save();
        $this->alertSuccess(__('Saved'));
        $this->newItem();
        $this->dispatch('init_dragula');

    }

    function updateSerial(Category $item, Category $target, $loc)
    {
        if($loc){ // next
            DB::select('update categories set serial = serial -2 where serial<'.$target->serial);
            $item->update(['serial'=>$target->serial -1, 'parent_id'=>$target->parent_id]);
        } else{ // previous
            DB::select('update categories set serial = serial +2 where serial>'.$target->serial);
            $item->update(['serial'=>$target->serial +1, 'parent_id'=>$target->parent_id]);
        }
        $this->alertSuccess(__('Saved'));
        $this->dispatch('init_dragula');
    }

    function updateParent(Category $item, Category $target)
    {
        $item->update(['parent_id' => $target->id]);
        $this->alertSuccess(__('Saved'));
        $this->dispatch('init_dragula');

    }

    function update(){
        $this->currentItem->save();
        $this->alertSuccess(__('Saved'));
        $this->newItem();
        $this->dispatch('init_dragula');
        $this->is_edit=false;
    }

    function edit(Category $item){
        $this->is_edit=true;
        $this->currentItem = $item;

    }

    public function status_switch(Category $item, $name='status'){
        $item->update([$name => $item->$name? 0 : 1]);
        $this->alertSuccess(__('Saved'));
    }

    public function destroy(Category $item)
    {
        $item->delete();
        $this->dispatch('alert-delete');
        $this->dispatch('init_dragula');
    }

    protected  function newItem()
    {
        $this->currentItem = Category::make(['status'=>1, 'serial'=>0, 'parent_id'=>'', 'icon'=>'']);
    }

    #[Layout('components.layouts.admin.master')]
    public function render()
    {
//        $this->dispatch('render');
        return view('livewire.admin.category.category-componant',[
            'items'=>Category::orderBy('serial', 'ASC')->get()
        ]);
    }
}
