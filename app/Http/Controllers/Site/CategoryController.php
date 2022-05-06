<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
//use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Response;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CategoryController extends BaseController
{
   // @return \Illuminate\Http\Response

    public function index()
    {
        return view('site.category.index');
    }


    //@param int $id
    //@return \Illuminate\Http\Response

    public function show($slug)
    {
         return view('site.category.show', ['slug => $slug']);
    }

}