<?php
include 'config.php';
$em=$_POST['em'];
$paa=$_POST['paa'];
$query="insert into user(email,password)values('$em','$paa')";
$result=mysqli_query($conn,$query);
if($result){
    echo "pass";
}
else
{
    echo mysqli_error($conn);
}