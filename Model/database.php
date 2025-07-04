<?php
    $host= "localhost";
    $user= "root";
    $pass="";
    $db="RevisionFor_POS";
    $conn="";

    try
    {
        $conn=new mysqli($host, $user, $pass, $db);
       
    }
    catch(mysqli_sql_exception $e){
        echo "Not connected";
    }
    
?>