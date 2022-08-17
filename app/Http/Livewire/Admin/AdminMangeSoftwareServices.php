<?php

namespace App\Http\Livewire\Admin;

use App\Models\SoftwareService;
use Livewire\Component;

class AdminMangeSoftwareServices extends Component
{
    public function deleteSoftwareService($id){
        $s_service = SoftwareService::find($id);
        $s_service->delete();
        session()->flash('message','software service has been deleted successfully');
    }
    public function render()
    {
        $s_services = SoftwareService::paginate(10);
        return view('livewire.admin.admin-mange-software-services',['s_services'=>$s_services])->layout('layouts.admin');
    }
}
