<?php

class Light {

 public static $job = "to shine without resriant";

  public static function my_job() {
    echo self::$job . " is my job, " . static::$job . "!</br>";
  }

}

class Lamp extends Light  {

	 public static $job = " not really...... I wear a lamp shade";

}

echo Light::my_job();
echo Lamp::my_job();

?>
