<?php
include 'config.php';
session_start();
ob_start();

if (isset($_REQUEST['btn_change'])) {
    $newpassword = $_REQUEST['newpassword'];
    $confirmpassword = $_REQUEST['confirmpassword'];


    if ($newpassword == $confirmpassword) {
        $update = "update registration set password='$newpassword'";
        mysqli_query($link, $update);
        echo "<script>alert('Password Change Succeefully!!!')</script>";
    } else {
        echo "<script>alert('Password And Confirm Password Are Not Match!!!')</script>";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>change Password</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet">
        <link href="css/animation.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--Custom Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!--[if lt IE 9]> 	
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <style>
            .a{
                margin-right: 10px;
                margin-left: -10px;
            }

        </style>
        <script>
            function validateForm() {
                var x = document.forms["myform"]["txtid"].value;
                if (x == "") {
                    alert("Id must be filled out");
                    return false;
                }
            }
        </script>
    </head>
    <body><form  name="myform"  method="get" onsubmit="return validateForm()">
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span></button>
                        <a class="navbar-brand" href="#"><span>Cafe </span>De<span> Valentino</span></a>
                    </div>
                </div>
            </nav>


            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main a">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="newhomepage.php">
                                <em class="fa fa-home"></em>
                            </a></li>
                        <li class="active">Forget Password</li>
                    </ol>
                </div><!--/.row-->



                <br>
                New Password:<input type="password" name="newpassword" class="form-control" required="">
                <br>
                Confirm password:<input type="password" name="confirmpassword" class="form-control" required="">
                <br>

                <input type="submit" class="btn btn-success" name="btn_change" value="change password">


                <div class="col-sm-offset-15">
                    <a href="login.php">Back to Login</a>
                </div>
            </div>
<?php
//                           
//                            if (isset($_GET['btn_change'])) {
//                                
//                                $newpass = $_GET['newpassword'];
//                                $confirmpass = $_GET['confirmpassword'];
//                                $npass=md5($newpass);
//
//
//                                $servername = "localhost";
//                                $username = "root";
//                                $password = "";
//                                $dbname = "lms";
//
//
//
//// Create connection
//                                $conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//                                if ($conn->connect_error) {
//                                    die("Connection failed: " . $conn->connect_error);
//                                }
//
//                                if ($_GET["newpassword"] === $_GET["confirmpassword"]) {
//                                    echo"success!";
//                                    $sql = "UPDATE login SET Password='$npass' WHERE Username='$name'";
//                                    echo $name;
//                                    if ($conn->query($sql) === TRUE) {
//                                        echo "Password change successfully";
//                                    } else {
//                                        echo "Error updating record: " . $conn->error;
//                                    }
//                                } else
//                                    echo "<script>alert('Password not match ');</script>";
//
//
//
//
//                                $conn->close();
//                            }
?>
        </form>
    </body>
</html>
            <?php
            ob_end_flush();
            ?>