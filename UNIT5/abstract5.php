<!-- Methods declared as abstract simply declare the method's signature - they cannot define anybody inside them. Although the body can be present inside a non-abstract method. -->


<?php
// abstract class base{
//    abstract public function printValue(){
//       return "Good morning";
//    }
// }
// class child extends base{
//    public function printValue() {
//       return "ConcreteClass1";
//    }
// }
// $classobj = new child;
// $classobj->printValue();
?>



<?php
abstract class base
{
    abstract public function printValue();

}

class child extends base
{
    public function printValue()
    {
        return "ConcreteClass1";
    }

    public function calculate()
    {
        // Implementation of calculate method
    }

    public function printdata()
    {
        // Implementation of printdata method
    }
}

$classobj = new child;
echo $classobj->printValue();
?>