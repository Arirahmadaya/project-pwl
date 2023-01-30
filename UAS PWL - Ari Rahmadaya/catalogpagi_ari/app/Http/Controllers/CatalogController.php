<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CatalogController extends Controller
{
    public function index(Request $req){
        $data = Product::with('category')->with('seller')
        ->where('name','like',"%$req->search%")->get();
        return view('catalog',compact('data'));
        
    }
}
