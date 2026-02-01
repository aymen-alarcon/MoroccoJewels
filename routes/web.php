<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Route::get("/Admin/Dashboard", function(){
    return view("Admin.Dashboard");
});

Route::get("/Admin/Profile", function(){
    return view("Admin.Profile");
});

Route::get("/Admin/Logs", function(){
    return view("Admin.AdminLogs");
});

Route::get("/Admin/Categories/Create", function(){
    return view("Admin.AddCategory");
});

Route::get("/Admin/Products/Create", function(){
    return view("Admin.AddProduct");
});

Route::get("/Admin/Users/Create", function(){
    return view("Admin.AddUser");
});

Route::get("/Admin/Roles/Create", function(){
    return view("Admin.AddRole");
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
    return view("Admin.Dashboard");
});


Route::get("/Admin/Orders", [OrderController::class, "index"]);
Route::get("/Admin/Products", [ProductController::class, "index"])->name("Admin.Products.Index");
Route::get("/Admin/Products/AddProduct", [ProductController::class, "create"]);
Route::post("/Admin/Products/AddProduct/store", [ProductController::class, "store"]);
Route::delete("/Admin/Products/destroy/{product}", [ProductController::class, "destroy"]);
Route::get("/Admin/Users", [UserController::class, "index"]);
Route::get("/Admin/Roles", [RoleController::class, "index"])->name("Admin.Roles.Index");
Route::get("/Admin/Roles/AddRole", [RoleController::class, "create"]);
Route::post("/Admin/Roles/AddRole/store", [RoleController::class, "store"]);
Route::delete("/Admin/Roles/destroy/{role}", [RoleController::class, "destroy"]);
Route::get("/Admin/Categories", [CategoryController::class, "index"])->name("Admin.Categories.Index");
Route::get("/Admin/Categories/AddCategory", [CategoryController::class, "create"]);
Route::post("/Admin/Categories/AddCategory/store", [CategoryController::class, "store"]);
Route::put("/Admin/Categories/AddCategory/update", [CategoryController::class, "update"]);
Route::delete("/Admin/Categories/destroy/{category}", [CategoryController::class, "destroy"]);