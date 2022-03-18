<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Meal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView()
    {

        $categories = Category::getCategory(array("limit" => 12));
        $meals = Meal::getMeal(array("random" => true, "limit" => 12));
        $topMeals = Meal::getMeal(array("random" => true, "limit" => 6));
        return view("home", ["categories" => $categories, "meals" => $meals, "topMeals" => $topMeals]);
    }
}
