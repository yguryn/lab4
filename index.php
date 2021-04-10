<?php
$first = "first ";
$second = "second <br>";
echo "$first $second ";
echo $first . $second;
echo '$first $second <br>';
$first = 1;
echo "\" $first <br>";
$number = "1.5";
echo $first + $number;

$arr = array(1,2,3,4,5);
foreach ($arr as $item){
    echo "<br/> $item ";
}
echo "<br>";


$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4
);

echo $a["two"] . "<br/>";

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v. <br/>";
}

$b = array(
    "one",
    "two",
    4 => "three",
    "four"
);


foreach ($b as $k => $v) {
    echo "\$b[$k] => $v. <br/>";
}

function getArray() {
    return array(1, 2, 3);
}

$thirdElement = getArray()[2];
echo $thirdElement . "<br/>";

$x = 15;
$y = "15";

if($x == $y){
    echo "true <br/>";
}else{
    echo "false";
}

if($x === $y){
    echo "true";
}else{
    echo "false <br/>";
}

if($x === (int)$y){
    echo "true <br/>";
}else{
    echo "false <br/>";
}

echo '
<html>
<body>

<form method="post" action="index.php">Поля для інформації<br><br>
 Укажіть ім\'я: <input name="user_name" type="text" maxlength="20" size="25" value="" />
<br><br> Укажіть вік: <input name="age" type="text" maxlength="2" size="3" value="" />
<br><br> <input type=submit value="Передать інформацію"></form>
</body>
</html>';

if (!empty($_POST["user_name"])&&!empty($_POST["age"]))
{
    echo "Введені дані:<br>";
    echo "ім'я - ";
    echo $_POST["user_name"];
    echo "<br>вік - ";
    echo $_POST["age"];
    echo " років <br/>";
}
else
{
    echo "Інформація відсутня <br/>";
}

switch ($_GET["page"]){
    case "Person.php":
        header("Location: http://localhost/proj/Person.php");
        break;
    case "single.php":
        header("Location: http://localhost/proj/single.php");
        break;
}

session_start();

$_SESSION['username'] = "kolya";
echo 'Привіт, '.$_SESSION['username']."<br>";