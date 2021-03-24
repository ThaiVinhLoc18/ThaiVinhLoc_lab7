<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "bai3";

    $con = new mysqli($servername,$username,$password,$databasename);

    if($con->connect_error){
        die ("Connect Error".$con->connect_error);
    }
       
    

        
?>