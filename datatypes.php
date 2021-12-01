<?php
//Data types in php
// float
// boolean
// object
// array
// null

$name='Sarthak';// single quotes me bhi likha ja sakta hai string me.
echo "$name";
echo "<br>";
// float is decimal point number.
// var_dump wala function use kerke app log kisi variable ka data type aur uska value pata ker sakte ho.
$is=false;
echo $is;//prints nothing.jab bhi aapka variable false hai to apko echo blank string return kerta hai.
var_dump($is);//prints data type and value
echo "<br>";
$sd=true;
echo $sd;//prints one- 1
//object instances of class
//employee class hai to sarthak is an object
//array indexing from 0 always
echo "<br>";
$friends=array("ajsbdsh","sbadvsj",1,5.1);
var_dump($friends);
echo "<br>";
echo $friends[2];
//null matlab reset ker diya.koi value nahi hai.
?>