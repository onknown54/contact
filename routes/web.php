<?php

use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PeopleController::class, 'index'])->name('people.index');


Route::get('create_people', [PeopleController::class, 'create'])->name('people.create');