
<?php
include 'includes/overall/header.php';
include 'config.php';
$con = mysqli_connect("localhost", "root", "", "cafe");
if (isset($_REQUEST['table_1'])) {
    $tabl_id = $_REQUEST['table_1'];
}

if (isset($_REQUEST['table_2'])) {
    $tabl_id = $_REQUEST['table_2'];
}

if (isset($_REQUEST['table_3'])) {
    $tabl_id = $_REQUEST['table_3'];
}

if (isset($_REQUEST['table_4'])) {
    $tabl_id = $_REQUEST['table_4'];
}

if (isset($_REQUEST['table_5'])) {
    $tabl_id = $_REQUEST['table_5'];
}
if (isset($_REQUEST['table_6'])) {
    $tabl_id = $_REQUEST['table_6'];
}
if (isset($_REQUEST['table_7'])) {
    $tabl_id = $_REQUEST['table_7'];
}
if (isset($_REQUEST['table_8'])) {
    $tabl_id = $_REQUEST['table_8'];
}
if (isset($_REQUEST['table_9'])) {
    $tabl_id = $_REQUEST['table_9'];
}
if (isset($_REQUEST['table_10'])) {
    $tabl_id = $_REQUEST['table_10'];
}

if (isset($_REQUEST['btn_submit'])) {
    $cnumber = $_REQUEST['cnumber'];
    $itemname = $_REQUEST['itemname'];
    $itemqty = $_REQUEST['itemqty'];

    $result = mysqli_query($con, "select item_id from item where item_name='$itemname'");
    $row = mysqli_fetch_row($result);
    $itemid = $row[0];


    $insert = "insert into `order` values('','$cnumber','$tabl_id','$itemid','$itemqty')";
    mysqli_query($con, $insert);

    $result = mysqli_query($con, "select max(`order_id`) from `order`");
    $row = mysqli_fetch_row($result);
    $orderid = $row[0];


    header("Location:bill.php?oid=$orderid");
}
if (isset($_REQUEST['btn_submit'])) {
    $item_id = $_REQUEST['item_id'];
    $item_name = $_REQUEST['item_name'];
    $item_price = $_REQUEST['item_price'];

    $in = "insert into order_item values('','$item_id','$item_name','$item_price')";
    mysqli_query($link, $in);
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Valentino</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition register-page">

        <div class="content-wrapper">
            <div class="">
                <div class="register-logo">
                    <a href="index2.html"><b>Valentino</b>&nbsp; Order</a>
                </div>
            </div>  

            <section class="content">
                <!-- Calendar -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="form-group has-feedback">
                                        Contact Number : <input type="text" name="cnumber" class="form-control" placeholder="Number">
                                    </div>

                                    <div class="form-group has-feedback">
                                        Table ID : <br>
                                        <input type="text" value="<?php echo $tabl_id ?>" readonly="true" name="tableid" id="tableid" class="form-control" placeholder="tid">
                                    </div>
                                    Add Item :
                                    <div class="control-group">

                                        <label class="control-label" for="select01"><span class="required"></span></label>
                                        <div class="search-box">
                                            <div class="result"></div>
                                        </div>
                                        <button type="button" id="additem" class="btn btn-success col-xs-12">Select Item</button><br/>
                                        <!--<a href="#addEmployeeModal" class="btn btn-success col-xs-12" data-toggle="modal"><i class="material-icons" style="font-size:15px;"></i> <span>Select Item</span></a><br>-->

                                        <br>
                                        <button type="submit" name="btn_submit" class="btn btn-primary btn-block btn-flat col-xs-12">Make Bill</button>
                                    </div>


                                </div>
                            </div>
                            <!-- /.box-body -->

                        </div>


                        <!-- /.col -->
                        <div class="col-md-9 "          
                                <div class="modal-content">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h2>Manage <b>Order</b></h2>
                                                </div>
                                                
                                                <input type="text" style="color:#000000;float:right" readonly="true" name="oid" id="oid"/>
                                                <label style="float:right;margin-right:10px; margin-top:5px;">OrderId :</label>

                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <span class="custom-checkbox">
                                                                    <input type="checkbox" id="selectAll">
                                                                    <label for="selectAll"></label>
                                                                </span>
                                                            </th>
                                                            <th>Product</th>
                                                            <th>Price</th>
                                                            <th>Qty</th>
                                                            <th>Subtotal</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="mybody">
                                                    </tbody>
                                                    
                                                </table>
                                                
                                                <!--<label id="total" style="float:right;margin-right:30%;" value="0">0</label>
                                                <label style="float:right;margin-right:2%;" >total :</label>-->
                                                <!--<input type="text" style="color:#000000;float:right;margin-right:20%;" readonly="true" id="total">-->
                                            </div>
                                        </div>


                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /. box -->
                    </div>
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.box -->

            </section>
            <!-- right col -->

            
            <?php
            if (!empty($msg)) {
                ?>
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert"></button>
                    <?php echo $msg ?>	
                </div>
                <?php
            }
            ?>

            <!--            <div class="cl-sm-6">
            
                        </div>-->
        </div>

        <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">					
                        <ul class="nav nav-tabs">
                            <?php
                            $result = mysqli_query($link, "select * from category");
                            $cnt = 0;
                            //echo "1";
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <li class="<?php echo ($cnt == 0 ) ? 'active' : ''; ?>"><a data-toggle="tab" href="#<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?></a></li>
                                <?php
                                $cnt++;
                            }
                            ?>
                        </ul>

                        <div class="tab-content" style="border-left: 1px solid #ddd;
                             border-right: 1px solid #ddd;
                             border-bottom: 1px solid #ddd;
                             padding: 10px;">
                             <?php
                             $result = mysqli_query($link, "select * from category");
                             $cnt = 0;
                             while ($row = mysqli_fetch_assoc($result)) {
                                 ?>
                                <div id="<?php echo $row['cat_name']; ?>" class="tab-pane fade <?php echo ($cnt == 0 ) ? 'in active' : ''; ?>">
                                    <?php
                                    $product = mysqli_query($link, "select * from item where cat_id=" . $row['cat_id']);

                                    while ($product_data = mysqli_fetch_assoc($product)) {
                                        ?>
                                        <input type="button" name="btn_add" class="btn btn-primary text-center click" data-id="<?php echo $product_data["item_id"]; ?>" data-price="<?php echo $product_data["item_price"]; ?>" value="<?php echo $product_data["item_name"] . " " . $product_data["item_price"]; ?>">
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php
                                $cnt++;
                            }
                            $result_product
                            ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>





        <!--    </section>
        </div>-->
        <!-- /.form-box -->

        <!-- /.register-box -->

        <!-- jQuery 3 -->

    </body>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.search-box input[type="text"]').on("keyup input", function () {
                /* Get input value on change */
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if (inputVal.length) {
                    $.get("backend-search.php", {term: inputVal}).done(function (data) {
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else {
                    resultDropdown.empty();
                }
            });

            // Set search input value on click of result item
            $(document).on("click", ".result p", function () {
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function () {
                if (this.checked) {
                    checkbox.each(function () {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function () {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function () {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>


    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <script>
            jQuery(document).ready(function () {
                function dtable()
                {
                    var orid = jQuery("#oid").val();
                    jQuery.ajax({
                        url: 'add_product_order.php',
                        type: 'post',
                        data: {tbody: 1, orid: orid},
                        success: function (rdata) {

                            var obj = JSON.parse(rdata);
                            jQuery("#mybody").html(obj['rtn']);
                            //alert(obj['total']);
                            //jQuery("#total").val(obj['total']);
                            //jQuery("#total").html(obj['total']);
                        }
                    });
                }
                
                jQuery(dtable);
                
                jQuery("#additem").click(function(){
                    //alert('hello');
                    jQuery("#myModal").modal('show');
                });
                jQuery(document).ready(function () {
                    jQuery(".click").click(function () {
                        var pid = jQuery(this).attr('data-id');
                        var pprice = jQuery(this).attr('data-price');
                        var orid = jQuery("#oid").val();
                        jQuery("#myModal").modal('hide');
                        
                        //alert(orid);
                        //alert(pid);

                        jQuery.ajax({
                            url: 'add_product_order.php',
                            type: 'post',
                            data: {pid: pid, pprice: pprice, orid: orid},
                            success: function (rdata) {
                                var obj = JSON.parse(rdata);
                                

                                if (obj['rtn'])
                                {
                                    //alert(obj['rtn']);
                                    jQuery("#oid").val(obj['rtn']);
                                }
                                jQuery(dtable);

                            }
                        });
                    });
                });

                jQuery(document).on('click', '.editp', function () {
                    var sno = jQuery(this).attr('epsno');
                    jQuery.ajax({
                        url: 'add_product_order.php',
                        type: 'post',
                        data: {epson: sno},
                        success: function (rdata) {

                            //var obj =JSON.parse(rdata);
                            dtable();
                        }
                    });
                });
                jQuery(document).on('click', '.editm', function () {
                    var sno = jQuery(this).attr('emsno');
                    jQuery.ajax({
                        url: 'add_product_order.php',
                        type: 'post',
                        data: {emson: sno},
                        success: function (rdata) {

                            //var obj =JSON.parse(rdata);
                            dtable();
                        }
                    });
                });
                jQuery(document).on('click', '.delete', function () {
                    var sno = jQuery(this).attr('dsno');
                    jQuery.ajax({
                        url: 'add_product_order.php',
                        type: 'post',
                        data: {dson: sno},
                        success: function (rdata) {

                            //var obj =JSON.parse(rdata);
                            dtable();
                        }
                    });
                });

            });
    </script>


    <style type="text/css">
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;

        }
        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            margin: 30px 0;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);

        }
        .table-title {        
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }
        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }
        .table-title .btn-group {
            float: right;
        }
        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }
        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }
        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }
        table.table tr th:first-child {
            width: 60px;
        }
        table.table tr th:last-child {
            width: 100px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }
        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }	
        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }
        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }
        table.table td a:hover {
            color: #2196F3;
        }
        table.table td a.edit {
            color: #FFC107;
        }
        table.table td a.delete {
            color: #F44336;
        }
        table.table td i {
            font-size: 19px;
        }
        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }
        .pagination {
            float: right;
            margin: 0 0 5px;
        }
        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }
        .pagination li a:hover {
            color: #666;
        }	
        .pagination li.active a, .pagination li.active a.page-link {
            background: #03A9F4;
        }
        .pagination li.active a:hover {        
            background: #0397d6;
        }
        .pagination li.disabled i {
            color: #ccc;
        }
        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }
        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }    
        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }
        .custom-checkbox input[type="checkbox"] {    
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }
        .custom-checkbox label:before{
            width: 18px;
            height: 18px;
        }
        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }
        .custom-checkbox input[type="checkbox"]:checked + label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
            border-color: #fff;
        }
        .custom-checkbox input[type="checkbox"]:disabled + label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }
        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }
        .modal .modal-header, .modal .modal-body, .modal .modal-footer {
            padding: 20px 30px;
        }
        .modal .modal-content {
            border-radius: 3px;
        }
        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }
        .modal .modal-title {
            display: inline-block;
        }
        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }
        .modal textarea.form-control {
            resize: vertical;
        }
        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }	
        .modal form label {
            font-weight: normal;
        }	
    </style>
</html>

<?php include 'includes/overall/footer.php'; ?>

