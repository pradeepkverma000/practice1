<?php
$file = fopen("myfile.txt","r");
 fwrite($file,'using write method');
 $message = fread($file,filesize("myfile.txt"));
 echo $message;
 fclose($file);

//  echo "file created successfully";
?>