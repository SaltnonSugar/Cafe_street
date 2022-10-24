<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\views;

class ViewProduct extends Controller
{
    public function ShowProduct(){
        $products= DB::table('product')->select('*');

        $products = $products->get();
        return view('layouts.trangchu',compact('products'));
    }
}
