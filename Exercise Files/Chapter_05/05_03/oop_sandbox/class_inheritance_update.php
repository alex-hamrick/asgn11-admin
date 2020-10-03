<?php

class Seller {

 public static $job = "to sell";

  public static function my_job() {
    echo static::$job . " is my job!" . self::$job;
  }

}

class Customer extends Seller {

	 public static $job = ", no...... to buy!";

}

echo Seller::my_job();
echo Customer::my_job();

?>
