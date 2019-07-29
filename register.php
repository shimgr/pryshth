<?php
    if (isset($_POST['submit'])) {
        function spamcheck($field) {
            $field=filter_var($field, FILTER_SANITIZE_EMAIL);
            if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        $email_to =   'pryshth@gmail.com';
        $mailcheck = spamcheck($_POST["email"]);
        if ($mailcheck==TRUE) {
            $name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
            $email = $_POST['email'];
            $message .= "\nFrom IP Address : ".$_SERVER['REMOTE_ADDR'];
            $message .= "\n First Name: ".$_POST['first_name'];
            $message .= "\n Last Name: ".$_POST['last_name'];
            $message .= "\n Email: ".$_POST['email'];
            $message .= "\n Phone: ".$_POST['phone'];
            $message .= "\n Address: ".$_POST['address'];
            $message .= "\n City: ".$_POST['city'];
            $message .= "\n Date of Birth: ".$_POST['datepicker'];
            $message .= "\n Why Pryshth: ".$_POST['why_pryshth'];
            $message .= "\n Job Status: ".$_POST['job_status'];
            $message .= "\n Source: ".$_POST['source'];
            $message = wordwrap($message, 200);
            $headers  = "From: $name\r\n";
            $headers .= "Reply-To: $email\r\n";
            if(mail($email_to, "Email From website", $message, $headers)){
                header("Location: http://pryshth.org");
                echo 'sent';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="Ashish Bansal">

    <title>Pryshth</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Animating Text -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/morphext.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/bootstrap-dialog.css">
    <link rel="stylesheet" href="css/datepicker.css">
</head>
    <!-- register section -->
    <section style="padding-top:50px" id="register" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-md-offset-3">
                    <form role="form" id="myform" method="post" data-toggle="validator">
                        <h2>Register with us <small> and Get involved in Pryshth.</small></h2>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="Phone" tabindex="4" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" tabindex="4" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="city" id="city" class="form-control input-lg" placeholder="City" tabindex="4" required>
                        </div>

                        <div class="form-group">
                                <select id="selectbasic-0" placeholder="Job Status" name="job_status" required class="input-lg form-control">
                                    <option value="" disabled selected>Job Status</option>
                                    <option >Student</option>
                                    <option>Working</option>
                                    <option>Others</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <input type="text" value="01-01-1970" id="datepicker" name="datepicker" required class="form-control input-lg" placeholder="Date of Birth" tabindex="4">
                        </div>

                        <div class="form-group">
                            <textarea name="why_pryshth" class="form-control input-lg" required placeholder="Why PRYSHTH?" rows="4" id="why"></textarea>
                        </div>

                        <div class="form-group">
                                <select id="source" required placeholder="Source" name="source" class="input-lg form-control">
                                    <option value="" disabled selected>Source</option>
                                    <option>Friend</option>
                                    <option>Media</option>
                                    <option>Blog</option>
                                    <option>Facebook</option>
                                    <option>Other</option>
                                </select>
                        </div>

                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-centered">
                                 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                            </div>
                        </div>

                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-md-12"><input name="submit" type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                        </div>
                        <div class="modal-body">
                            <p> All the volunteers should be at least class 12 qualified.</p>
                            <p> Student volunteers should work minimum of 15 hours in a week, failing which he/she would not be eligible for any appreciation letter.</p>
                            <p> He/she should be part of team pryshth for at least 6 months in order to receive formal recognition.</p>
                            <p> If any member is found creating nuisance in team, then he/she would be excluded from the team.</p>
                            <p> If the member is not available for the work, then he/she should give prior information to any one of founder member.</p>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <br><br>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Morphext -->
    <script src="js/morphext.min.js"></script>

    <!-- checkbox -->
    <script src="js/bootstrap-checkbox.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>

    <script src="js/bootstrap-dialog.js"></script>

    <script src="js/validator.js"></script>
    <script>
        $('#datepicker').datepicker({
                format: 'mm-dd-yyyy'
            });

        $("#js-rotating").Morphext({
            animation: "lightSpeedIn",
            separator: ",",
            speed: 2000
        });
    </script>

    <script src="http://www.google.com/maps/api/js?sensor=true"></script>
    <script src="js/main.js"></script>
</body>

</html>
