<?php
?>
<html>
    <head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cafe de Valentino | Password Recovery</title>	
        <!-- core CSS -->
        <link href="http://lms.xeroneit.net/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://lms.xeroneit.net/bootstrap/css/datepicker.css" rel="stylesheet">
        <link href="http://lms.xeroneit.net/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://lms.xeroneit.net/assets/css/animate.min.css" rel="stylesheet">
        <link href="http://lms.xeroneit.net/assets/css/main.css" rel="stylesheet">
        <link href="http://lms.xeroneit.net/assets/css/custom.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="http://lms.xeroneit.net/assets/js/html5shiv.js"></script>
        <script src="http://lms.xeroneit.net/assets/js/respond.min.js"></script>
        <![endif]-->     

        <!-- for RTL support -->

        <script type="text/javascript" src="http://lms.xeroneit.net/assets/js/jquery.js"></script>
        <!-- end of for modal effect -->
        <script type="text/javascript" src="http://lms.xeroneit.net/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://lms.xeroneit.net/bootstrap/js/bootstrap-datepicker.js"></script>


        <script src="http://lms.xeroneit.net/plugins/xregexp/xregexp.js" type="text/javascript"></script>



        <link rel="shortcut icon" href="img/logo1.png">    
    </head>
    <body class="app_body" style="">

        <div class="container-fluid sticky_top no_margin">
            <div class="row">
                <div class="col-xs-12 background_white" style="height:80px">
                    <h1><a href="login.php"><img src="img/vlogo.jpg" style="height:65%;" alt="LMS" class="img-responsive"></a></h1>
                </div>
            </div>
        </div>

        <div class="container-fluid front_content">
            <!-- page content -->
            <br>
            <style>#recovery_form{text-align:center;}</style>
            <style>#wait{padding-top:20px;padding-left:10px;}</style>

            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 border_gray grid_content padded background_white">
                    <h6 class="column-title"><i class="fa fa-key fa-2x blue"> Password Recovery</i></h6>
                    <div class="account-wall" id="recovery_form"> 
                        <div class="form-group">
                            <div id="msg"></div>
                            <form method="post">
                                <label class="col-xs-12" style="margin-left:0;padding-left:0;">Enter Your Email</label>
                                <input type="email" name="email"  placeholder="Enter Your Email" style="padding-left:100px">
                                </div>
                                <div class="form-group">
                                    <input type="submit" style="margin-top:20px" value="Reset Password"class="btn btn-warning btn-lg" name="btn_send">
                                    <span id="wait"></span>
                                    <div class="col-sm-offset-10">
                                    <a href="login.php">Back to Login</a>
                                    </div>
                            </form>
                        </div>  

                    </div>      
                </div>
            </div>



<!--                <script type="text/javascript">
                    $('document').ready(function () {
                        $("#submit").click(function () {
                            $("#msg").removeAttr('class');
                            $("#msg").html("");

                            var email = $("#email").val();
                            if (email == '')
                            {
                                $("#msg").attr('class', 'alert alert-warning');
                                $("#msg").html("Please enter an email address.");
                            } else
                            {
                                $("#wait").html("<img src='http://lms.xeroneit.net/assets/pre-loader/Ovals in circle.gif' height='20' width='20'>");
                                $.ajax({
                                    type: 'POST',
                                    url: "http://lms.xeroneit.net/home/code_genaration",
                                    data: {email: email},
                                    success: function (response) {
                                        $("#wait").html("");
                                        if (response == '0')
                                        {
                                            $("#msg").attr('class', 'alert alert-danger');
                                            $("#msg").html("This email is not associated with any member.");
                                        } else
                                        {
                                            var string = "<div class='well'>" +
                                                    "<p>" +
                                                    "An email containing a url and a password recovery code is sent to your email.<br>" +
                                                    "Check your inbox and perform the following steps.:" +
                                                    "</p>" +
                                                    "<ol>" +
                                                    "<li>Go to the provided url.</li>" +
                                                    "<li>Enter the provided code.</li>" +
                                                    "<li>Reset your password.</li>" +
                                                    "</ol>" +
                                                    "<h4>Link and code will expire after 24 hours.</h4>" +
                                                    "</div>";
                                            $("#recovery_form").slideUp();
                                            $("#recovery_form").html(string);
                                            $("#recovery_form").slideDown();
                                        }
                                    }
                                });
                            }
                        });
                    });
                </script>-->

            <!-- page content --> 
        </div>

        <!-- footer -->
        <footer id="footer" class="sticky_bottom">
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-xs-12">             
                        CDV - <a target="_BLANK" href="newhomepage.php"><b>Cafe De Valentino</b></a> 
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer --> 

        <?php
        if (isset($_POST['btn_send'])) {


            require 'PHPmailer-master/PHPMailerAutoload.php';

            $mail = new PHPMailer();
            $mail->IsSmtp();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            //$mail ->Host = "tls.gmail.com";
            $mail->Host = 'smtp.gmail.com';
            //$mail->Host = 'tls://smtp.gmail.com';
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "imjeel46@gmail.com";
            $mail->Password = "8000333505";
            $mail->SetFrom("imjeel46@gmail.com");
            $mail->Subject = "OTP | CAFE DE VALENTINO";
            $mail->Body = "Click On Below Link To Change Your Password"
                    . "   http://localhost/valentino/forgetpasswordlink.php";
            $mail->AddAddress("$_POST[email]");

            if (!$mail->Send()) {
                echo "Mail Not Sent";
                echo "$mail->ErrorInfo";
            } else {
                echo "Mail Sent";
            }
        }
        ?>

    </body>

</html>
