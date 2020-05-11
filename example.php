<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Example</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <script src="http://code.jquery.com/jquery-1.11.3.min.js" charset="utf-8"></script>
        <script src="rater.js" charset="utf-8"></script>
        <script>
            $(document).ready(function () {
                var options = {
                    max_value: 5,
                    step_size: 0.5,
                    selected_symbol_type: 'hearts',
                    url: 'http://localhost/test.php',
                    initial_value: 0,
                    update_input_field_name: $("#input2"),
                }
                $(".rate").rate();


                $(".rate2").rate(options);

                $(".rate2").on("change", function (ev, data) {
                    console.log(data.from, data.to);
                });

                $(".rate2").on("updateError", function (ev, jxhr, msg, err) {
                    console.log("This is a custom error event");
                });

                $(".rate2").rate("setAdditionalData", {id: 42});
                $(".rate2").on("updateSuccess", function (ev, data) {
                    console.log(data);
                });

            });
        </script>

        <style>
            body
            {
                font-size: 35px;
                font-family: sans-serif;
            }
            .rate-base-layer
            {
                color: #aaa;
            }
            .rate-hover-layer
            {
                color: orange;
            }
            .rate2
            {
                font-size: 35px;
            }
            .rate2 .rate-hover-layer
            {
                color: pink;
            }
            .rate2 .rate-select-layer
            {
                color: red;
            }
            .im
            {
                background-image: url('./images/heart.gif');
                background-size: 32px 32px;
                background-repeat: no-repeat;
                width: 32px;
                height: 32px;
                display: inline-block;
            }
            .im2
            {
                background-image: url('./images/emoji5.png');
                background-size: 64px 64px;
                background-repeat: no-repeat;
                width: 64px;
                height: 64px;
                display: inline-block;
            }
            #rate5 .rate-base-layer span, #rate7 .rate-base-layer span
            {
                opacity: 0.5;
            }
            hr
            {
                border: 1px solid #ccc;
            }
            p
            {
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <form method="post">
        <!-- <p>UTF8</p> -->
        <!-- <div class="rate" data-rate-value=6></div> -->
        <!-- <div class="rate"></div> -->
        <div class="rate2"></div>
        <input id="input2" name="rating" type="text" hidden>
        <?php
        if (isset($_POST['btn_rate'])) {

            $con = mysqli_connect('localhost', 'root', '', 'cafe') or die("Connection error");
            $rating = $_POST['rating'];
            $email = $_GET['email'];
            //echo $rating;
            //echo $name;
            $q = "update rating set rating=$rating where email='$email'";
            $r = mysqli_query($con, $q);
        }
            ?>
        <input type="submit" name="btn_rate" value="SUBMIT"/>


        <!-- <hr> -->
        <!-- <p>UTF-32</p> -->
        <!-- <div id="rate3"></div> -->

        <!-- <hr> -->
        <!-- <p>Font awesome</p> -->
        <!-- <div id="rate4"></div> -->
        <!-- <div id="rate6"></div> -->

        <!-- <hr> -->
        <!-- <p>Image or any other HTML element</p> -->
        <!-- <!-- <div id="rate5"></div> -->
        <!-- <div id="rate7"></div> -->

    <!-- <input id="input1" type="text"> -->
        </form>
    </body>
</html>
