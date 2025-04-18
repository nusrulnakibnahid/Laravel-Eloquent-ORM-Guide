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



    public function dataUpdate(Request $request, $id){
        Product::where('id')->update([

            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,

        ]);

        return response()->json([
            'message' => 'Product updated successfully',
            
        ], 202);

    }


    public function updatedUsingSave(Request $request, $id){

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return response()->json([
            'message' => 'Product saving successfully',
            
        ], 203);

    }



    public function deleteUsingFind($id){

        $product = Product::find($id);
        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully',
            
        ], 204);

    }




    public function deleteUsingDestroyById($id){

       Product::destroy($id);

        return response()->json([
            'message' => 'Product destroyed successfully',
            
        ], 205);

    }



    public function dataSelect(){
       // $products = Product::all();

       // $products = Product::where('name', 'Test2')->where()->get();

       // $products = Product::where('name', 'Test4')->orWhere('description', 'Test5')->get();

       // $products = Product::whereColumn('price','>', 'purches_price')->get();
       
       $products = Product::find(8);
       $products->increment('purches_price', 100);
       return $products;

    }


    


    

    


















} 