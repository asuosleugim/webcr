<?php
    $host="localhost"; //change to your host
    $db_user="root";   //change if mysql user <> root
    $db_password="";   //put the password
    $db="webcr";       //change if database <> webcr
/*******************************************************
                 Don't change below                   
********************************************************/
$conn = mysqli_connect($host, $db_username, $db_password)
        or die ('Error Cannot Connect to MySQL');
        @mysqli_select_db($database) or die( "Unable to select database");
?>
