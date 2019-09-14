<?php

namespace App\Http\Controllers\Admin;
use App\Topic;
class HomeController
{
    public function index()
    {
    	$topics = Topic::all();
        return view('home' , compact(['topics']));
    }
}
