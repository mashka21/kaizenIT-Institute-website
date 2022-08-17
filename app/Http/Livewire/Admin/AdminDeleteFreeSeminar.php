<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDeleteFreeSeminar extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-delete-free-seminar')->layout('layouts.admin');
    }
}
