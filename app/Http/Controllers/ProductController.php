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



    public function dataInsert(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return response()->json([
            'message' => 'Product created successfully',
            'data' => $product
        ], 201);

    }
 


    public function dataInsertByCreate(Request $request){
        
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'Product created successfully',
            'data' => $product
        ], 201);

    }



    public function dataInsertByCreateReqAll(Request $request){
        
        $product = Product::create($request->all());

        return response()->json([
            'message' => 'Product created successfully',
            'data' => $product
        ], 201);

    }


    


















}
