<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
class AdminDeleteUsers extends Component
{
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        session()->flash('message','User deleted successfully');
    }
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.admin.admin-delete-users',['users'=>$users])->layout('layouts.admin');
    }
}
