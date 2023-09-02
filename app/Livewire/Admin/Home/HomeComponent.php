<?php

namespace App\Livewire\Admin\Home;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomeComponent extends Component
{

    #[Layout('components.layouts.admin.master')]
    public function render()
    {
        return view('livewire.admin.home.home-component');
    }
}
