<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
class AdminAddNews extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $price;
    public $discount_price;
    public $starting_date;
    public $news_type;
    public $image;

    public function updated($fileds){
        $this->validateOnly($fileds,[
            'title'=>'required',
            'description'=>'required',
            'starting_date'=>'required',
            'news_type'=>'required',
            'image'=>'required'
        ]);
    }
    public function addNews(){
        $this->validate([
            'title'=>'required',
            'description'=>'required',
            'starting_date'=>'required',
            'news_type'=>'required',
            'image'=>'required'
        ]);
        $news = New News();
        $news->title = $this->title;
        $news->description = $this->description;
        $news->price = $this->price;
        $news->discount_price = $this->discount_price;
        $news->starting_date = $this->starting_date;
        $news->news_type = $this->news_type;
        $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('News',$imagename);
        $news->image = $imagename;
        $news->save();
        session()->flash('message','You have added news successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-news')->layout('layouts.admin');
    }
}
