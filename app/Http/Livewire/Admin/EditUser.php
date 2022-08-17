<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $name;
    public $email;
    public $phone;
    public $role;
    public $user_id;

    public function mount($user_id){
        $user = User::find($user_id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->role = $user->role;
        $this->user_id = $user->id;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required'
        ]);
    }

    public function updateUser(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required'
        ]);
        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->role = $this->role;
        $user->save();
        session()->flash('message', 'User data has been Updated Successfully');
    }
    public function render()
    {
        return view('livewire.admin.edit-user')->layout('layouts.admin');
    }
}
