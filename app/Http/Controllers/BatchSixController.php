<?php

namespace App\Http\Controllers;

use App\Models\BatchSixStudentList;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class BatchSixController extends Controller
{
    public Function getStudent(){
      return BatchSixStudentList::all();
    }


    public function dataInsertByInsert(){
        BatchSixStudentList::insert([
            ['name' => 'Galib','created_at'=>now(),'updated_at'=>now()],
            ['name' => 'Nakib','created_at'=>now(),'updated_at'=>now()],
            ['name' => 'Rahi','created_at'=>now(),'updated_at'=>now()],
            ['name' => 'Rupanti','created_at'=>now(),'updated_at'=>now()],
            ['name' => 'Nafis','created_at'=>now(),'updated_at'=>now()],
            ['name' => 'Sajid','created_at'=>now(),'updated_at'=>now()],
        ]);

    }












}
