<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Shoppingari;
use Illuminate\Support\Facades\Auth;

class ShoppingController extends Controller
{
    public function shoppingari(){   
        $data = Product::all();
        return view('shoppingari',compact('data'));
    }
    public function shoppingari_proccess(Request $req){
        $req->validate([
            'name' => 'required|min:3|max:50',
            'whatsapp' => 'required|max:15',
            'address' => 'required|min:3|max:270',
            'product_id' => 'required|max:50',
            'qty' => 'required|max:15',
            'note' => 'required|max:5'      
        ]);
        $data = Product::all();
        $product = Product::findOrFail($req->product_id);
        $total = $product->price * $req->qty;
        $new=new Shoppingari(); 
        $new->buyer_name = $req->name; //+
        $new->buyer_whatsapp = $req->whatsapp; 
        $new->buyer_address = $req->address; 
        $new->product_id = $req->product_id;
        $new->note = $req->note; 
        $new->qty = $req->qty; 
        $new->total = $total;
        $new->save(); 
        $req->session()->flash ('msg','Process Shopping Success Full.'); 
        return redirect('shopping-ari')->with('data', $data);
    }
}
