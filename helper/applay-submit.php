<?php
include 'config.php';
$fname=$_POST['fname'];
$location=$_POST['location'];
$Mnumber=$_POST['Mnumber'];
$aemail=$_POST['aemail'];
$apssword=md5($_POST['apassword']);
$exp=$_POST['experience'];
$skills=$_POST['skills'];
$profile=$_POST['profile'];
$jnam=$_POST['jnam'];
$cname=$_POST['cname'];
$svalue=$_POST['svalue'];
$query="insert into details(Fname,Location,Mob,Email,pass,Experience,skill,Profile,jnam,Company,Education) values('$fname','$location','$Mnumber','$aemail','$apssword','$exp','$skills','$profile','$jnam','$cname','$svalue')";
$result=mysqli_query($conn,$query);
if($result)
{
    echo "pass";
}
else{
    echo mysqli_error($conn);
}

?>