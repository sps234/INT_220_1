<?php
interface MyInterface
{
   public function getName();
   public function getAge();
}
class MyClass implements MyInterface
{
   public function getName()
   {
      echo "My name A" . '<br>';
   }
   public function getAge()
   {
      echo "My Age 12";
   }
}
$obj = new MyClass;
$obj->getName();
$obj->getAge();
?>