<?php include 'header.php';  ?>
<?php include 'menu.php';  ?><br><br><br>
<?php include '../helper/config.php';  ?>
<?php 
$output='';
$query=mysqli_query($conn,"select * from details");
while($row=mysqli_fetch_array($query))
{
    $Fname=$row['Fname'];
    $Location=$row['Location'];
    $Mob=$row['Mob'];
    $Email=$row['Email'];
    $pass=$row['pass'];
    $Experience=$row['Experience'];
    $skill=$row['Skill'];
    $profile=$row['Profile'];
    $jnam=$row['jnam'];
    $Company=$row['Company'];
    $Education=$row['Education'];
    $output.='
    <tr>
    <td>'.$Fname.'</td>
    <td>'.$Location.'</td>
    <td>'.$Mob.'</td>
    <td>'.$Email.'</td>
    <td>'.$pass.'</td>
    <td>'.$Experience.'</td>
    <td>'.$skill.'</td>
    <td>'.$profile.'</td>
    <td>'.$jnam.'</td>
    <td>'.$Company.'</td>
    <td>'.$Education.'</td>
    
    </tr>
    ';
}
?>
<center>
    <h1 style="text-shadow:5px 2px 4px white">Employee details</h1>

</center>
<div class="">
    <div class="card card-body">
        <table class="table table-bordered" id="dt">
            <thead style="background-color:black;">
                <tr>
                    <th>Full Name</th>
                    <th>Location</th>
                    <th>Mob</th>
                    <th>E-mail</th>
                    <th>Pass</th>
                    <th>Experience</th>
                    <th>Skills</th>
                    <th>Profile</th>
                    <th>Job name</th>
                    <th>Company</th>
                    <th>Education</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $output; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'footer.php';  ?>
<script>
$('#dt').dynatable();
</script>