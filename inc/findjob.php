<?php include'header.php'; ?>
<?php include'../helper/config.php'; ?>
<?php include'menu.php'; ?>
<br>
<br><br>
<marquee><font color="green" size=20>New Jobs</font></marquee>
<br><br>
<?php
$output='';
$query=mysqli_query($conn,"select * from jobs order by jid desc");
while($row=mysqli_fetch_array($query))
{
    
    $cname=$row['cname'];
    $location=$row['location'];
    $salary=$row['salary'];
    $req=$row['req'];
    $jname=$row['jname'];
    $exp=$row['exp'];
   $output.='
    <tr>
    <td>'.$cname.'</td>
    <td>'.$location.'</td>
    <td>'.$salary.'</td>
    <td>'.$req.'</td>
    <td>'.$jname.'</td>
    <td>'.$exp.'</td>
    </tr>
    ';
}
?>
<center>
    <h1 style="text-shadow:5px 2px 4px white">Jobs </h1>
</center>
<div class="f">
    <div class="card card-body">
        <table class="table table-bordered" id="dt">
            <thead style="background-color:blue;">
                <tr>
                    <th>Company name</th>
                    <th>Location</th>
                    <th>Salary</th>
                    <th>req</th>
                    <th>Jname</th>
                    <th>exp</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $output; ?>
            </tbody>
        </table>
    </div>
</div>
?>
<?php include 'footer.php';  ?>

<script>
$('#dt').dynatable();
</script>