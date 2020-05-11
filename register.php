<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!DOCTYPE html>
    <html>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Valentino</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect. -->
        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="#"><b>Admin</b>Register</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register your-Aself</p>

                <form  method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name="txt_firstname" class="form-control" placeholder="Full name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div> 
                    <div class="form-group has-feedback">
                        <input type="email" name="txt_email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="cpassword" class="form-control" placeholder="Retype password">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <input type="submit" name="btn_submit" value="Register" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <?php
                $c = mysqli_connect("localhost", "root", "", "cafe");
                if (isset($_POST['btn_submit']) && !empty($_POST['btn_submit'])) {
                    $email = $firstname = $lastname = $password = $contact = $dob = $city = "";

                    if (!empty($_POST['txt_email']) && !empty($_POST['txt_firstname']) && !empty($_POST['password'])) {
                        $email = $_POST['txt_email'];
                        $firstname = $_POST['txt_firstname'];

                        $cpassword = $_POST['cpassword'];
                        if (strlen($_POST['password']) >= 8) {
                            if ($_POST['password'] != $_POST['cpassword']) {
                                echo "<script type='text/javascript'>alert('Password Not Matched')</script>";
                            } else {

                                $password = $_POST['password'];

                                $q = "select email from registration where email='$email'";
                                $r = mysqli_query($c, $q);
                                if (mysqli_num_rows($r) > 0) {

                                    echo "<script type='text/javascript'>alert('User Already Registered')</script>";
                                } else {

                                    $q = "insert into registration (name,password,email) values('$firstname','$password','$email')";
                                    $r = mysqli_query($c, $q);
                                    echo "<script type='text/javascript'>alert('Registered Successfully')</script>";
                                }
                            }
                        } else {
                            echo "<script type='text/javascript'>alert('password length must be greater then 6')</script>";
                        }
                    } else {
                        echo "<script type='text/javascript'>alert('Empty Fields Not Allowed')</script>";
                    }
                }
                $c->close();
                unset($_POST['txt_firstname']);
                unset($_POST['txt_email']);
                unset($_POST['cpassword']);
                unset($_POST['password']);
                unset($_POST['btn_submit']);
                ?>



                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                        Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                        Google+</a>
                </div>

                <a href="login.php" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.register-box -->

        <!-- jQuery 3 -->
        <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>

    </body>
</html>
