<?php 


/**
* 
*/
require_once "animal.php";
class Frog extends Animal
{
	public $jump;

	public function set_jump($jump){
		$this ->jump=$jump;
	}
	public function get_jump(){
		return $this->jump;
	}
	

}

 ?>