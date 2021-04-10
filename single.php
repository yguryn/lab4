<?php
class Single{
    private static $instance;
    private $some;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }


    public function getSome()
    {
        return $this->some;
    }


    public function setSome($some)
    {
        $this->some = $some;
    }


}

session_start();

unset($_SESSION['username']);

echo 'Привіт, '.$_SESSION['username'] . "<br/>";

$instance = Single::getInstance();
$instance->setSome(10);
$instance2 = Single::getInstance();
echo $instance2->getSome() . "<br/>";
echo $instance === $instance2;