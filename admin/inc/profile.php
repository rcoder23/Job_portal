<?php include 'header.php';  ?>
<?php include 'menu.php';  ?><br>

<div class="logcon">
    <div class="fluid-container" style="max-width:600px;"><br><br>
        <div class="card">
            <div class="card-header bg-danger text-white text-center">
                <h3>Admin Profile</h3>
            </div>
            <div class="card-body text-dark">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <label for="email">Old E-mail</label>
                        <input type="email" class="form-control" id="oldemail" name="email" placeholder="Old E-mail"><br>
                        <label for="text">New E-mail</label>
                        <input type="email" class="form-control" id="newemail" name="oldemail" placeholder="New E-mail"><br>
                        <center> <input type="submit" class="btn btn-success " value="submit" id="btn-email"></center>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><label for="password">Old Password</label>
                        <input type="password" class="form-control" id="oldpass" name="email" placeholder="Old Password" autofocus><br>
                        <label for="text">New Password</label>
                        <input type="password" class="form-control" id="newpass" name="password" placeholder="New Password"><br>
                        <center> <input type="submit" class="btn btn-success " value="submit" id="btn-pass"></center>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>
<?php include 'footer.php';   ?>
<script>
    $(document).ready(function() {
        $('#btn-email').bind('click', function() {
            var numericExpression = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var elemo = $("#oldemail").val();
            var elemn = $("#newemail").val();
            if (!elemo.match(numericExpression)) {
                toastr.error("Enter coreect email");
                $("#oldemail").focus();
            } else if (!elemn.match(numericExpression)) {
                toastr.error("Enter coreect email");
                $("#newemail").focus();
            } else {
                $.ajax({
                    url: "../helper/email-submit.php",
                    method: "post",
                    data: {
                        oldemail: $('#oldemail').val(),
                        newemail: $('#newemail').val()
                    },
                    success: function(data) {
                        if (data == "pass") {
                            toastr.success("e-mail changed successfully");
                        } else {
                            toastr.error(data);
                        }

                    },
                    error: function(e) {
                        console.log(e);
                    }
                })
            }

        });
    });
    $(document).ready(function() {
        $('#btn-pass').bind('click', function() {
            if ($('#oldpass').val() == '') {
                toastr.error("Enter old password");
                $('#oldpass').focus();
            } else if ($('#newpass').val() == '') {
                toastr.error("Enter new password");
                $('#newpass').focus();
            } else {
                $.ajax({
                    url: "../helper/pass-submit.php",
                    method: "post",
                    data: {
                        oldpass: $('#oldpass').val(),
                        newpass: $('#newpass').val()
                    },
                    success: function(data) {
                        if (data == "pass") {
                            toastr.success("password changed successfully");
                        } else {
                            toastr.error(data);
                        }

                    },
                    error: function(e) {
                        console.log(e);
                    }
                })
            }


        });
    });

</script>
