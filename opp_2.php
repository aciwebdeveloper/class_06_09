<?php


//////////////////////////////Interfaces ////////////////////////
interface MyInterface {
    public function doSomething();
    public function doSomethingElse();
}

class MyClass implements MyInterface {
    public function doSomething() {
        // Implementation of the doSomething method
        echo 'do something';
    }

    public function doSomethingElse() {
        echo 'do something else';
    }
}


class MyOtherClass implements MyInterface
{
    public function getName()
    {
        echo 'getName function';
    }
    public function doSomethingElse()
    {
        echo 'myotherclass function';
    }
    public function doSomething()
    {
        echo 'my other class do something';
    }
}

$obj = new MyClass();
echo $obj->doSomething();

$obj = new MyOtherClass();
echo $obj->doSomething();



//////////////////////////////////Static Methods and Properties

class Student
{
    static public $userData = 'Student data';

    static public function getProperty()
    {
        return self::$userData;
    }
}
echo Student::getProperty();

///////////////////////Abstract Class//////////////


abstract class AbstractClass {
    abstract public function getName();
}

class ConcreteClass extends AbstractClass {
    public function getName() {

        echo 'GetName';

    }
}





?>