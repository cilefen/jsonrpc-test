<?php

require __DIR__ . '/vendor/autoload.php';

class MethodsClass {
    public $error = null;

    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract() {
        $this->error = 'This function is not yet implemented';
    }
}

$methods = new MethodsClass();

$server = new JsonRpc\Server($methods);
$server->receive();
