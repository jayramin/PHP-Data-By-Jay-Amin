<?php


class A
{
   function __toString() {
        return __CLASS__;
    }
    
}
class B extends A
{
    function __toString() {
        return __CLASS__."  ".$this->var;
    }
}
$ob= new A();
echo $ob;