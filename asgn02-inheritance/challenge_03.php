<?php

class Plant {

  var $loves_sun = true;
	var $made_of_wood = false;
  var $growth_rate = "grow fast";
	
  function r_u_wood() {
    if ($this->made_of_wood == true){
			echo "I am made of wood";
		} 
		else {
			echo "I am made not of wood";			
		}
  }

}

class Tree extends Plant {
	var $life_span = "long";

var	$made_of_wood = true;
	
	function describe_life(){
		echo "I have a " . $this->life_span . " life span. I also " . $this->growth_rate;
	}
}

$pine = new Tree;


echo $pine->r_u_wood() . "</br>";
echo $pine->describe_life();

?>