<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Customer;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;

class RegistrationController extends Controller
{
    public function index(){
    	
    	return view('registration.index');
    }

    public function register(Request $req){
    

        $validation = Validator::make($req->all(), [
            'uname'=>'required',
            'password'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'utype'=>'required'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
            return redirect()->route('registration.index')
                            ->with('errors', $validation->errors())
                            ->withInput();
        }
        else{
            if($req->utype=="admin"){

                $admin = new Admin();
                $admin->uname      = $req->uname;
                $admin->name       = $req->name;
                $admin->password   = $req->password;
                $admin->phone      = $req->phone;
                $admin->email      = $req->email;
                $admin->gender     = $req->gender;
                $admin->dob        = $req->day."/".$req->month."/".$req->year;
               
                $user = new User();
                $user->uname        = $req->uname;
                $user->password     = $req->password;
                $user->utype        = $req->utype;

                if($admin->save() && $user->save()){
                    return redirect()->route('login.index');
                }
                else{

                    return view('registration.index');

                }
                

            }
            else{

                $customer = new Customer();
                $customer->uname      = $req->uname;
                $customer->name       = $req->name;
                $customer->password   = $req->password;
                $customer->phone      = $req->phone;
                $customer->email      = $req->email;
                $customer->gender     = $req->gender;
                $customer->dob        = $req->day."/".$req->month."/".$req->year;
               
                $user = new User();
                $user->uname        = $req->uname;
                $user->password     = $req->password;
                $user->utype        = $req->utype;

                if($customer->save() && $user->save()){
                    return redirect()->route('login.index');
                }
                else{

                    return view('registration.index');

                }

            }
        
        }		
  	 /* $users = User::all();
    	$user = User::find(3);
    	$user = User::find([1,5,6,7]);
        $user = User::where('username', $req->uname)
    				->where('password', $req->password)
    				->first();

    	$user =	DB::table('users')->get();
    	$user = DB::table('users')->find(3);
    	$user = DB::table('users')->find([1,4,5]);
    	
    	$user = DB::table('user')
    				->where('username', $req->uname)
    				->where('password', $req->password)
    				->first();
    	
    	if($user != null){
            $req->session()->put('username', $req->uname);
            $req->session()->put('type', $user->utype);
    		return redirect()->route('home.index');
    	}else{
            $req->session()->flash('msg', 'invalid username/password');
            //return view('login.index');
            return redirect('/login');
    	} */
   	}
}
