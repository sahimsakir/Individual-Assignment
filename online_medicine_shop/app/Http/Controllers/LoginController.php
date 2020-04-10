<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
    	
    	return view('login.index');
    }

    public function verify(Request $req){
    		
  	  	//$users = User::all();
    	//$user = User::find(3);
    	//$user = User::find([1,5,6,7]);
/*    	$user = User::where('username', $req->uname)
    				->where('password', $req->password)
    				->first();*/

    	//$user =	DB::table('users')->get();
    	//$user = DB::table('users')->find(3);
    	//$user = DB::table('users')->find([1,4,5]);
    	
    	$user = DB::table('users')
    				->where('uname', $req->uname)
    				->where('password', $req->password)
    				->first();
    	
    	if($user != null){
            $req->session()->put('uname', $req->uname);
            $req->session()->put('utype', $user->utype);
            if($user->utype=="admin")
            {
                return redirect()->route('home.admin_index');
            }
    		else
            {
                return redirect()->route('home.customer_index');

            }
    	}else{
            $req->session()->flash('msg', 'invalid username/password');
            //return view('login.index');
            return redirect('/login');
    	}
   	}
}
