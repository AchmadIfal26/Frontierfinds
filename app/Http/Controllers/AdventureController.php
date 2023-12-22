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
        $adventures = [
            [
                "title" => "Adventure Pertama",
                "slug" => "adventure-pertama",
                "guide" => "Achmad Ifal",
                "duration" => "5 Hrs",
                "skill" => "All Level",
                "price" => "Rp. 500.000",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem necessitatibus doloribus quaerat. Quia, aliquam ipsum. Itaque quod autem temporibus in vel, nam magnam ea provident dignissimos eligendi non tempora nisi quasi nostrum consectetur totam nulla. Odio ipsam accusamus distinctio eaque id libero, aut ex. Eveniet a impedit cum adipisci suscipit amet beatae velit incidunt eaque ad porro, voluptas placeat explicabo voluptatum? Provident reiciendis voluptates, rerum vel illum repudiandae optio beatae at commodi, nemo labore ipsa possimus. Laudantium officia necessitatibus qui iste, et omnis ut a asperiores suscipit vitae. Repudiandae animi laborum aliquid tempora esse culpa inventore nam deserunt fugit asperiores."
            ],
            [
                "title" => "Adventure Kedua",
                "slug" => "adventure-kedua",
                "guide" => "Al Farazy",
                "duration" => "3 Hrs",
                "skill" => "All Level",
                "price" => "Rp. 250.000",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores hic repellendus sed quasi cum sapiente! Harum vel dolorem pariatur et aliquid molestiae. Dolore quis libero beatae quibusdam, quod laudantium quos dolorum magni aspernatur possimus accusantium ducimus odio eum voluptatibus maiores aliquid non necessitatibus eveniet iusto minima. Facere, sit. Vel nam culpa consequuntur quia a accusamus odit voluptatem, sapiente debitis dolores impedit, ut ab possimus eius ex dolorem sequi voluptatum inventore libero porro doloremque animi! Excepturi velit reiciendis, amet id a architecto dolore perspiciatis voluptatem odit aliquam ipsum esse. Corporis ullam voluptatibus perspiciatis ex pariatur repellat unde exercitationem! Voluptates, hic eveniet."
            ],
        ];

        return view('adventures', [
            "active" => "adventure",
            "title" => "Adventure",
            "adventures" => $adventures
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
    public function show($slug)
{
    $allAdventures = [
        [
            "title" => "Adventure Pertama",
            "slug" => "adventure-pertama",
            "guide" => "Achmad Ifal",
            "duration" => "5 Hrs",
            "skill" => "All Level",
            "price" => "Rp. 500.000",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem necessitatibus doloribus quaerat. Quia, aliquam ipsum. Itaque quod autem temporibus in vel, nam magnam ea provident dignissimos eligendi non tempora nisi quasi nostrum consectetur totam nulla. Odio ipsam accusamus distinctio eaque id libero, aut ex. Eveniet a impedit cum adipisci suscipit amet beatae velit incidunt eaque ad porro, voluptas placeat explicabo voluptatum? Provident reiciendis voluptates, rerum vel illum repudiandae optio beatae at commodi, nemo labore ipsa possimus. Laudantium officia necessitatibus qui iste, et omnis ut a asperiores suscipit vitae. Repudiandae animi laborum aliquid tempora esse culpa inventore nam deserunt fugit asperiores."
        ],
        [
            "title" => "Adventure Kedua",
            "slug" => "adventure-kedua",
            "guide" => "Al Farazy",
            "duration" => "3 Hrs",
            "skill" => "All Level",
            "price" => "Rp. 250.000",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores hic repellendus sed quasi cum sapiente! Harum vel dolorem pariatur et aliquid molestiae. Dolore quis libero beatae quibusdam, quod laudantium quos dolorum magni aspernatur possimus accusantium ducimus odio eum voluptatibus maiores aliquid non necessitatibus eveniet iusto minima. Facere, sit. Vel nam culpa consequuntur quia a accusamus odit voluptatem, sapiente debitis dolores impedit, ut ab possimus eius ex dolorem sequi voluptatum inventore libero porro doloremque animi! Excepturi velit reiciendis, amet id a architecto dolore perspiciatis voluptatem odit aliquam ipsum esse. Corporis ullam voluptatibus perspiciatis ex pariatur repellat unde exercitationem! Voluptates, hic eveniet."
        ],
    ];

    $new_adventure = [];

    foreach ($allAdventures as $adventure) {
        if ($adventure['slug'] === $slug) {
            $new_adventure = $adventure;
            break;
        }
    }

    return view('adventure', [
        "title" => "Single Adventure",
        "active" => "adventure",
        "adventure" => $adventure
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
