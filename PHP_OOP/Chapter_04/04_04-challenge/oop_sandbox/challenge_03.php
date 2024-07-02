<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weight_kg = 0.0;
  protected $wheels  =   2;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function weight_lbs() {
    return round(floatval($this->weight_kg) * 2.2046226218 ,2) .'lbs';
  }

  public function set_weight_kg($value) {
    $this->weight_kg = round(floatval($value), 2);
  }


  public function get_weight_kg() {
    return $this->weight_kg .'kg';
  }

  public function wheel_details(){
    
    $wheels = $this->wheels == 1 ? " 1 wheels" : "{$this->wheels} wheel"; 
    return "it has ". $wheels .".";
  }

}

class Unicycle extends Bicycle{
   
    protected $wheels   = 1;    

    public function bug_test(){
        return $this->weight_kg;
    }

}



$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';
$trek->set_weight_kg(1.0);

$cd = new Unicycle;
$cd->brand = 'Cannondale';
$cd->model = 'Synapse';
$cd->year = '2016';
$cd->set_weight_kg(8.0);
 
echo $trek->name() . "<br />";
echo $trek->wheel_details() . "<br />";
echo $cd->name() . "<br />";
echo $cd->wheel_details() . "<br />";

echo $trek->get_weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
// notice that one is property, one is a method
echo '<hr>';
$trek->set_weight_kg(2);
echo $trek->get_weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />"; 
echo '<hr>';
echo 'Unicycle <br>';
$cd->set_weight_kg(2);
echo $cd->bug_test() . "<br />";
echo $cd->weight_lbs() . "<br />"; 

?>
