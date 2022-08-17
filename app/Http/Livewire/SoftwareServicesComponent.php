<?php

namespace App\Http\Livewire;

use App\Models\SoftwareService;
use Livewire\Component;

class SoftwareServicesComponent extends Component
{
    public function render()
    {
        $s_services = SoftwareService::all();
        return view('livewire.software-services-component',['s_services'=>$s_services])->layout('layouts.base');
    }
}
