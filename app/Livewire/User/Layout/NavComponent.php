<?php

namespace App\Livewire\User\Layout;

use App\Models\Category;
use Livewire\Component;

class NavComponent extends Component
{
    public $cats;
    public function mount(){
        $this->cats = Category::active()->where('parent_id', 0)->orderBy('serial', 'ASC')->get();
    }
    public function render()
    {
        return view('livewire.user.layout.nav-component');
    }
}
