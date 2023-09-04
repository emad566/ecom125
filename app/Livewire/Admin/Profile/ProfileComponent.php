<?php

namespace App\Livewire\Admin\Profile;

use App\Http\Traits\Toast;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileComponent extends Component
{
    use Toast, WithFileUploads;
    public User $currentItem;
    public $name;
    public $password;
    public $password_confirmation;
    public $newAvatar;

    protected function  rules ()
    {
        return [
            'name' => 'required|max:50|unique:users,name,'.$this->currentItem?->id,
            'currentItem.username' => 'required|max:50|unique:users,username,'.$this->currentItem?->id,
            'currentItem.email' => 'required|max:50|email|unique:users,email,'.$this->currentItem?->id,
            'currentItem.phone' => ['required', 'max:15'],
        ];
    }

    public function updatedNewAvatar(){
        $this->validate([
            'newAvatar' => 'image|max:1024'
        ]);
        $fileName = $this->newAvatar->store('/', 'avatars');
        auth()->user()->update(['image'=>$fileName]);
        $this->alertSuccess(__('Avatare Saved'));
    }

    public function mount()
    {
        $this->currentItem = User::find(auth()->user()->id);
        $this->name =  $this->currentItem->name;
    }

    public function save()
    {
        $this->validate();
        $this->currentItem->name = $this->name;
        $this->currentItem->save();
        $this->alertSuccess(__( 'Saved'));
    }

    public function savePassword()
    {
        $this->validate([
            'password' => 'required|confirmed|min:6|max:10',
            'password_confirmation' => 'required|min:6|max:10',
        ]);
        $this->currentItem->update(['password'=>$this->password]);
        $this->alertSuccess(__( 'Saved'));
    }



    #[Layout('components.layouts.admin.master')]
    public function render()
    {
        return view('livewire.admin.profile.profile-component');
    }
}
