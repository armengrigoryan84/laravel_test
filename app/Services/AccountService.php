<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountService
 *
 * @author armen
 */

namespace App\Services;
use App\Services\Traits\CRUDTrait;
use App\User;
use App\File;
class AccountService {
    //put your code here
    
    use CRUDTrait;
    private $model, $file;
    
    public function __construct(User $user, File $file) {
        $this->model = $user;
        $this->file = $file;
    }
    
    public function fileUpoad($file){
        $name = uniqid() . '.' . $file->getClientOriginalExtension();
        $data = [
            'name'=> $name,
            'original_name'=> $file->getClientOriginalName(),
            'user_id' => auth()->user()->id
        ];
        $file->move('uploads',$name);
       // dd($data);
        
        return $this->file->create($data);
    }
    public function allFiles(){
        return $this->file->all();
    }



}
