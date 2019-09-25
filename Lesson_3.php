<?php
//Php operators
//Op are used for arithmetic and logical op
//1.Arithmetic operators
$x = 20;
$y = 2;

//Addition
$res = $x + $y;
//take note of the use of res
echo $res;
echo "<br>";

//Subtraction
$res = $x - $y;
echo $res;

echo "<br>";

//Addition - use of dots to concatinate
$res = $x. " + ". $y. " = " .$res;
echo "<br>";
//or
$res = "$x + $y = $res";
//take note of the use of res - meaning result

//Multiplication
$res = $x * $y;
echo "$x * $y = $res";
echo "<br>";

//Division
$res = $x / $y;
echo "$x / $y = $res";
echo "<br>";

//Modulus
$res = $x % $y;
echo "$x % $y = $res";
echo "<br>";

//Exponential
$res = $x ** $y;
echo "$x ** $y = $res";


//2.Assignment Op
//$a = 'b' is said as string b is assigned to variable a
//$x = $x + 1; is said as variable x is reasigned and additional value of 1
echo "<br>";
//$x += 1; is also a method of $x = $x + 1; which is shortened due to the rule of DRY
echo "<br>";
//examples:
$x = $x + 1;
echo "<br>";
$x += 1;
echo $x;

$x = $x * 2;
echo "<br>";
$x *= 2;
echo $x;

$x = $x ** 2;
echo "<br>";
echo $x;

$x = $x % 2;
echo "<br>";
$x %= 2;
echo $x;

//Linux & Termal commands:
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS$ ls
//Lesson_1  SilverbellSafaris
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS$ cd Lesson_1
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ ls
//lesson_1.php  Lesson_2.php  Lesson_3.php
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ mkdir test_folder
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ ls
//lesson_1.php  Lesson_2.php  Lesson_3.php  test_folder
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$

//Git commands:
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git init
//(git init creates an empty repository in git)
//Initialised empty Git repository in /opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1/.git/
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git add .
//git add. adds all files and folders





?>
