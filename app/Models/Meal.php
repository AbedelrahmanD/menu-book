<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Meal extends Model
{
    use HasFactory;

    protected $table = "meal";


    public static function getMeal($request = [])
    {
        $select = Meal::query();
        if (isset($request["idMeal"])) {
            $select = $select->where('idMeal', $request["idMeal"]);
        }
        if (isset($request["strMeal"])) {
            $select = $select->where('strMeal', "like", "%" . $request["strMeal"] . "%");
        }
        if (isset($request["idCategory"])) {
            $select = $select->where('meal.idCategory', $request["idCategory"]);
        }
        if (isset($request["limit"])) {
            $select = $select->limit($request["limit"]);
        }
        if (isset($request["random"])) {
            $select = $select->inRandomOrder();
        }
        $select = $select->join("category", "meal.idCategory", "=", "category.idCategory");

        if (isset($request["paginate"])) {
            $select = $select->paginate($request["paginate"]);
        } else {
            $select = $select->get();
        }

        return $select;
    }
}
