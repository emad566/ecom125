<?php

namespace App\Livewire\User\Home;

use App\Models\Brand;
use App\Models\Slider;
use Livewire\Component;

class HomeComponent extends Component
{
    public $sliders;
    public $brands;

    public function mount()
    {
        $this->sliders = Slider::active()->get();
        $this->brands = Brand::active()->get();
    }
    public function render()
    {
        return view('livewire.user.home.home');
    }
}
