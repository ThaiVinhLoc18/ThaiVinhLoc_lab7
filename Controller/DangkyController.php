<?php 
    require "../Model/Account.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $account = new Account($name,$email,$phone);
    $save = $account->save();
    if($save == true)
    {
        echo "OKE";
    }
    else
        echo "no";
?>
