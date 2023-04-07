<?php
$a = "a quick lazy dog jump over the fox umesh o 201 202 203 204 205 2011 2012 2013 2014";
$reg = preg_match('/[a]/i',$a,$array); // preg_match will print the charcter when it will lies at first time;

$reg = preg_match_all('/[a]/i',$a,$array);// preg_match_all print all the character which are lies between given range;

$reg = preg_match_all('/dog|fox/i',$a,$array); // for searching multiple values;

$reg = preg_match_all('/[uj]/i',$a,$array); // to search several character;

$reg = preg_match_all('/[^uj]/i',$a,$array); // to search several character except these character;

$reg = preg_match_all('/[a-h]/i',$a,$array); // to search character between a given range;

$reg = preg_match_all('/[A-Za-z]/i',$a,$array); // to search all characters

$reg = preg_match_all('/20[1-3]/i',$a,$array); // to search the numbers;

$reg = preg_match_all('/20[1-4][1-5]/i',$a,$array); // to search element of four digit;

$reg = preg_match_all('/l[a][a-z]y/i',$a,$array); // to print the word by providing the word which lie in between or middle;

$reg = preg_match_all('/umesh[\W]/[ao]/i',$a,$array); // w will neglect the space;



echo "<pre>";
print_r($array);
echo "</pre>";
?>