<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    $workers = User::whereIn("role_id", [3, 4])->get();
    return view('welcome', compact("workers"));
})->name("Home");

Route::prefix("Home")->group(function(){
    Route::get('/Collection', function (Request $request) {
        $query = Product::query();
        
        if ($request->has("categories")) {
            $query->whereIn('category_id', $request->categories);
        }

        if ($request->sort === 'latest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($request->sort === 'price_asc') {
            $query->orderBy('price', 'asc');
        } elseif ($request->sort === 'price_desc') {
            $query->orderBy('price', 'desc');
        }    

        $products = $query->paginate(8)->withQueryString();
        $categories = Category::all();
        $user = Auth::user();
        return view('Home.Collection', compact("categories", "products", "user"));
    })->name("Home.Collection");

    Route::get('/History', function () {
        return view('Home.History');
    });

    Route::get('/Contact', function () {
        return view('Home.Contact');
    });

    Route::get('/Collection/Details/{product}', function ($product) {
        $product = Product::findOrFail($product);
        return view('Home.CollectionInfo', compact("product"));
    });
});

Route::prefix("Auth")->group( function(){
    Route::get("/Login", function(){
        $roles = Role::all();
        return view("Auth.Login", compact("roles"));
    })->middleware("guest");

    Route::post("/Login/invoke", LoginController::class);

    Route::get("/Register", function(){
        $roles = Role::all();
        return view("Auth.Register", compact("roles"));
    })->middleware("guest");

    Route::post('/Register/invoke', RegisterController::class);

    Route::post("/LogOut", LogOutController::class)->middleware("auth");
});

Route::prefix("Client")->group(function(){
    Route::get("/Cart", function(){
        return view("Client.Cart");
    })->name("Client.Cart");

    Route::get("/Cart/addToCart/{product}", [CartController::class, "addToCart"]);
    Route::get("/Cart/Destroy/{product}", [CartController::class, "removeFromCart"]);

    Route::get("/Profile", function(){
        return view("Client.Profile.index");
    })->name("Profile.index");

    Route::get("/Profile/Edit", function(){
        return view("Client.Profile.edit");
    })->name("Profile.edit");

    Route::put("/Profile/Update/{user}", [UserController::class, "updateProfile"]);
    Route::get("/AddToFavorites/{product}", [FavoriteController::class, "store"]);
    Route::get("/RemoveFromFavorites/{favorite}", [FavoriteController::class, "store"]);
})->middleware("auth");

Route::prefix('Admin')->middleware('auth')->group(function () {
    Route::get('/Dashboard', function () {
        $categoriesCount = Category::count();
        $productsCount = Product::count();
        $rolesCount = Role::count();
        $usersCount = User::count();
        $orders = Order::all();
        $ordersCount = $orders->count();
        return view('Admin.Dashboard', compact('categoriesCount', 'productsCount', 'rolesCount', 'usersCount', 'orders', 'ordersCount'));
    });

    Route::get('/Profile', function () {
        return view('Admin.Profile');
    });

    Route::get('/Logs', function () {
        return view('Admin.AdminLogs');
    });

    Route::get('/Orders', [OrderController::class, 'index'])->name('Admin.Orders.Index');

    Route::get('/Products', [ProductController::class, 'index'])->name('Admin.Products.Index');
    Route::get('/Products/AddProduct', [ProductController::class, 'create']);
    Route::post('/Products/AddProduct/store', [ProductController::class, 'store']);
    Route::get('/Products/EditProduct/{product}', [ProductController::class, 'edit']);
    Route::put('/Products/EditProduct/update/{product}', [ProductController::class, 'update']);
    Route::delete('/Products/destroy/{product}', [ProductController::class, 'destroy']);

    Route::get('/Users', [UserController::class, 'index'])->name('Admin.Users.Index');
    Route::get('/Users/AddUser', [UserController::class, 'create']);
    Route::post('/Users/AddUser/store', [UserController::class, 'store']);
    Route::get('/Users/EditUser/{userInfo}', [UserController::class, 'edit']);
    Route::put('/Users/EditUser/update/{userInfo}', [UserController::class, 'update']);
    Route::delete('/Users/destroy/{user}', [UserController::class, 'destroy']);

    Route::get('/Roles', [RoleController::class, 'index'])->name('Admin.Roles.Index');
    Route::get('/Roles/AddRole', [RoleController::class, 'create']);
    Route::post('/Roles/AddRole/store', [RoleController::class, 'store']);
    Route::get('/Roles/EditRole/{role}', [RoleController::class, 'edit']);
    Route::put('/Roles/EditRole/update/{role}', [RoleController::class, 'update']);
    Route::delete('/Roles/destroy/{role}', [RoleController::class, 'destroy']);

    Route::get('/Categories', [CategoryController::class, 'index'])->name('Admin.Categories.Index');
    Route::get('/Categories/AddCategory', [CategoryController::class, 'create']);
    Route::post('/Categories/AddCategory/store', [CategoryController::class, 'store']);
    Route::get('/Categories/EditCategory/{category}', [CategoryController::class, 'edit']);
    Route::put('/Categories/EditCategory/update/{category}', [CategoryController::class, 'update']);
    Route::delete('/Categories/destroy/{category}', [CategoryController::class, 'destroy']);
});

Route::post('/Order/Store', [OrderController::class, "store"]);
Route::get('/OrderItems/Store/{order_id}', [OrderItemsController::class, "store"])->name("OrderItem.store");