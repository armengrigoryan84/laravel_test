<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Services\AccountService;

use App\Http\Requests\FileRequest;
/**
 * Description of AccountController
 *
 * @author armen
 */
class AccountController {
    /**
     * 
     * @param AccountService $accountService
     * @return type
     */
    
    public function index(AccountService $accountService){
        
        //dd(auth()->user()->name);
        
        return view('account/index',['files'=>$accountService->allFiles()]);
    }
    
    public function postFile(AccountService $accountService, FileRequest $request){
        //dd($request->file('file'));
        $accountService->fileUpoad($request->file('file'));
        return redirect()->back();
    }
}
