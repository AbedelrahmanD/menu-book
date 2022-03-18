<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Meal;

class MealController extends Controller
{

    public function searchMealView($strMeal)
    {

        $meals = Meal::getMeal(array("strMeal" => $strMeal, "paginate" => 21));
        $category = new Category();
        $category->strCategory = $strMeal;
        if($meals[0]!=null){
             $category->strCategoryThumb = $meals[0]->strMealThumb;
        }else{
             $category->strCategoryThumb = '/image/not_found.png' ;
        }
       
        $showCategory = true;
        return view("meals_by_category", ["meals" => $meals, "category" => $category, "showCategory" => $showCategory]);
    }

    public function allMealsView()
    {
        $meals = Meal::getMeal(array("paginate" => 21));
        $category = Category::getCategory(array("random" => true, "limit" => 1))[0];
        $category->strCategory = "Meals";
        $showCategory = true;
        return view("meals_by_category", ["meals" => $meals, "category" => $category, "showCategory" => $showCategory]);
    }

    public function mealInfo($idMeal)
    {
        $response = Http::get("https://www.themealdb.com/api/json/v1/1/lookup.php?i=$idMeal");
        $meal = $response->json()["meals"][0];
        $youtubeArray = explode("?v=", $meal["strYoutube"]);

        $meal["youtubeCode"] = count($youtubeArray) > 1 ? $youtubeArray[1] : 0;
        $category = Category::getCategory(array("strCategory" => $meal['strCategory']))[0];

        return view("meal_info", ["meal" => $meal, "category" => $category]);
    }

    public function mealsByCategoryView($idCategory)
    {
        $meals = Meal::getMeal(array("idCategory" => $idCategory, "paginate" => 18));
        $category = Category::getCategory(array("idCategory" => $idCategory))[0];
        $showCategory = false;
        return view("meals_by_category", ["meals" => $meals, "category" => $category, "showCategory" => $showCategory]);
    }
    public function MealView()
    {

        // $response = Http::get('https://www.themealdb.com/api/json/v1/1/filter.php?c=Goat');
        // $categories = $response->json()["meals"];
        // foreach ($categories as $category) {
        //     // $category["idCategory"] = 14;
        //     // DB::table('meal')->insert($category);
        //     echo $category["strMeal"] . "<hr>";
        // }

        return Meal::getMeal(array("limit" => 3));
    }
}
