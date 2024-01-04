<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Adventure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $categoryList = Category::all();

        return view('categories', [
            'title' => 'Categories',
            'categories' => $categories,
            'active' => 'categories',
            "category" => $categoryList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $categories = Category::all();
        $categoryList = Category::all();
        // Retrieve adventures related to the category
        $adventures = $category->adventures->load('category', 'guide');

        // Retrieve other adventures, e.g., recent adventures
        $otherAdventures = Adventure::where('category_id', '!=', $category->id)->limit(5)->get();

        return view('adventures', [
            'title' => "Adventures by Category: $category->name",
            'adventures' => $adventures,
            'otherAdventures' => $otherAdventures,
            'active' => 'categories',
            'categories' => $categories,
            "category" => $categoryList

        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
