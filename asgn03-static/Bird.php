<?php

class Bird {
    var $habitat;
    var $food;
    var $nesting = "tree";
    var $conservation;
    var $song = "chirp";
    var $flying = null;
		public static $instance_count = 0;
		static $egg_num = 0;
		
	public static function create() {
		$class_name = get_called_class();
		$obj = new $class_name;
		self::$instance_count++;
		return $obj;
	}
	
    function can_fly() {
      $flying_string = $this->flying ?? "can fly"; 
        return  $flying_string ;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";
		static $egg_num = "3-5, somtimes 5";
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "is stuck on the ground";
}
