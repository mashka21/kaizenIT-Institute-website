<?php

namespace App\Http\Livewire\Admin;

use App\Models\Partner;
use Livewire\Component;

class AdminManagePartners extends Component
{
    
    public function deletePartner($id){
        $partner = Partner::find($id);
        $partner->delete();
        session()->flash('message','Partner has been deleted successfully');
    }
    public function render()
    {
        $partners = Partner::paginate(5);
        return view('livewire.admin.admin-manage-partners',['partners'=>$partners])->layout('layouts.admin');
    }
}
