<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public static function getCategory($request = [])
    {

        $select = DB::table('category');

        if (isset($request["idCategory"])) {
            $select->where('idCategory', $request["idCategory"]);
        }
        if (isset($request["strCategory"])) {
            $select->where('strCategory', "like", "%" . $request["strCategory"] . "%");
        }
        if (isset($request["idCategory"])) {
            $select->where("idCategory", $request["idCategory"]);
        }
        if (isset($request["random"])) {
            $select->inRandomOrder();
        }
        if (isset($request["limit"])) {
            $select->limit($request["limit"]);
        }


        return $select->get();
    }
}
