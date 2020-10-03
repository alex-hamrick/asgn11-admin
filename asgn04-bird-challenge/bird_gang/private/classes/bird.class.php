<?php

class Bird {

  public $common_name;
  public $habitat;
  public $food;
  public $nest_palcement;
  public $behavior;
  public $backyard_tips;
  protected $conservation_id;


  protected const CONSERVATION_OPTIONS = [
    1 => 'Low Concern',
    2 => 'moderate concern',
    3 => 'High concern',
    4 => 'Extreme concern'
  ];

  public function __construct($args=[]) {

    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest_palcement = $args['nest_palcement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->backyard_tips = $args['backyard_tips'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? 3;

 
  }

  

  public function conservation_level() {
    if($this->conservation_id > 0) {
      return self::CONSERVATION_OPTIONS[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }

}

?>
