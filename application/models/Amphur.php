<?php 

class Amphur extends Eloquent{
    public $table = 'amphur';
    
    public function province(){
        return $this->BelongsTo('Province','PROVINCE_ID');
    }
     public function amphur(){
        return $this->hasMany('Tumbon','TUMBON_ID');
    }
}