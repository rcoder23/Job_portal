<?php
session_start();
include 'config.php';
$email=$_POST['email'];
$password=($_POST['password']);
//echo $email;
$result=mysqli_query($conn,"SELECT * from user WHERE email='$email'");
if(mysqli_num_rows($result)>0)
{
    $result1=mysqli_query($conn,"SELECT * from user WHERE email='$email' AND password='$password'");
    if(mysqli_num_rows($result1)>0){
        $_SESSION["sid"] = $email;
        echo "scc";
    }
    else{
        echo "prr";
    }
}
else{
    echo "err";
}
?>