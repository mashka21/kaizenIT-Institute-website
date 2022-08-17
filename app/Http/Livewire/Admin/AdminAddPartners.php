<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Partner;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddPartners extends Component
{
    use WithFileUploads;

    public $image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'image' => 'required'
        ]);
    }

    public function addComment(){
        $this->validate([
            'image' => 'required'
        ]);

        $comment = new Partner();
        $imagename = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('Partner',$imagename);
        $comment->image = $imagename;
        $comment->save();
        session()->flash('message','Partner has been added successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-partners')->layout('layouts.admin');
    }
}
