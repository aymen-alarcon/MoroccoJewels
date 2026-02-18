<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Favorites = Favorite::all();
        // return view("Admin.Favorites", compact("Favorites"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Favorite $Favorite, Product $product)
    {
        $validate = $request->validate([]);

        $validate["product_id"] = $product->id;

        $validate["user_id"] = Auth::user()->id;

        $Favorite->create($validate);

        return redirect()->route("Home.Collection");
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorite $Favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite $Favorite)
    {
        $Favorite = Favorite::all();
        // return view("Admin.edit", compact("Favorite"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorite $Favorite)
    {
        $validate = $request->validate([
            "product_id" => "required|exists:orders,id",
            "user_id" => "required|exists:users,id",
        ]);

        $Favorite->update($validate);

        // return redirect()->route("Admin.Favorites");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite $Favorite)
    {
        $Favorite->delete();

        // return view("Admin.Favorites");
    }
}
