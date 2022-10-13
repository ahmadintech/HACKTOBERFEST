<?php
$server = "";
$db_user = "";
$db_password = "";
$db_name = "";
try{
    $conn = new mysqli($server, $db_user, $db_password, $db_name);
    if(!$conn){
        echo $conn->error;
    }
}catch(Exception $e){
 echo $e;
}
?>