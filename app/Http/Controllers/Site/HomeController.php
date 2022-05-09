<?php

namespace App\Http\Controllers\Site;


use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.home.index');
    }
}