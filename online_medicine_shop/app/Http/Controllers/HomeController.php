<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Medicine;
use App\Customer;
use App\Cart;
use App\OrderRequest;
use App\OrderPending;
use Illuminate\Support\Facdes\DB;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{

    public function admin_index(Request $req){


        if(!$req->session()->has('uname')){
            return redirect('/login');
        }

        return view('home.admin_index');
    }

    public function admin_profile($uname){

        $admins = Admin::where('uname',$uname);   
        
        return view('home.admin_profile', $admins);
    }

    public function admin_medicineList(){
        $medicine = Medicine::all();
        return view('home.admin_medicineList', ['std'=>$medicine]);
    }

    public function admin_medicineDetails($id){

        $s = Medicine::find($id);
        return view('home.admin_medicineDetails', $s);
    }

    public function add_Medicine(){
        return view('home.admin_addMedicine');
    }

    
    public function create_Medicine(Request $req){

        $medicine = new Medicine();
        $medicine->vendorName = $req->vendorName;
        $medicine->price = $req->price;
        $medicine->logicalType     = $req->logicalType;
        $medicine->generType     = $req->generType;
        $medicine->availabilty     = $req->availabilty;
        
        
        if($medicine->save()){
            return redirect()->route('home.admin_medicineList');
        }else{
            return redirect()->route('home.admin_addMedicine');
        }
        }

    public function admin_medicineEdit($id){
        $medicine = Medicine::find($id);
        return view('home.admin_medicineEdit', $medicine);
    }

    public function admin_medicineUpdate($id, Request $req){

        $medicine = Medicine::find($id);
        $medicine->vendorName = $req->vendorName;
        $medicine->price = $req->price;
        $medicine->logicalType     = $req->logicalType;
        $medicine->generType     = $req->generType;
        $medicine->availabilty     = $req->availabilty;
        

        if($medicine->save()){
            return redirect()->route('home.admin_medicineList');
        }else{
            return redirect()->route('home.admin_medicineEdit', $id);
        }
    }

    public function admin_medicineDelete($id){
        $medicine = Medicine::find($id);
        return view('home.admin_medicineDelete', $medicine);
    }

    public function admin_medicineDestroy($id, Request $req){
        if(Medicine::destroy($req->mID)){
            return redirect()->route('home.admin_medicineList');
        }else{
            return redirect()->route('home.admin_medicineDelete', $id);
        }
    }



    public function admin_customerList(){
        $customer = Customer::all();
        return view('home.admin_customerList', ['std'=>$customer]);
    }

    public function admin_customerDelete($id){
        $customer = Customer::find($id);
        return view('home.admin_customerDelete', $customer);
    }

    public function admin_customerDestroy($id, Request $req){
        if(Customer::destroy($req->cID)){
            return redirect()->route('home.admin_customerList');
        }else{
            return redirect()->route('home.admin_customerDelete', $id);
        }
    }



    public function customer_index(Request $req){


        if(!$req->session()->has('uname')){
            return redirect('/login');
        }

        return view('home.customer_index');
    }

    public function customer_profile($uname){

        $admins = Admin::where('uname',$uname);   
        
        return view('home.customer_profile', $admins);
    }

    public function customer_medicineList(){
        $medicine = Medicine::all();
        return view('home.customer_medicineList', ['std'=>$medicine]);
    }

    public function customer_medicineDetails($id){

        $s = Medicine::find($id);
        return view('home.customer_medicineDetails', $s);
    }

    public function customer_addTocart($id){
        $medicine = Medicine::find($id);
        return view('home.customer_addTocart', $medicine);
    }

    public function customer_addIncart(Request $req){
        
        $cart = new Cart();
        $cart->vendorName = $req->vendorName;
        $cart->price            = $req->price;
        $cart->logicalType      = $req->logicalType;
        $cart->generType        = $req->generType;
        $cart->availabilty      = $req->availabilty;
        $cart->cID              = 20;
        $cart->mID              = $req->mID;
        
        
        if($cart->save()){
            return redirect()->route('home.customer_medicineList');
        }else{
            return redirect()->route('home.customer_addTocart');
        }
        }

        public function customer_orderNow($id){
        $medicine = Medicine::find($id);
        return view('home.customer_orderNow', $medicine);
    }

    public function customer_orderConfirm($id){
        
        $medicine = Medicine::find($id);
        return view('home.customer_payment', $medicine);
            
        }

        public function customer_pay(Request $req){
        
        $or = new OrderRequest();
        $or->vendorName        = $req->vendorName;
        $or->price            = $req->price;
        $or->logicalType      = $req->logicalType;
        $or->generType        = $req->generType;
        $or->availabilty      = $req->availabilty;
        $or->cID              = 20;
        $or->mID              = $req->mID;

        $op = new OrderPending();
        $op->vendorName        = $req->vendorName;
        $op->price            = $req->price;
        $op->logicalType      = $req->logicalType;
        $op->generType        = $req->generType;
        $op->availabilty      = $req->availabilty;
        $op->cID              = 20;
        $op->mID              = $req->mID;
        
        if($or->save() && $op->save()){
            return redirect()->route('home.customer_index');
        }else{
            return redirect()->route('home.customer_payment');
        }
        }




/*
     public function edit($id){
        $user = User::find($id);
        return view('home.edit', $user);
    }

    public function update($id, Request $req){

        $user = User::find($id);
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name     = $req->name;
        $user->cgpa     = $req->cgpa;
        $user->dept     = $req->dept;
        $user->type     = $req->type;

        if($user->save()){
            return redirect()->route('home.list');
        }else{
            return redirect()->route('home.edit', $id);
        }
    }

    public function delete($id){
        $user = User::find($id);
        return view('home.delete', $user);
    }

    public function destroy($id, Request $req){
        if(User::destroy($req->userId)){
            return redirect()->route('home.list');
        }else{
            return redirect()->route('home.delete', $id);
        }
    }

   */ 

    
}
