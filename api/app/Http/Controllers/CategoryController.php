<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Category.listCategory', ['categories' => $categories]);
    }

    public function create()
    {
        return view('category.createCategory');
    }


    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);

        $categories = Category::all();
        return view('Category.listCategory', ['categories' => $categories]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.updateCategory', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $categoryId = Category::where('id', $id)->first();

        if ($categoryId) {
            $categoryId->name = $request->name;
            $categoryId->save();
        }

        $categories = Category::all();
        return view('Category.listCategory', ['categories' => $categories]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
        }
        $categories = Category::all();
        return view('Category.listCategory', ['categories' => $categories]);
    }
}
