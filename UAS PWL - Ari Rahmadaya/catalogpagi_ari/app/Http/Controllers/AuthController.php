<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class Authcontroller extends Controller 
{ 
     public function login() { 
       return view('login'); 
    }
    public function login_process(Request $req) 
    { 
      $req->validate([ 
            
            "email"=>"required|email|min:6|max:50|exists:users,email", 
            "password"=>"required|min:5|max:10|", 
      ]); 
      $user=User::where('email',$req->email)->first(); 
 
      if (Hash::check($req->password,$user->password)) { 

        //Laravel Auth
        Auth::attempt(['email' => $req->email, 
        'password' => $req->password]);

        return redirect('/');

      } else { 
         return  redirect()->back()->withErrors(['password'=>'Password is wrong']); 
      } 
    } 
 
 
    public function register() { 
       return view('register'); 
    } 
    public function register_process(Request $req) { 
      $req->validate([ 
            "name"=>"required|min:6|max:50", 
            "email"=>"required|email|unique:users,email", 
            "password"=>"required|min:5|max:20|", 
      ]); 
      $user=new user(); 
      $user->name =$req->name; 
      $user->email = $req->email; 
      $user->password = Hash::make($req->password); 
      $user->save(); 

      $req->session()->flash('msg', 'Registration succesfull'); 
      
      return redirect('/register'); 
    } 

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function profile(){
      $iduser = Auth::user()->id;
      $data = User::findOrFail($iduser);
      return view('profile', compact('data'));
    }

    public function profile_process(Request $req){

      $iduser = Auth::user()->id;

      $req->validate([ 
        "name"=>"required|min:6|max:50", 
        "email"=>"required|email|unique:users,email,$iduser", 
        "password"=>"nullable|min:5|max:20|confirmed", 
  ]); 

  $user= User::findOrFail($iduser); 
  $user->name =$req->name; 
  $user->email = $req->email; 
  if($req->password){
    if(Hash::check($req->old_password, $user->password)){
      $user->password = Hash::make($req->password);
    }else{
      return redirect('profile')->withErrors(
        ['password'=>'old password is wrong.']
      );
    }
  }

  $user->save(); 
  $req->session()->flash('msg', 'Change succesfull'); 
  return redirect('/profile'); 

    }
}