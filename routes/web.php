<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MealController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, "homeView"]);

Route::get('/categories', [CategoryController::class, "categoriesView"]);
Route::get('/meals-by-category/{idCategory}', [MealController::class, "mealsByCategoryView"]);
Route::get('/meal/{idMeal}', [MealController::class, "mealInfo"]);
Route::get('/meals', [MealController::class, "allMealsView"]);
Route::get('/meal/{idMeal}', [MealController::class, "mealInfo"]);
Route::get('/search-meal/{strMeal}', [MealController::class, "searchMealView"]);
