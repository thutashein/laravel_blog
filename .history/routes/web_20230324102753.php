<?php

use App\Http\Controllers\AdminBlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubscriptionController;


Route::get('/', [BlogController::class, "index"]);
Route::get("/blogs/{blog:slug}", [BlogController::class, "show"])->where("blog", "[A-z\d\-]+");
Route::get("/register", [AuthController::class, "create"]);
Route::post("/register", [AuthController::class, "store"]);
Route::post("/logout", [AuthController::class, "logout"]);
Route::get("/login", [AuthController::class, "index"]);
Route::post("/login", [AuthController::class, "login"]);
//comments
Route::post("/blogs/{blog:slug}/comments", [CommentController::class, "store"])->name('blogs.comments.store');
Route::post("/blogs/{blog:slug}/subscription",[SubscriptionController::class,"toggleSubscript"]);


// admin all blogs
Route::get("admin/blogs",[AdminBlogController::class,"showBlog"]);
// admin blog creat page
Route::get("/admin/createPage",[AdminBlogController::class,"index"])->name("admin#blogs#createPage");
// admin store blogs
Route::post("/admin/blogs",[AdminBlogController::class,"store"]);
// admin blog delete
Route::delete("admin/blogs/{blog:slug}/delete",[AdminBlogController::class,'destroy'])->name("admin#blogs#delete");
// admin blog edit page
Route::get("/admin/blogs/{blog:slug}/editPage",[AdminBlogController::class,"edit"])->name("admin#blogs#editPage");
// admin update page
