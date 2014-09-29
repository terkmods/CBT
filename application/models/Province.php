<?php 

class Province extends Eloquent{

	public $table = 'province';
	
	public function amphur(){
		return $this->hasMany('Amphur','PROVINCE_ID');
	}
}