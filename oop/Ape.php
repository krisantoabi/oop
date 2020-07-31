<?php 


/**
* 
*/
require_once "animal.php";

class Ape extends Animal
{
	public $yell;

	public function set_yell($yell){
		$this ->yell=$yell;
	}

	public function get_yell(){
		return $this->yell;
	}
	

}

 ?>