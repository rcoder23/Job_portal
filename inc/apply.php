<?php include'header.php';?>
<?php include'menu.php';?>
<br><br>
<br>
<div class="mycon">

    <div class="fluid-container">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h3>DETAILS</h3>
            </div>
            <div class="card-body text-primary">
                <label>Full Name</label>
                <input type="text" class="form-control" id="fullname" placeholder="Full name" autofocus><br>
                <label>Location</label>
                <input type="text" class="form-control" id="location" placeholder="Location"><br>
                <label>Mobile no.</label>
                <input type="text" class="form-control" id="Mnumber" placeholder="Mobile number"><br>
                <label>E-mail</label>
                <input type="text" class="form-control" id="aemail" placeholder="Email"><br>
                <label>Enter Password</label>
                <input type="password" class="form-control" id="apassword" name="password" placeholder="Password"><br>
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="confirm-Password"><br>
                <label>Experience</label>
                <input type="text" class="form-control" id="experience" placeholder="Experience"><br>
                <label>Skills</label>
                <input type="text" class="form-control" id="skills" placeholder="skills"><br>
                <label>Profile</label>
                <input type="text" class="form-control" id="jnam" placeholder="profile"><br>
                <label>Job name </label>
                <input type="text" class="form-control" id="profile" placeholder="job name"><br>
                <label>Company name</label>
                <input type="text" class="form-control" id="cname" placeholder="company name"><br>
                <label>Education &nbsp; &nbsp; &nbsp;</label>

                <select class="form-control" id="s">

                    <option value="se">Select Education</option>
                    <option value="pg">Pursuing Graduation</option>
                    <option value="ba">B.A.</option>
                    <option value="bca">B.C.A.</option>
                    <option value="bba">B.B.A.</option>
                    <option value="bcom">B.com</option>
                    <option value="bed">B.Ed</option>
                    <option value="bds">BDS</option>
                    <option value="llb">LLB</option>
                    <option value="mmbs">MMBS</option>
                    <option value="dip">Diploma</option>
                    <option value="bhm">BHM</option>
                    <option value="other">Others</option>
                </select>

                <br>
                <center> <input type="submit" class="btn btn-success " value="APPLY" id="btn-logina"></center>
            </div>
        </div>
    </div>
    <?php include'footer.php';?>
    <script>
        $(document).ready(function() {

            $('#btn-logina').bind('click', function() {



                var phoneno = /^[0-9-+]+$/;
                var numericExpression1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var t = $('#Mnumber').val();
                var elem1 = $("#aemail").val();
                var m = $('#Mnumber').val();
                if ($('#fullname').val() == '') {
                    toastr.warning("Please enter name ");
                    $('#fullname').focus();
                } else if ($('#location').val() == '') {
                    toastr.warning("Please enter location ");
                    $('#location').focus();
                }
                //         
                else if (($('#Mnumber').val() == '')) {
                    toastr.warning("Please enter number");
                    $('#Mnumber').focus();

                } else if (!t.match(phoneno)) {
                    toastr.warning("enter phone numbers in number  fromat");
                    $('#Mnumber').focus();
                } else if (!elem1.match(numericExpression1)) {
                    toastr.warning("Enter email");
                    $('#aemail').focus();

                } else if (!($('#apassword').val() == $('#cpassword').val())) {
                    toastr.warning("password mis match");
                } else if ($('#apassword').val() == '') {
                    toastr.warning("enter password");
                    $('#apassword').focus();

                } else if ($('#experience').val() == '') {
                    toastr.error("enter experience");
                    $('#experience').focus();
                } else if ($('#skills').val() == '') {
                    toastr.error("enter skills");
                    $('#skills').focus();
                } else if ($('#jnam').val() == '') {
                    toastr.error("enter skills");
                    $('#jname').focus();
                } else if ($('#profile').val() == '') {
                    toastr.error("enter profile");
                    $('#profile').focus();
                } else if ($('#cname').val() == '') {
                    toastr.error("entercompany ");
                    $('#cname').focus();
                } else {
                    $.ajax({
                        url: "../helper/applay-submit.php", //wheere data send
                        method: "Post",
                        data: {
                            fname: $('#fullname').val(),
                            location: $('#location').val(),
                            Mnumber: $('#Mnumber').val(),
                            aemail: $('#aemail').val(),
                            apassword: $('#apassword').val(),
                            experience: $('#experience').val(),
                            skills: $('#skills').val(),
                            profile: $('#profile').val(),
                            jnam: $('#jnam').val(),
                            cname: $('#cname').val(),
                            svalue: $('#s').val(),
                            resume: $('#resume').val(),
                        },
                        success: function(data) {
                            //toastr.success(data);
                            if (data == "pass") {
                                toastr.success("Submitted,check your e-mail for further details");

                            } else {
                                toastr.error(data);
                            }

                        },
                        error: function(e) {
                            console.log(e);
                        } })  } }); });
</script>
