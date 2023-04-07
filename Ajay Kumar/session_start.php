<?php
//  Session : used to manage information across different pages;

// how to start session;
session_start();
$_SESSION['username'] = 'ajay';
$_SESSION['fav_cat'] = 'cars';
echo 'we have saved the session';


?>