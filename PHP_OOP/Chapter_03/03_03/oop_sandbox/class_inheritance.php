<?php

class User {

  var $first_name;
  var $last_name;
  var $username;

  function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

}

class Customer extends User {
}

class Customer2 extends Customer {
}

$u = new User;
$u->first_name = 'Jerry';
$u->last_name = 'Seinfeld';
$u->username = 'jseinfeld';

$c = new Customer;
$c->first_name = 'George';
$c->last_name = 'Costanza';
$c->username = 'gcostanza';
$d  = new Customer2;
echo $u->full_name() . '<br />';
echo $c->full_name() . '<br />';

echo get_parent_class($u) . '<br />';
echo get_parent_class($c) . '<br />';

if(is_subclass_of($c, 'User')) {
  echo "Instance is a subclass of User.<br />";
}

$parents = class_parents($d);
echo implode(', ', $parents) . '<br />';

?>
