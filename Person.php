<?php


class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
   }

    public function getAge()
    {
        return $this->age;
    }

    public function displayInfo(){
        echo $this->getAge() . "<br/>";
        echo $this->getName() . "<br/>";
    }

}

class Student extends Person{
    private $university;

    function __construct($name, $age, $university)
    {
        parent::__construct($name,$age);
        $this->university = $university;
    }

    public function getUniversity()
    {
        return $this->university;
    }

    public function displayInfo(){
        echo $this->getAge() . "<br/>";
        echo $this->getName() . "<br/>";
        echo $this->getUniversity() . "<br/>";
    }
}

session_start();

echo $_SESSION['username'].' , сторінка Person.php';

echo("<br>");

$person = new Person("Vasya", 20);
echo $person->getAge() . "<br/>";
echo $person->getName() . "<br/>";
$person->displayInfo();

$student = new Student("Kolya", 22, "KPI");
$student->displayInfo();