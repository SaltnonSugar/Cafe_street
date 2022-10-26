<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkloginadmin');
    }
    public function ShowProductAdmin(){
        $products= DB::table('product')->select('*');

        $products = $products->get();
        return view('admin.products_admin.products',compact('products'));
    }
}
