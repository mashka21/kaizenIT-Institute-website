<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class AdminManageContacts extends Component
{
    public function render()
    {
        $contacts = Contact::paginate(5);
        return view('livewire.admin.admin-manage-contacts',['contacts'=>$contacts])->layout('layouts.admin');
    }
}
