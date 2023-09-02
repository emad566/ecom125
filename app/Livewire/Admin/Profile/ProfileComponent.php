<?php

namespace App\Livewire\Admin\Profile;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProfileComponent extends Component
{
    public User $user;

    public function mount()
    {
        $this->user = auth()->user();
    }

    #[Layout('components.layouts.admin.master')]
    public function render()
    {
        return view('livewire.admin.profile.profile-component');
    }
}
