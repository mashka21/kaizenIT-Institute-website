<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
class AdminShowUsers extends Component
{
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.admin.admin-show-users',['users'=>$users])->layout('layouts.admin');
    }
}
