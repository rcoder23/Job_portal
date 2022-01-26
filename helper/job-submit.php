<?php
include 'config.php';
$cname=$_POST['cname'];
$loc=$_POST['loc'];
$salary=$_POST['salary'];
$req=$_POST['req'];
$jname=$_POST['jname'];
$ex=$_POST['ex'];
$jpro=$_POST['jpro'];
$cum=$_POST['cnum'];
$pemail=$_POST['pemail'];
$query="insert into jobs(cname,location,salary,req,jname,exp,jproname,contact,email) values('$cname','$loc','$salary','$req','$jname','$ex','$jpro','$cum','$pemail')";
$result=mysqli_query($conn,$query);
if($result){
    echo "pass";

}
else
{
    echo mysqli_error($conn);
}

?>