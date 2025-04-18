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
}
