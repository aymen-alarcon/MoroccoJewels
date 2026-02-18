<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
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
    return view('welcome');
})->name("Home");

Route::get('/Home/Collection', function (Request $request) {
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
    return view('Home.Collection', compact("categories", "products"));
});

Route::get('/Home/History', function () {
    return view('Home.History');
});

Route::get('/Home/Contact', function () {
    return view('Home.Contact');
});

Route::get('/Client/Collection/Details/{product}', function ($product) {
    $product = Product::findOrFail($product);
    return view('Home.CollectionInfo', compact("product"));
});

Route::get("/Auth/Login", function(){
    $roles = Role::all();
    return view("Auth.Login", compact("roles"));
})->middleware("guest");

Route::post("/Auth/Login/invoke", LoginController::class);

Route::get("/Auth/Register", function(){
    $roles = Role::all();
    return view("Auth.Register", compact("roles"));
})->middleware("guest");

Route::post('/Auth/Register/invoke', RegisterController::class);

Route::post("/Auth/LogOut", LogOutController::class)->middleware("auth");

Route::get("/Client/Cart", function(){
    return view("Client.Cart");
})->name("Client.Cart");

Route::get("/Client/Cart/addToCart/{product}", [CartController::class, "addToCart"])->middleware("auth");
Route::get("/Client/Cart/Destroy/{product}", [CartController::class, "removeFromCart"])->middleware("auth");

Route::get("/Client/Profile", function(){
    return view("Client.Profile.index");
})->middleware("auth")->name("Profile.index");

Route::get("/Client/Profile/Edit", function(){
    return view("Client.Profile.edit");
})->middleware("auth")->name("Profile.edit");

Route::put("/Client/Profile/Update/{user}", [UserController::class, "updateProfile"])->middleware("auth");


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
    Route::get('/Users/EditUser/{user}', [UserController::class, 'edit']);
    Route::put('/Users/EditUser/update/{user}', [UserController::class, 'update']);
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