<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\SoftwareService;

class AdminEditSoftwareServices extends Component
{
    use WithFileUploads;
    public $service_category;
    public $s_name;
    public $s_reviews;
    public $s_price;
    public $s_discount_price;
    public $s_image;
    public $service_id;
    public $s_newimage;


    public function mount($service_id){
        $s_service = SoftwareService::find($service_id);
        $this->service_category = $s_service->service_category;
        $this->s_name = $s_service->s_name;
        $this->s_reviews = $s_service->s_reviews;
        $this->s_price = $s_service->s_price;
        $this->s_discount_price = $s_service->s_discount_price;
        $this->s_image = $s_service->s_image;
        $this->service_id = $s_service->id;
    }
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

    public function updateSoftwareService(){
        $this->validate([
            'service_category' => 'required',
            's_name' => 'required',
            's_reviews' => 'required',
            's_price' => 'required',
            's_discount_price' => 'required',
            's_image' => 'required'
        ]);

        $s_service = SoftwareService::find($this->service_id);
        $s_service->service_category = $this->service_category;
        $s_service->s_name =$this->s_name;
        $s_service->s_reviews = $this->s_reviews;
        $s_service->s_price = $this->s_price;
        $s_service->s_discount_price = $this->s_discount_price;
        if($this->s_newimage){
            $s_imagename = Carbon::now()->timestamp.'.'. $this->s_newimage->extension();
            $this->s_newimage->storeAs('software_services',$s_imagename);
            $s_service->s_image = $s_imagename;
        }
        $s_service->save();
        session()->flash('message','software service has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-software-services')->layout('layouts.admin');
    }
}
