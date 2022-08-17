<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Partner;
use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\FreeSeminar;
use App\Models\HomeAds;
use App\Models\PopularCourses;

class HomeComponent extends Component
{
    public function render()
    {
        //display free-seminars to home page
        $freeseminars = FreeSeminar::all();
        // display comments to home page 
        $comments = Comment::all();
        // display popular courses to home page 
        $p_courses = PopularCourses::all();
        // display Slider with-video to home page 
        $slider = HomeSlider::where('status',1)->get();
        //displaying partners
        $partners = Partner::all();

        // display Ads
        $homeAds = HomeAds::all();
        return view('livewire.home-component',['slider'=>$slider,'p_courses'=>$p_courses,'comments'=>$comments,'freeseminars'=>$freeseminars,'partners'=>$partners,'homeAds'=>$homeAds])->layout('layouts.base');
    }
}
