<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category ;

class CategoryControllerApi extends Controller
{
    public function category_list(){
        $categories = category::all();

        return response()->json(array(
            'ok' => true ,
            'categories' => $categories ,
        ));
    } 
}
