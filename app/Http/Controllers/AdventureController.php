<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdventureRequest;
use App\Http\Requests\UpdateAdventureRequest;

class AdventureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adventures', [
            "active" => "adventure",
            "title" => "All Adventure",
            "adventures" => Adventure::latest()->get()

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
    public function store(StoreAdventureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adventure $adventure)
    {
        $otherAdventures = Adventure::whereNotIn('id', [$adventure->id])
        ->inRandomOrder()
        ->limit(5)
        ->get();

        return view('adventure', [
            "title" => "Single Adventure",
            "active" => "adventure",
            "adventure" => $adventure,
            "otherAdventures" => $otherAdventures,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adventure $adventure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdventureRequest $request, Adventure $adventure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adventure $adventure)
    {
        //
    }
}
