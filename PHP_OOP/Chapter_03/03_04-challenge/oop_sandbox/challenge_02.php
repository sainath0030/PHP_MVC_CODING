<?php

class Animal {

  var $name;
  var $color;
  function name() {
    return $this->name;
  }
  function color() {
    return $this->color;
  }

}

class Cat extends Animal{

  var $sound;

  public function sound(){
    return $this->sound;;
  }
  
}


class PartianCat extends Cat{

  public $life;

  public function lifeSpan(){
    return $this->life .' Years';
  }
}

$trek = new Animal;
$trek->name = 'Trek';
$trek->color = 'blue';

$cd = new Cat;
$cd->sound = 'Mewooo';

$par  = new PartianCat;
$par->life = 12;

echo $trek->name() . "<br />";
echo $trek->color() . "<br />";

echo $cd->sound() . "<br />";
// notice that one is property, one is a method
echo "<br />";
echo $par->lifeSpan() . "<br />";

?>
