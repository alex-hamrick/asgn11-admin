<?php

class Plant {

  public $loves_sun = true;
	private $made_of_wood = "nope";
  public $growth_rate = "grow fast";
	
  public function r_u_wood() {
		return "Am I made of wood? " . $this->made_of_wood;
  }
	
	public function set_wood($made_of_wood) {
    $this->made_of_wood = $made_of_wood;
  }

}

class Tree extends Plant {
	private $life_span = "long";

	public function set_life($life_span) {
    $this->life_span= $life_span;
  }
	public function describe_life(){
		echo "I have a " . $this->life_span . " life span. I also " . $this->growth_rate;
	}
	 
}

class Bamboo extends Tree {
private $resistance = "low";
	
public function describe_resistance(){	
	return "I have a " . $this->resistance . " resistance to the wind";
}

}
$piney = new Tree;
$blade = new Bamboo;

$piney->set_wood("yes");
echo $piney->r_u_wood() . "</br>";
echo $piney->describe_life() . "</br>";

$blade->set_wood("no");
$blade->set_life("short");
echo $blade->r_u_wood() . "</br>";
echo $blade->describe_life() . "</br>";
echo $blade->describe_resistance();
?>