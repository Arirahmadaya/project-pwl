<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $req){
        $data = product::with('category')->with('seller')
        ->where('name','like',"%$req->search%")->limit(5)->inRandomOrder()->get();
        return view('home',compact('data'));
    }
    
}
