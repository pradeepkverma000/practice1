<?php
session_start();
if(isset($_SESSION['username'])){
    echo 'welcome '.$_SESSION['username'];
    echo "<br> your favourite catagory is ".$_SESSION['fav_cat'];
    echo "<br>";
}
else{
    echo "please login to continue";
}

?>