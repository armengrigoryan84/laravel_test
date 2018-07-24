<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Auth;

/**
 * Description of AuthController
 *
 * @author armen
 */
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
//use Auth;
use App\Services\AccountService;

class AuthController extends Controller{
    //put your code here
    
    public function getLogin(){
        //dd(444);
        return view('auth.login');
    }
    public function postLogin(AuthRequest $request){
      // dd(11111,request()->all(),request()->except('_token'),request()->get('email'));
    if(auth()->attempt(['email'=>$request->get('email'),'password'=>$request->get('password')]))
    {
            return redirect('account');
        }
        return redirect()->back()->withErrors('Incorrect email or password !');
        
    }
    public function getLogout(){
        auth()->logout();
        return redirect('auth/login');
    }
    
    
    public function getRegistration(){
        return view('auth.registration');
    }
    
    
    public function postRegistration(AccountService $accountService, RegisterRequest $request){
        //dd(request()->except("_token"),$request->all());
        $account = $request->except("_token");
        $account['password'] = bcrypt($account['password']);
        $account = $accountService->create($account);
        
        auth()->loginUsingId($account->id);
        return redirect('account');
    }
}
