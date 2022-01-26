<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<br><br> <br>
<div class="j">
    <!--      <div class="fluid-container">-->
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            <h3>JOB DETAILS</h3>
        </div>
        <div class="card-body text-primary">
            <div class="card-body text-primary">
                <label>COMAPNAY NAME</label>
                <input type="text" class="form-control" id="cname" placeholder="Compnay name" autofocus><br>
                <label>Location</label>
                <input type="text" class="form-control" id="lo" placeholder="Location"><br>
                <label>SALARY</label>
                <input type="text" class="form-control" id="salary" placeholder="Salary"><br>
                <label>REQUIREMENTS</label>
                <input type="text" class="form-control" id="req" placeholder="Requirements"><br>

                <label>JOB name</label>
                <input type="text" class="form-control" id="jname" placeholder="Job name"><br>
                <label>EXPERIENCE</label>
                <select class="form-control" id="ex">

                    <option value="fr">freshers</option>
                    <option value="y1">1 years</option>
                    <option value="y2">2 years</option>
                </select>
                <br><br>
            </div>
            <br><br>
            <!--                     <div class="card">-->
            <div class="card-header bg-primary text-white text-center">
                <h3>PROVIDER DETAILS</h3>
            </div>

            <br>
            <div class="card-body text-primary">
                <div class="card-body text-primary">
                    <label>JOB PROVIDER NAME</label>
                    <input type="text" class="form-control" id="jpro" placeholder="Job provider name"><br>
                    <label>CONTACT NO:</label>
                    <input type="text" class="form-control" id="cnum" placeholder="Contact number"><br>
                    <label>E-mail :</label>
                    <input type="email" class="form-control" id="pemail" placeholder="E-mail" autofocus><br>

                    <center> <input type="submit" class="btn btn-success " value="APPLY" id="jsubmit"></center>



                </div>
            </div>
        </div>
       
        <?php include 'footer.php'; ?>
 <script>    
            $(document).ready(function(){
              $('#jsubmit').bind('click',function(){
                   var numericExpression2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                     var phoneno1 = /^[0-9-+]+$/;
                  var cumt=$('#cnum').val();
                  var pemailt=$('#pemail').val();
                  if($('#cname').val()==""){
                      toastr.warning("Please enter company name");
                      $('#cname').focus();
                  }
                  else if($('#lo').val()==""){
                      toastr.warning("Please enter Location of job");
                      $('#lo').focus();
                  }
                  else if($('#salary').val()==""){
                      toastr.warning("Enter Salary ");
                      $('#salary').focus();
                  }
                  else if($('#req').val()==""){
                      toastr.warning("Enter requirements");
                      $('#req').focus();
                  }
                  else if($('#jname').val()==""){
                      toastr.warning("Enter Job name ");
                      $('#jname').focus();
                  }
                  else if($('#jpro').val()==""){
                      toastr.warning("Enter your name");
                      $('#jpro').focus();
                      
                  }
                  else if(!cumt.match(phoneno1)){
                      toastr.warning("Enter valid Phone number");
                      $('#cnum').focus();
                  }
                else if(!pemailt.match(numericExpression2)){
                    toastr.warning("Enter e-mail correctly");
                    $('#pemail').focus();
                }
                else {
                    $.ajax({
                        url:"../helper/job-submit.php",
                        method:"post",
                        data:{
                           cname:$('#cname').val(),
                            loc:$('#lo').val(),
                            salary:$('#salary').val(),
                            req:$('#req').val(),
                            jname:$('#jname').val(),
                            ex:$('#ex').val(),
                            jpro:$('#jpro').val(),
                            cnum:$('#cnum').val(),
                            pemail:$('#pemail').val(),
                        },
                        success:function(data){
                          //  toastr.success(data);
                            if(data=="pass"){
                                toastr.success("Submitted successfully");
                                
                            }
                            else{
                                toastr.error(data);
                            }
                        },
                        error:function(e){
                            console.log(e);
                        }
                    })
                }
              });
            });
            
            
            
        </script>