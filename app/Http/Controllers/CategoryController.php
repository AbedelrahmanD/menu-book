<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{

    public function categoriesView()
    {
        $categories = Category::getCategory();
        $category = Category::getCategory(array("limit" => 1, "random" => true))[0];
        $category->strCategory = "Categories";
        return view("category", compact("categories", "category"));
    }
    public function categoryView()
    {
        $response = Http::get('https://www.themealdb.com/api/json/v1/1/categories.php');
        $categories = $response->json()["categories"];
        foreach ($categories as $category) {

            echo $category["strCategory"] . "<hr>";
        }
    }
}
