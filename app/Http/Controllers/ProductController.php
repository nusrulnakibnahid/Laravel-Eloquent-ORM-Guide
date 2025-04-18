<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\NahidTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProductByQuery(){
        $products = DB::table('products')->get();
        return $products;
    }




    public function getProductByModel(){
        $result = Product::all();
        return $result;

    }

    public function getFromNahidTest(){
        $result = NahidTest::all();
        return $result;

    }












}
