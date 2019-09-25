<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 24/09/19
 * Time: 18:26
 */




























//2. Numbers
//a. Integers
//A non decimal number
//1. Should have atleast 1 decimal point
//2. Must not have decimal point
//3. Can be +ve or -ve

//php has the following functions to check if the type of a variable is integer
//is_int()
//is_integer()
//is_long()
echo '<br>';
$x = 2300;
//var_dump() will tell you if a number is an integer, a anumber of a boolean
var_dump($x);
echo '<br>';
var_dump(is_int($x));

//Research on float data types in php
is_float($x);

//Php constants
//To create a constant use the define() function

//syntax of creating a constant
//define(name, value, case-insensitive)
//name : the specific name of the constant
//value : the specific value of the constant
//case-insensitive: specifies whether the constant name should be case-insensitive
//case-insensitive:false by default
//If you don't define case-insensitive it will always take case-sensitive by default

//case-sensitive
define("pi", 3.14);
echo pi;
echo PI;
echo '<br>';
//case-insensitive
define("water", "H20", true);
echo WATER;
echo '<br>';
echo water;
echo '<br>';
echo wAteR;