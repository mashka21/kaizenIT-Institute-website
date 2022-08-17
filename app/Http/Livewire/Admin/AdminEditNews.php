<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditNews extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $price;
    public $discount_price;
    public $starting_date;
    public $news_type;
    public $image;
    public $newimage;
    public $news_id;

    public function mount($news_id){
        $news = News::find($news_id);
        $this->title = $news->title;
        $this->description = $news->description;
        $this->price = $news->price;
        $this->discount_price = $news->discount_price;
        $this->starting_date = $news->starting_date;
        $this->news_type = $news->news_type;
        $this->image = $news->image;

    }
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'title'=>'required',
            'description'=>'required',
            'starting_date'=>'required',
            'news_type'=>'required',
            'image'=>'required'
        ]);
    }
    public function updateNews(){
        $this->validate([
            'title'=>'required',
            'description'=>'required',
            'starting_date'=>'required',
            'news_type'=>'required',
            'image'=>'required'
        ]);
        $news = News::find($this->news_id);
        $news->title = $this->title;
        $news->description = $this->description;
        $news->price = $this->price;
        $news->discount_price = $this->discount_price;
        $news->starting_date = $this->starting_date;
        $news->news_type = $this->news_type;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('News',$imagename);
            $news->image = $imagename;
        }
        $news->save();
        session()->flash('message','You have updated this news successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-news')->layout('layouts.admin');
    }
}
