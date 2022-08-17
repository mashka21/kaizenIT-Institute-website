<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SuccessStory;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminEditSuccessStory extends Component
{
    use WithFileUploads;

    public $video;
    public $newvideo;
    public $story_id;

    public function mount($story_id){
        $s_story = SuccessStory::find($story_id);
        $this->video = $s_story->video;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'video' => 'file|max:102400'
        ]);
    }

    public function updateSuccessStory(){
        $this->validate([
            'video' => 'file|max:102400'
        ]);

        $s_story = SuccessStory::find($this->story_id);
        if($this->newvideo){
            $videoname = Carbon::now()->timestamp.'.'. $this->newvideo->extension();
            $this->newvideo->storeAs('SuccessStories',$videoname);
            $s_story->video = $videoname;
        }
        $s_story->save();
        session()->flash('message','one video has been updated to the success-story page successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-success-story')->layout('layouts.admin');
    }
}
