<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\FirstComponent;
// use App\Livewire\ShowUsers;

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

 
Route::get('/dashboard', Dashboard::class);
 
Route::get('/posts', FirstComponent::class);
 
// Route::get('/users', ShowUsers::class);
Route::get('/', function () {
    return view('welcome');
});
