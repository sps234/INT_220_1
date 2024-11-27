<!-- Abstract class cannot be directly instantiate. We can't create an object of the abstract class but we can create object for child classes-->
<?php
// abstract class base
// {
//    abstract function calculate();
//    public function msg()
//    {
//       echo "Calculation completed";
//    }
// }
// $obj = new base();
// $obj->adddata();
?>

<?php
// Abstract class cannot be directly instantiated. We can't create an object of the abstract class but we can create an object for child classes.
abstract class base2
{
   abstract function calculate();

   public function msg()
   {
      echo "Calculation completed";
   }
}

class child extends base2
{
   public function calculate()
   {
      echo "Performing calculation...";
   }
}

$obj = new child();
$obj->calculate();
echo "<br>";
$obj->msg();
?>