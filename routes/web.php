<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home/Collection', function () {
    return view('Home.Collection');
});

Route::get('/Home/History', function () {
    return view('Home.History');
});

Route::get('/Home/Gallery', function () {
    return view('Home.Gallery');
});

Route::get('/Home/Contact', function () {
    return view('Home.Contact');
});

Route::get("/Admin/Profile", function(){
    return view("Admin.Profile");
});

Route::get("/Admin/Logs", function(){
    return view("Admin.AdminLogs");
});

Route::get("/Auth/Login", function(){
    return view("Auth.Login");
});

Route::get("/Auth/Register", function(){
    return view("Auth.Register");
});

Route::get("/Auth/LogOut", function(){
    return view("Auth.LogOut");
});

Route::get("/Client/Cart", function(){
    return view("Client.Cart");
});

Route::get("/Client/Profile", function(){
    return view("Client.Profile");
});

Route::get("/Admin/Dashboard", function(){
    $categoriesCount = count(Category::all());
    $productsCount = count(Product::all());
    $rolesCount = count(Role::all());
    $usersCount = count(User::all());
    $orders = Order::all();
    $ordersCount = count(Order::all());
    return view("Admin.Dashboard", compact("categoriesCount", "productsCount", "rolesCount", "usersCount", "orders", "ordersCount"));
});


Route::get("/Admin/Orders", [OrderController::class, "index"])->name("Admin.Orders.Index");
Route::get("/Admin/Products", [ProductController::class, "index"])->name("Admin.Products.Index");
Route::get("/Admin/Products/AddProduct", [ProductController::class, "create"]);
Route::post("/Admin/Products/AddProduct/store", [ProductController::class, "store"]);
Route::get("/Admin/Products/EditProduct/{product}", [ProductController::class, "edit"]);
Route::put("/Admin/Products/EditProduct/update/{product}", [ProductController::class, "update"]);
Route::delete("/Admin/Products/destroy/{product}", [ProductController::class, "destroy"]);
Route::get("/Admin/Users", [UserController::class, "index"])->name("Admin.Users.Index");
Route::get("/Admin/Users/AddUser", [UserController::class, "create"]);
Route::post("Admin/Users/AddUser/store", [UserController::class, "store"]);
Route::get("/Admin/Users/EditUser/{user}", [UserController::class, "edit"]);
Route::put("/Admin/Users/EditUser/update/{user}", [UserController::class, "update"]);
Route::delete("/Admin/Users/destroy/{user}", [UserController::class, "destroy"]);
Route::get("/Admin/Roles", [RoleController::class, "index"])->name("Admin.Roles.Index");
Route::get("/Admin/Roles/AddRole", [RoleController::class, "create"]);
Route::post("/Admin/Roles/AddRole/store", [RoleController::class, "store"]);
Route::get("/Admin/Roles/EditRole/{role}", [RoleController::class, "edit"]);
Route::put("/Admin/Roles/EditRole/update/{role}", [RoleController::class, "update"]);
Route::delete("/Admin/Roles/destroy/{role}", [RoleController::class, "destroy"]);
Route::get("/Admin/Categories", [CategoryController::class, "index"])->name("Admin.Categories.Index");
Route::get("/Admin/Categories/AddCategory", [CategoryController::class, "create"]);
Route::post("/Admin/Categories/AddCategory/store", [CategoryController::class, "store"]);
Route::get("/Admin/Categories/EditCategory/{category}", [CategoryController::class, "edit"]);
Route::put("/Admin/Categories/EditCategory/update/{category}", [CategoryController::class, "update"]);
Route::delete("/Admin/Categories/destroy/{category}", [CategoryController::class, "destroy"]);