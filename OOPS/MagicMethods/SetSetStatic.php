<?php


// __call() is triggered when invoking inaccessible methods in an object context.

// __callStatic() is triggered when invoking inaccessible methods in a static context.
class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "<br>";
    }

    /**  As of PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "<br>";
    }
}

// $obj = new MethodTest;
// $obj->runTest('in object context','test','check','data');

MethodTest::runTest('in static context');  // As of PHP 5.3.0
?>