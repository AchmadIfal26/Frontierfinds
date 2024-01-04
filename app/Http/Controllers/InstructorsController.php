<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Instructors;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInstructorsRequest;
use App\Http\Requests\UpdateInstructorsRequest;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryList = Category::all();

        return view('instructors', [
            "active" => "instructors",
            "title" => "Instructors",
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
    public function store(StoreInstructorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructors $instructors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructors $instructors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstructorsRequest $request, Instructors $instructors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructors $instructors)
    {
        //
    }
}
