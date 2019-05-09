<?php
class destruction {
    var $name;

    function destruction($name) {
        $this->name = $name;
        register_shutdown_function(array(&$this, "shutdown"));
    }

    function shutdown() {
        echo 'shutdown: '.$this->name."<br>";
    }

    function __destruct() {
        echo 'destruct: '.$this->name."<br>";
    }
}

// $a = new destruction('a: global 1');

// function test() {
//     $b = new destruction('b: func 1');
//     $c = new destruction('c: func 2');
// }
// test();

$d = new destruction('d: global 2');

?>