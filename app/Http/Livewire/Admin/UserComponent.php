<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{
    public $modalAdd = false;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    //Function to add a new user
    public function add()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        $this->reset('name','email','password','password_confirmation');
        $this->modalAdd = false;
    }

    //Function to delete a user
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    //Function to restore a user
    public function restore($id)
    {
        $user = User::withTrashed()->find($id);
        $user->restore();
    }


    public function render()
    {
        return view('livewire.admin.user-component',[
            'users' => User::withTrashed()->get(),
        ]);
    }
}
