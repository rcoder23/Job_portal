<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery.dynatable.css">
  <link rel="stylesheet" href="../css/toastr.min.css">
  <link rel="stylesheet" href="../css/custom.css">
<!--  <link rel="stylesheet" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" href="../css/animate.min.css">
<link rel="stylesheet" href="../css/fontawesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="conta"><br><br>
       <div class="card">
       <div class="card-header bg-danger text-white text-center">
           <h3>Signup Form</h3>
       </div>
        <div class="card-body bg-dark text-white">             
                <label for="email">Enter Email</label>
                <input type="text" class="form-control" id="emails" name="email" placeholder="Email"><br>
                <label for="password">Enter Password</label>
                <input type="password" class="form-control" id="passwords1" name="password" placeholder="Password"><br>
                
             <center>   <input type="submit" class="btn btn-success" value="submit" id="btn-sub"></center><br>
             <h3>Allready account <a href="login.php">Click here</a></h3>
        
            </div>  
        </div>
    </div>
 
<?php include 'footer.php';   ?>
   <script>
         $(document).ready(function(){
              $('#btn-sub').bind('click',function(){
                   var numericExpression2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                  var semail=$('#emails').val();
                  if(!semail.match(numericExpression2) ){
                      toastr.warning("enter email correctly");
                      $('#emails').focus();
                  }
                  else if($('#passwords1').val()==''){
                      toastr.warning("password lenght must be greater than 4");
                  }
                  else{
                      $.ajax({
                          url:"../helper/signup-submit.php",
                          method:"post",
                          data:{
                              em:$('#emails').val(),
                              paa:$('#passwords1').val(),
                          },
                          success:function(data){
                              if(data=="pass"){
                                  toastr.success("account created you can login");
                              }
                              else{
                                  toastr.error(data);
                              }
                          }
                              ,
                                  error:function(e){
                                      console.log(e);
                                  }
                          })
                    
                  }
              })
                                 
         });
                           
</script>