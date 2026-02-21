<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
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
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite $Favorite, $productId, $userId)
    {
        $fav = Favorite::query()
            ->where("user_id", $userId)
            ->where("product_id", $productId)
            ->get();

        foreach($fav as $item){
            $favoriteObject = $Favorite->findOrFail($item->id);
        }

        $favoriteObject->delete();

        return redirect()->route("Profile.index");
    }
}
