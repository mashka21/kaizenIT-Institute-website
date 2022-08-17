<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeAds;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;


class AdminEditHomeAds extends Component
{
    use WithFileUploads;
    public $status;
    public $image;
    public $newImage;
    public $Ads_id;

    public function mount($id){
        $homeAds = HomeAds::where('id',$id)->first();
        $this->status = $homeAds->status;
        $this->image = $homeAds->image;
        $this->Ads_id = $homeAds->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'status' => 'required',
            'image' => 'required',
        ]);
    }

    public function updateAds(){
        $this->validate([
            'status' => 'required',
            'image' => 'required',
        ]);

        $homeAds = HomeAds::find($this->Ads_id);
        $homeAds->status = $this->status;
        if($this->newImage)
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('homeAds',$imageName);
            $homeAds->image = $imageName;
        }
        $homeAds->save();
        session()->flash('message','successfully Updated');

    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-ads')->layout('layouts.admin');
    }
}
