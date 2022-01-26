<?php
include 'config.php';
$oldemail=$_POST['oldemail'];
$newemail=$_POST['newemail'];
$result=mysqli_query($conn,"update admins set email='$newemail' where email='$oldemail'");
if($result){
echo "pass";

}
else{
    echo mysqli_error($conn);
}




?>