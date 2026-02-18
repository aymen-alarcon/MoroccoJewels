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

Route::get("/Admin/Profile", function(){
    return view("Admin.Profile");
})->middleware("auth");

Route::get("/Admin/Logs", function(){
    return view("Admin.AdminLogs");
})->middleware("auth");

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
    $user = Auth::user();
    return view("Client.Profile.index", compact("user"));
})->middleware("auth")->name("Profile.index");

Route::get("/Client/Profile/Edit", function(){
    $user = Auth::user();
    return view("Client.Profile.edit", compact("user"));
})->middleware("auth")->name("Profile.edit");

Route::put("/Client/Profile/Update/{user}", [UserController::class, "updateProfile"])->middleware("auth");

Route::get("/Admin/Dashboard", function(){
    $categoriesCount = count(Category::all());
    $productsCount = count(Product::all());
    $rolesCount = count(Role::all());
    $usersCount = count(User::all());
    $orders = Order::all();
    $ordersCount = count(Order::all());
    return view("Admin.Dashboard", compact("categoriesCount", "productsCount", "rolesCount", "usersCount", "orders", "ordersCount"));
})->middleware("auth");


Route::get("/Admin/Orders", [OrderController::class, "index"])->middleware("auth")->name("Admin.Orders.Index");
Route::get("/Admin/Products", [ProductController::class, "index"])->middleware("auth")->name("Admin.Products.Index");
Route::get("/Admin/Products/AddProduct", [ProductController::class, "create"])->middleware("auth");
Route::post("/Admin/Products/AddProduct/store", [ProductController::class, "store"])->middleware("auth");
Route::get("/Admin/Products/EditProduct/{product}", [ProductController::class, "edit"])->middleware("auth");
Route::put("/Admin/Products/EditProduct/update/{product}", [ProductController::class, "update"])->middleware("auth");
Route::delete("/Admin/Products/destroy/{product}", [ProductController::class, "destroy"])->middleware("auth");
Route::get("/Admin/Users", [UserController::class, "index"])->middleware("auth")->name("Admin.Users.Index");
Route::get("/Admin/Users/AddUser", [UserController::class, "create"])->middleware("auth");
Route::post("Admin/Users/AddUser/store", [UserController::class, "store"])->middleware("auth");
Route::get("/Admin/Users/EditUser/{user}", [UserController::class, "edit"])->middleware("auth");
Route::put("/Admin/Users/EditUser/update/{user}", [UserController::class, "update"])->middleware("auth");
Route::delete("/Admin/Users/destroy/{user}", [UserController::class, "destroy"])->middleware("auth");
Route::get("/Admin/Roles", [RoleController::class, "index"])->middleware("auth")->name("Admin.Roles.Index");
Route::get("/Admin/Roles/AddRole", [RoleController::class, "create"])->middleware("auth");
Route::post("/Admin/Roles/AddRole/store", [RoleController::class, "store"])->middleware("auth");
Route::get("/Admin/Roles/EditRole/{role}", [RoleController::class, "edit"])->middleware("auth");
Route::put("/Admin/Roles/EditRole/update/{role}", [RoleController::class, "update"])->middleware("auth");
Route::delete("/Admin/Roles/destroy/{role}", [RoleController::class, "destroy"])->middleware("auth");
Route::get("/Admin/Categories", [CategoryController::class, "index"])->middleware("auth")->name("Admin.Categories.Index");
Route::get("/Admin/Categories/AddCategory", [CategoryController::class, "create"])->middleware("auth");
Route::post("/Admin/Categories/AddCategory/store", [CategoryController::class, "store"])->middleware("auth");
Route::get("/Admin/Categories/EditCategory/{category}", [CategoryController::class, "edit"])->middleware("auth");
Route::put("/Admin/Categories/EditCategory/update/{category}", [CategoryController::class, "update"])->middleware("auth");
Route::delete("/Admin/Categories/destroy/{category}", [CategoryController::class, "destroy"])->middleware("auth");