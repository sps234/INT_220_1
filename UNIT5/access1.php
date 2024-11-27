<!-- In the next example we have added access modifiers to two methods. Here, if you try to call the set_color() or the set_weight() function it will result in a fatal error (because the two functions are considered protected and private), even if all the properties are public: -->
<?php
class Fruit
{
  public $name;
  public $color;
  public $weight;

  function set_name($n)
  {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n)
  { // a protected function
    $this->color = $n;
  }
  private function set_weight($n)
  { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>