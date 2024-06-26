<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::all();
        $categorys = Category::all();
        return view('dashboard.movies.index', compact('movies','categorys'));
    }

    public function create()
    {
        $category = Category::all();
        return view('dashboard.movies.create', compact('category'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'unique_id' => 'required',
            'release_year' => 'required|date',
            'length' => 'required',
            'language' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'director' => 'required',
            'main_actress' => 'required',
            'main_actor' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');

        $movie = Movie::create([
            'title' => $validatedData['title'],
            'unique_id' => $validatedData['unique_id'],
            'release_year' => $validatedData['release_year'],
            'length' => $validatedData['length'],
            'language' => $validatedData['language'],
            'quantity' => $validatedData['quantity'],
            'category' => $validatedData['category'],
            'director' => $validatedData['director'],
            'main_actress' => $validatedData['main_actress'],
            'main_actor' => $validatedData['main_actor'],
            'description' => $validatedData['description'],
            'thumbnail' => $thumbnailPath
        ]);

        return redirect()->route('movies.index')->with('success', 'Movie added successfully.');
    }

    /**
     * 
     * Movie site view file 
     * 
     */
    public function view($id)
    {
        $movie = Movie::find($id);
        return view('dashboard.movies.view', compact('movie'));
    }



    /**
     * 
     * Movie site edit file 
     * 
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $category = Category::all();
        return view('dashboard.movies.edit', compact('movie','category'));
    }
    

    /**
     * 
     * Movie site dynamic search 
     * 
     */
    public function searchProduct(Request $request)
    {
        $search = $request->input('search');
        $cetagorys=Category::all();
        $searchProducts = Movie::where('title', 'like', "%$search%")->get();
        return view('dashboard.movies.search', compact('searchProducts','cetagorys'));
    }


    /**
     * 
     * Movie site Delete action  
     * 
     */
    public function destroy($id)
    {
        $delete = Movie::findOrFail($id);
        $delete->delete();
        return redirect()->route('movie.page')->with('success', 'DVD Has Been Delele Succesfully');
    }




    /**
     * 
     * Category wizen Movie show  
     * 
     */
     public function movie_by_cetagory($id)
    {
        $cetagorys=Category::all();
        $selectedCetagory=Category::where('id', $id)->first();
        $movie=Movie::where('category', $selectedCetagory->name)->get();
        return view('dashboard.movies.movie_by_cetagory', compact('cetagorys','movie'));
    }

    

    // public function catCount($category_id)
    // {
    //     $catCount = Movie::where('category_id', $category_id)->where('status',1)->count();
    //     return $catCount;
    // }

    



















    



}
