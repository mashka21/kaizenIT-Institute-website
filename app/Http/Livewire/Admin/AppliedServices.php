<?php

namespace App\Http\Livewire\Admin;

use App\Models\ApplyService;
use Livewire\Component;

class AppliedServices extends Component
{
    public function deleteApplied_Service($id){
        $applied_Service = ApplyService::find($id);
        $applied_Service->delete();
        session()->flash('message','applied service has been deleted successfully');
    }
    public function render()
    {
        $applied_Services = ApplyService::paginate(10);
        return view('livewire.admin.applied-services',['applied_Services'=>$applied_Services])->layout('layouts.admin');
    }
}
