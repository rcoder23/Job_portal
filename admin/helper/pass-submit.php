<?php
include 'config.php';
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
$result=mysqli_query($conn,"update admins set password='$newpass' where password='$oldpass'");
if($result){
echo "pass";

}
else{
    echo mysqli_error($conn);
}




?>