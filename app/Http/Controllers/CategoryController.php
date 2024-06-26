<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.category.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            // Add any other validation rules as needed
        ]);

        Category::create([
            'name' => $request->name,
            // Add any other fields as needed
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function delete($id)
    {
        $delete = Category::findOrFail($id);
        $delete->delete();
        return redirect()->route('categories.index')->with('success', 'Category Delele Succesfully');
    }



    
}
