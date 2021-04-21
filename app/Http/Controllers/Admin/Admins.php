<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin ;
use Illuminate\Support\Facades\Auth;
use App\Mail\adminMail ;
use Mail ;
class Admins extends Controller
{
   public function index(){
   	if(auth::guard('admin')->check()){
   			return redirect('admin') ;
   	}else{
   			return view('admin/login') ;
   	}
   }

   public function dashboard(){
   	echo 'dashboard' ;
   	echo "<a href='".url('admin/logout')."'>logout</a>";
   }

    public function checklogin(request $q){
   		
   	$email = request('email');
   	$password = request('password');

   
   	if(auth::guard('admin')->attempt(['email' => $email , 'password' => $password])){
   	 	return redirect('admin') ;
   	 }else{
   		return redirect('admin/Login') ;
   	 }

   }

   public function forgetPassword(){
   	return view('admin/forgetPassword');
   }

   public function checkfogetPassword(){

   		$this->validate(request() , ['email' => 'required']);
   	
   		$check = Admin::where('email' , request('email'))->first();

   		if($check == null){
   			session()->flash('error' , 'this email doesnot exists');
   			return redirect('admin/forgetPassword');
   		}else{

   			$user = Admin::where('email' , request('email'))->first() ;
   		    $token = app('auth.password.broker')->createToken($user);

   			Mail::to('oo@yahoo.com')->send(new adminMail(['user' => $user , 'token' =>  $token]));


   		}
   }

}
