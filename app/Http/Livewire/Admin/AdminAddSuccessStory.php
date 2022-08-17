<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SuccessStory;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddSuccessStory extends Component
{
    use WithFileUploads;

    public $video;

    public function updated($fields){
        $this->validateOnly($fields,[
            'video' => 'mimetypes:mp4|size:500000'
        ]);
    }

    public function addSuccessStory(){
        $this->validate([
            'video' => 'mimetypes:mp4|size:500000'
        ]);

        $s_story = new SuccessStory();
        $videoname = Carbon::now()->timestamp.'.'. $this->video->extension();
        $this->video->storeAs('SuccessStories',$videoname);
        $s_story->video = $videoname;
        $s_story->save();
        session()->flash('message','one video has been uploaded to the success-story page successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-success-story')->layout('layouts.admin');
    }
}
