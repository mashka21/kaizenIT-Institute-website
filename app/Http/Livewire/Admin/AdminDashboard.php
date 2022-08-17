<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admission;
use App\Models\ApplyService;
use App\Models\Contact;
use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        $ladmissions = Admission::paginate(10);
        $lcontacts = Contact::paginate(10);
        $applied_Services = ApplyService::paginate(10);
        return view('livewire.admin.admin-dashboard',['ladmissions'=>$ladmissions,'lcontacts'=>$lcontacts,'applied_Services'=>$applied_Services])->layout('layouts.admin');
    }
}
