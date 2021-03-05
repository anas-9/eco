<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProdcutController extends Controller
{
   function index()
   {
       return view('product');
   }
}
