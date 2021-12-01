<?php

  $name="Sarthak vdf  cv bhgfh";
  echo "$name";
  echo "<br>";
  echo "the length of my string is  "  .  strlen($name);
  //Do strings ko join kerne ke liye '.' use kerte hai
  echo "<br>";
  echo str_word_count($name);
  echo "<br>";
  echo strrev($name);
  echo "<br>";
  echo strpos($name,"hak");//position of the entered substring.if not present then returns nothing.
//it starts with 0 basically array indexing.
echo "<br>";
echo str_replace("Sarthak","Anish",$name);//replacing sarthak with anish
echo "<br>";
echo str_repeat($name,3);//repeating a string 3 times
echo "<br>";
echo rtrim("<>"); 
?>