<?php

namespace App\Livewire\Vendor\Home;
use Livewire\Attributes\Layout;
use Livewire\Component;

class VendorComponent extends Component
{

    #[Layout('components.layouts.vendor.master')]
    public function render()
    {
        return view('livewire.vendor.home.home-component');
    }
}
