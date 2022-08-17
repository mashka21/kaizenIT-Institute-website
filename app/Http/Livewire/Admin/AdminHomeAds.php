<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeAds;
use Livewire\Component;

class AdminHomeAds extends Component
{
    public function render()
    {
        $homeAds = HomeAds::all();
        return view('livewire.admin.admin-home-ads',['homeAds'=>$homeAds])->layout('layouts.admin');
    }
}
