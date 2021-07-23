<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/pages/index');
    }

    public function event()
    {
        return view('frontend/pages/event');
    }
    
    public function about()
    {
        return view('frontend/pages/about');
    }

}
