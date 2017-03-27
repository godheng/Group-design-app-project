<?php
    $dbhost='localhost';
    $dbuser='root';
    $dbpass='';
    $db='User';
    $conn = new mysqli($dbhost,$dbuser,$dbpass,$db,GRANT);
    
// check connection

if ($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}else{
    echo "connection success!";
}

?>