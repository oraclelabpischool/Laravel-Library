<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $datas = Category::all();
        return view('welcome', compact('datas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name'
        ],[
            'category_name.required' => "Category is required boss!!",
            'category_name.unique' => "Category has already on database my bos!!",
        ]);

        Category::create([
            'category_name' => $request->category_name
        ]);

        return redirect("/home")->with("success", "category has ,been added!");
    }
}
