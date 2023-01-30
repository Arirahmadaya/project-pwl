<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; //yg ditambah


class CategoryController extends Controller
{
    public function index(){
        $iduser = Auth::user()->id;
        $data = Category::where('user_id',$iduser)->get(); //yg ditambah

        return view('category',compact('data'));
    }

    public function form(){
        return view('form');
    }

    public function form_process(Request $req){
        $req->validate([
            'name' => 'required|min:3|max:50',
        ]);
        $iduser = Auth::user()->id;
        $category = new Category();
        $category->user_id = $iduser;
        $category->name = $req->name;
        $category->save();

        $req->session()->flash('msg','Process succesfull.');
        return redirect('form');
    }

        public function del_process(Request $req, $id){
            $data = Category::findOrFail($id);
            $data->delete();
            $req->session()->flash('msg','Process Succes.');
            return redirect('/category');
        }

        public function edit(Request $req, $id){
            $data = Category::findOrFail($id);
            return view('category_edit',compact('data'));
    }

    public function edit_process(Request $req, $id){
        $req->validate([
            'name' => 'required|min:3|max:50',
        ]);

        $data = Category::findOrFail($id);
        $data->name = $req->name;
        $data->save();

        $req->session()->flash('msg','Process succesfull.');
        return redirect('category-edit/'.$id);
    }
}