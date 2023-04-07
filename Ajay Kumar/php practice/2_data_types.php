<?php

$str = "hello";
echo get_debug_type($str);
echo "<br>";

// string: heredoc method to print string;
// you can provide anything in place ab, but ab starting and ending should be same;
echo <<<ab 
 here we are writing string with
 heredoc method 
 ab;

 
