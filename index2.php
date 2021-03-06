<?php

trait ForSingleton {

    private function __construct() {  }

    public static function getInstance() {
        /*if ( empty(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;*/

        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function doAction() { echo "Singleton"; }

}

class Singleton {

    private static $instance;

    /**
     * @param mixed $instance
     */
    public static function setInstance($instance): void
    {
        self::$instance = $instance;
    }

    use ForSingleton;

}

$obj_1 = Singleton::getInstance();
$obj_2 = Singleton::getInstance();

var_dump($obj_1 === $obj_2);    // Same object


?>
