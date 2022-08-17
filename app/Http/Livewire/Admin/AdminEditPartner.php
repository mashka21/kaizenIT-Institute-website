<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Partner;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditPartner extends Component
{
    use WithFileUploads;

    public $image;
    public $partner_id;
    public $newimage;

    public function mount($partner_id){
        $comment = Partner::find($partner_id);
        $this->image = $comment->image;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'image' => 'required'
        ]);
    }

    public function updatePartner(){
        $this->validate([
            'image' => 'required'
        ]);

        $comment = Partner::find($this->partner_id);
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Partner',$imagename);
            $comment->image = $imagename;
        }
        
        $comment->save();
        session()->flash('message','Partner has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-partner')->layout('layouts.admin');
    }
}
