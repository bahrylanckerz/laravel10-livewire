<?php

use App\Livewire\ShowBlog;
use App\Livewire\ShowBlogDetail;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServiceDetail;
use App\Livewire\ShowTeam;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowService::class)->name('services');
Route::get('/service/{id}', ShowServiceDetail::class)->name('service.detail');
Route::get('/teams', ShowTeam::class)->name('teams');
Route::get('/blog', ShowBlog::class)->name('blog');
Route::get('/blog/{slug}', ShowBlogDetail::class)->name('blog.detail');