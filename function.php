<?php 
    require "./db.php";

    function CheckLogin($user,$pass)
    {
        global $con;
        $stmt = $con->prepare("INSERT INTO account (Username, Password) VALUES (?, ?)");
        $stmt->bind_param("sss", $user, $pass);
        $stmt->execute();
        
        $result = $stmt->get_result();
        
    //    $sql = "SELECt * FROM account where Username = '$user' and Password = '$pass'";
    //    $result = $con->query($sql);
       if($result->num_rows > 0){
        echo " successfully";
       }
       else{
        echo "ERROR";
       }
       $stmt->close();
       $con->close();
    }

   
?>