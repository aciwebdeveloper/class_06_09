<?php
   //  class Car{
   //  protected $id; 
   // //  // // we can access within class and its subclasses 
   // //  // // public = can access anywhere in file 
   // //  // // private = we can acess within class
   //  public function __construct($id){
   // //   $this->id=$id;
   // //  }
   // //  // public function __destruct(){  
   //   public function get_if(){
   //    echo $this->id;
   //  return "Helloo ";
   //   }
   // }
   //  $obj = new Car(5); 
   //  $result = $obj->get_if();
   //  echo  $result;


   // // class Vehicle extends Car
   // // {



   // // }
class Calculation{

 public $a,$b,$c;

 function sum(){
  $this->c= $this->a + $this->b;
  return $this->c;

 }
}
$result = new Calculation;
$result->a=50;
$result->b=10;

echo $result->sum();











?>