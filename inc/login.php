<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery.dynatable.css">
  <link rel="stylesheet" href="../css/toastr.min.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../css/animate.min.css">
<link rel="stylesheet" href="../css/fontawesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background:linear-gradient(rgba(0,0,40,5),rgba(0,0,40,0.5)),url(../img/log.jpg);
            
            background-position: center;
        }
    </style>
</head>
<body>
<div class="logcon">
<div class="fluid-container" style="max-width:600px;"><br><br>
       <div class="card">
       <div class="card-header bg-danger text-white text-center">
           <h3>Login Panel</h3>
       </div>
        <div class="card-body text-dark">             
                <label for="email">Enter Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" autofocus><br>
                <label for="password">Enter Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"><br>
             <center>   <input type="submit" class="btn btn-success " value="submit" id="btn-login"></center>
        <br> <h5 class="text-primary text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;need an account?click here to <a href="signup.php">register</a></h5>
            </div>  
        </div>
          
           
    </div>
    </div>
<?php include 'footer.php';   ?>