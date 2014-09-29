<?php 

class Pak extends Eloquent{
    
    public $table = 'pak';
    
    public function province(){
        return $this->hasMany('Province','PAK_ID');
    }
}