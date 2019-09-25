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
//(git add. adds all files and folders to staging area)
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git status
//On branch master
//
//No commits yet
//
//Changes to be committed:
//  (use "git rm --cached <file>..." to unstage)
//
//        new file:   Lesson_2.php
//        new file:   Lesson_3.php
//        new file:   lesson_1.php

//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git commit -m "Initial Commit"
//[master (root-commit) c625f5e] Initial Commit
// 3 files changed, 226 insertions(+)
// create mode 100644 Lesson_2.php
// create mode 100644 Lesson_3.php
// create mode 100644 lesson_1.php
//git commit -m to put files at commit stage, you can make changes even at this stage then
//do git add to add that specific file that you have made changes on
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git remote add origin https://github.com/Eric-progbit/Lesson-3-PHP-basics.git
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git push -u origin master
//Username for 'https://github.com': Eric-progbit
//Password for 'https://Eric-progbit@github.com':
//Counting objects: 5, done.
//Delta compression using up to 2 threads.
//Compressing objects: 100% (5/5), done.
//Writing objects: 100% (5/5), 1.99 KiB | 1.99 MiB/s, done.
//Total 5 (delta 0), reused 0 (delta 0)
//To https://github.com/Eric-progbit/Lesson-3-PHP-basics.git
// * [new branch]      master -> master
//Branch 'master' set up to track remote branch 'master' from 'origin'.

//Comparison operators:
//Everytime you deal with a comparison operator you deal with a data type called boolean which states
//whether it is true or false
//Equal(==): returns true if $x is equal to $y
var_dump($x == $y);
//Identical (===): returns true if $x and $y are equal and are of the same datatype
var_dump($x === $y);
//Not equal (!=) returns true if $x is not equal to $y
var_dump($x != $y);
//Not identical (!==) returns true if $x is not equal to $y and they are not identical
var_dump($x !== $y);


//Pushing to the same repository where one file lesson_3.php was edited
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git status
//On branch master
//Your branch is up-to-date with 'origin/master'.
//
//Changes not staged for commit:
//  (use "git add <file>..." to update what will be committed)
//  (use "git checkout -- <file>..." to discard changes in working directory)
//
//        modified:   Lesson_3.php
//
//no changes added to commit (use "git add" and/or "git commit -a")
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git add .
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git status
//On branch master
//Your branch is up-to-date with 'origin/master'.
//
//Changes to be committed:
//  (use "git reset HEAD <file>..." to unstage)
//
//        modified:   Lesson_3.php
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git commit -m 'Added comparison operators'
//[master 0904e3b] Added comparison operators
// 1 file changed, 49 insertions(+), 5 deletions(-)
//emobilis@emobilis-OptiPlex-780:/opt/lampp/htdocs/MITEVENINGCLASS/Lesson_1$ git push
//Username for 'https://github.com': Eric-progbit
//Password for 'https://Eric-progbit@github.com':
//Counting objects: 3, done.
//Delta compression using up to 2 threads.
//Compressing objects: 100% (3/3), done.
//Writing objects: 100% (3/3), 1.71 KiB | 1.71 MiB/s, done.
//Total 3 (delta 0), reused 0 (delta 0)
//To https://github.com/Eric-progbit/Lesson-3-PHP-basics.git
//   c625f5e..0904e3b  master -> master


?>
