<?php 

class Tumbon extends Eloquent{
    
    public $table = 'tumbon';
    
    public function amphur(){
        return $this->belongsTo('Amphur','AMPHUR_ID');
    }
}