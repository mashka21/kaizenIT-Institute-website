<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsComponent extends Component
{
    public function render()
    {
        $news = News::all();
        return view('livewire.news-component',['news'=>$news])->layout('layouts.base');
    }
}
