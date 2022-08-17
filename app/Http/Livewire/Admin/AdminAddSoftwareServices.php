<?php

namespace App\Http\Livewire\Admin;

use App\Models\SoftwareService;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddSoftwareServices extends Component
{
    use WithFileUploads;
    public $service_category;
    public $s_name;
    public $s_reviews;
    public $s_price;
    public $s_discount_price;
    public $s_image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'service_category' => 'required',
            's_name' => 'required',
            's_reviews' => 'required',
            's_price' => 'required',
            's_discount_price' => 'required',
            's_image' => 'required'
        ]);
    }

    public function addSoftwareService(){
        $this->validate([
            'service_category' => 'required',
            's_name' => 'required',
            's_reviews' => 'required',
            's_price' => 'required',
            's_discount_price' => 'required',
            's_image' => 'required'
        ]);

        $s_service = new SoftwareService();
        $s_service->service_category = $this->service_category;
        $s_service->s_name =$this->s_name;
        $s_service->s_reviews = $this->s_reviews;
        $s_service->s_price = $this->s_price;
        $s_service->s_discount_price = $this->s_discount_price;
        $s_imagename = Carbon::now()->timestamp.'.'. $this->s_image->extension();
        $this->s_image->storeAs('software_services',$s_imagename);
        $s_service->s_image = $s_imagename;
        $s_service->save();
        session()->flash('message','software service has been added successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-software-services')->layout('layouts.admin');
    }
}
