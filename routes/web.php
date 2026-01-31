<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get("/Admin/Categories", function(){
    return view("Admin.Categories");
});

Route::get("/Admin/Orders", function(){
    return view("Admin.Orders");
});

Route::get("/Admin/OrderItems", function(){
    return view("Admin.OrderItems");
});

Route::get("/Admin/Products", function(){
    return view("Admin.Products");
});

Route::get("/Admin/Profile", function(){
    return view("Admin.Profile");
});

Route::get("/Admin/Roles", function(){
    return view("Admin.Roles");
});

Route::get("/Admin/Users", function(){
    return view("Admin.Users");
});

Route::get("/Admin/Logs", function(){
    return view("Admin.AdminLogs");
});

Route::get("/Admin/Categories/AddCategory", function(){
    return view("Admin.AddCategory");
});

Route::get("/Admin/Products/AddProduct", function(){
    return view("Admin.AddProduct");
});

Route::get("/Admin/Role/AddRole", function(){
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

Route::post("/Admin/Categories/AddCategory/store", [CategoryController::class, "store"]);
Route::put("/Admin/Categories/AddCategory/update", [CategoryController::class, "update"]);
Route::delete("/Admin/Categories/AddCategory/destroy", [CategoryController::class, "destroy"]);