<?php

namespace MyCrud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MyCrud\Models\Category;
use MyCrud\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('views::categories.index', compact('categories'));
    }

    public function create()
    {
        return view('views::categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('views::categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('views::categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
