<?php

namespace App\Http\Controllers\Site;


use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('site.blog.index');
    }
}