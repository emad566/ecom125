<?php

namespace App\Livewire\Vendor\Profile;

use App\Http\Traits\Toast;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileComponent extends Component
{
    use Toast, WithFileUploads;
    public User $currentItem;
    public $name;
    public $about;
    public $password;
    public $currentPassword;
    public $password_confirmation;
    public $newAvatar;

    protected function  rules ()
    {
        return [
            'name' => 'required|max:50|unique:users,name,'.$this->currentItem?->id,
            'about' => 'nullable|max:191',
            'currentItem.username' => 'required|max:50|unique:users,username,'.$this->currentItem?->id,
            'currentItem.email' => 'required|max:50|email|unique:users,email,'.$this->currentItem?->id,
            'currentItem.phone' => ['required', 'max:15'],
        ];
    }

    public function updatedNewAvatar(){
        $this->validate([
            'newAvatar' => 'image|max:1024'
        ]);
        $fileName = $this->newAvatar->store('/avatars', 'uploads');
        auth()->user()->update(['image'=>$fileName]);
        $this->alertSuccess(__('Avatare Saved'));
    }

    public function mount()
    {
        $this->currentItem = auth()->user();
        $this->name =  $this->currentItem->name;
        $this->about =  $this->currentItem->about;
    }

    public function save()
    {
        $this->validate();
        $this->currentItem->name = $this->name;
        $this->currentItem->about = $this->about;
        $this->currentItem->save();
        $this->alertSuccess(__( 'Saved'));
    }

    public function savePassword()
    {
        $this->validate([
            'currentPassword' => 'required|min:6|max:20',
            'password' => 'required|confirmed|min:6|max:10',
            'password_confirmation' => 'required|min:6|max:10',
        ]);

        if (!Hash::check($this->currentPassword, $this->currentItem->password)) {
            $this->addError('currentPassword', __('Not valid current password'));
            $this->alertError(__( 'Not valid current password'));
            return;
        }

        $this->currentItem->update(['password'=>$this->password]);
        $this->alertSuccess(__( 'Saved'));
    }


    #[Layout('components.layouts.vendor.master')]
    public function render()
    {
        return view('livewire.vendor.profile.profile-component');
    }
}
