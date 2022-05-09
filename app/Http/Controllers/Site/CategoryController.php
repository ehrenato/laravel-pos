<?php

namespace App\Http\Controllers\Site;


use Illuminate\Routing\Controller;
use App\Category;


class CategoryController extends Controller
{
    public function index()
    {
        return view('site.category.index', ['categories' => Category::all(),]);
    }

    public function show(Category $category)
    {
        return view('site.category.show', ['category' => $category->load('products')]);
    }

}
