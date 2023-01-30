<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index(){
        $iduser = Auth::user()->id;
        $data = Product::with('category')->where('user_id',$iduser)->get();
        return view('product', compact('data'));
    }

    public function add(){
        $iduser = Auth::user()->id;
        $category = Category::where('user_id',$iduser)->get();
        return view('product_add',compact('category'));
    
    }

    public function add_process(Request $req){
        $req->validate([
            'name' => 'required|min:3|max:50',
            'category' => 'required|exists:categories,id',
            'price' => 'required|integer',
            'photo' => 'required|mimes:jpg,png,jpeg'
        ]);
        $photo=$req->file('photo'); 
        $new_photo_name=uniqid().".".$photo->getClientOriginalExtension(); 
        $photo->move('images',$new_photo_name); 

        $iduser = Auth::user()->id;
        $new = new Product(); 
        $new->user_id = $iduser;
        $new->name = $req->name; 
        $new->category_id = $req->category; 
        $new->price = $req->price; 
        $new->photo = $new_photo_name; 
        $new->save(); 
        $req->session()->flash ('msg','Process Success.'); 
        return redirect('product-add');
    }

    
    public function delete_process(Request $req, $id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        $req->session()->flash('msg','Delete Success.');
        return redirect('product');
    }  

    public function edit(Request $req, $id){
        $iduser = Auth::user()->id;
        $category = Category::where('user_id',$iduser)->get();

        $data = Product::findOrFail($id);
        return view('product_edit',compact('data','category'));
    }

    public function edit_process(Request $req, $id){
        $req->validate([
            'name' => 'required|min:3|max:50',
            'category' => 'required|exists:categories,id',
            'price' => 'required|integer',
            'photo' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        

        if($req->file('photo')){
            $photo=$req->file('photo'); 
            $new_photo_name=uniqid().".".$photo->getClientOriginalExtension(); 
            $photo->move('images',$new_photo_name); 
        }

        $iduser = Auth::user()->id;
        $new = Product::findOrFail($id); 
        $new->user_id = $iduser;
        $new->name = $req->name; 
        $new->category_id = $req->category; 
        $new->price = $req->price; 
        if($req->file('photo')){ $new->photo = $new_photo_name; };
        $new->save(); 
        $req->session()->flash ('msg','Process Success.'); 
        return redirect('product-edit/'.$id);
    }

    
}