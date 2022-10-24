<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events= Event::all();
        $numberOfEvents=count($events);
        return view('home',compact('numberOfEvents'));
    }

   

}
