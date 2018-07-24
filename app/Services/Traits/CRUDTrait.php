<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CRUDTrait
 *
 * @author armen
 */
namespace App\Services\Traits;

trait CRUDTrait {
    //put your code here
    
    public function all(){
        return $this->model->all();
    }
    
    public function create($data){
        return $this->model->create($data);
    }
    
    public function update($id,$data){
        return $this->model->where('id',$id)->update($data);
    }
    
    public function delete($id){
        return $this->model->where('id',$id)->delete();
    }
}
