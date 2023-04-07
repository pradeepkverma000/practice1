<?php
$a = 'https://www.google.com';
$b = 'abc@gmail.com';
$ip = '192.156.255.0';
$mac = '00:6a:95:9a67:16';
// if(filter_var($a,FILTER_VALIDATE_URL))
// if(filter_var($b,FILTER_VALIDATE_EMAIL))
if(filter_var($ip,FILTER_VALIDATE_MAC))

{
    echo "true";
}
else{
    echo "false";
}
?>