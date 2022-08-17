<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use livewire\WithPagination;
class AdminEditUsers extends Component
{
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.admin.admin-edit-users',['users'=>$users])->layout('layouts.admin');
    }
}
