<?php
include 'includes/overall/header.php';
include 'config.php';
if (isset($_REQUEST['submit'])) {
    $txt_name = $_REQUEST['txt_name'];
    //$txt_email=$_REQUEST['txt_email'];
    $txt_b_type = $_REQUEST['txt_b_type'];
    $txt_phone = $_REQUEST['txt_phone'];
    $txt_no_people = $_REQUEST['txt_no_people'];
    $a_time = $_REQUEST['atime'];
    $a_date = $_REQUEST['adate'];


    $insert = "insert into booking(c_name,c_number,no_people,b_type,a_time,a_date) values('$txt_name','$txt_phone','$txt_no_people','$txt_b_type','$a_time','$a_date')";
    mysqli_query($link, $insert);
}
if (isset($_REQUEST['btn_update'])) {
    $bid = $_REQUEST['bid'];
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $noppl = $_REQUEST['noppl'];
    $bktype = $_REQUEST['bktype'];
    $atime = $_REQUEST['atime'];
    $adate = $_REQUEST['adate'];


    $update = "update booking set c_name='$name',c_number='$phone',no_people='$noppl',b_type='$bktype',a_time='$atime',a_date='$adate' where b_id='$bid'";
    mysqli_query($link, $update);
    //echo "Update Sucessfully";
}
if (isset($_REQUEST['b_id'])) {
    $id = $_REQUEST['b_id'];
    $delete = "delete from booking where b_id='$id'";
    mysqli_query($link, $delete);
}
?>
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

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="content-wrapper">
    <div class="jumbotron">
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Staff</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addReservationModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Reservation</span></a>
                            <a href="#deleteReservationModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>

                            <th>No</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Number of People</th>
                            <th>Booking-Type</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $j = 1;
                        $k = 1;
                        $sel = "select * from booking";
                        $res = mysqli_query($link, $sel);
                        while ($row = mysqli_fetch_array($res)) {
                            ?>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td><?php echo $k++; ?></td>
                                <td><?php echo $row['c_name'] ?></td>
                                <td><?php echo $row['c_number'] ?></td>
                                <td><?php echo $row['no_people'] ?></td>
                                <td><?php echo $row['b_type'] ?></td>
                                <td><?php echo $row['a_time'] ?></td>
                                <td><?php echo $row['a_date'] ?></td>
                                <td>
                                    <a href="#editReservationModal<?php echo $j; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="res.php?b_id=<?php echo $row["b_id"] ?>" onclick="return confirm('Press a button!')" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>

                            <?php
                            $j = $j + 1;
                        }
                        ?>

                    </tbody>
                </table>
                <!--<div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>-->
            </div></div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="addReservationModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">						
                    <h4 class="modal-title">Booking</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="txt_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="txt_phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Number of People</label>
                        <input type="text" name="txt_no_people" class="form-control" required>
                    </div>
                    <div class="form-group">
                        Dinner Type : 
                        <select class="form-control" name="txt_b_type" >
                            <option> Select Dinner Type</option>
                            <option> Candel Light Dinner </option>
                            <option> Birth-Day Celebration  </option>
                            <option> Anniversery Celebration </option>
                            <option> Family Function </option>                 
                        </select> 
                    </div>
                    <div class="form-group">
                        Arrival Time : <input type="time" name="atime" class="form-control" placeholder="Enter Arrival Time">
                    </div>
                    <div class="form-group">
                        Arrival Date : <input type="date" name="adate" class="form-control" placeholder="Enter Date">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" name="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<?php
$a = 1;
$s = "select * from booking";
$r = mysqli_query($link, $s);
while ($ro = mysqli_fetch_array($r)) {
    ?>
    <div id="editReservationModal<?php echo $a ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">

                    <div class="modal-header">						
                        <h4 class="modal-title">Edit Booking</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="bid" value="<?php echo $ro['b_id'] ?>"
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="<?php echo $ro['c_name'] ?>" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="<?php echo $ro['c_number'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Number of People</label>
                            <input type="text" name="noppl" value="<?php echo $ro['no_people'] ?>" class="form-control" required>
                        </div>
                        Dinner Type : 
                        <select class="form-control" name="bktype" value="<?php echo $ro['b_type'] ?>" >
                            <option> Select Dinner Type</option>
                            <option> Candel Light Dinner </option>
                            <option> Birth-Day Celebration  </option>
                            <option> Anniversery Celebration </option>
                            <option> Family Function </option>                 
                        </select> 

                        <div class="form-group">
                            <label>Arrival-Time</label>
                            <input type="time" name="atime" value="<?php echo $ro['a_time'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Arrival-Date</label>
                            <input type="date" name="adate" value="<?php echo $ro['a_date'] ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="btn_update" class="btn btn-info" id="btn_update" value="Save">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php
    $a++;
}
?>
<!-- Delete Modal HTML -->
<div id="deleteReservationModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">						
                    <h4 class="modal-title">Delete Booking</h4>
                    <a href="res.php?b_id=<?php echo $ro['id'] ?>"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></a>
                </div>
                <div class="modal-body">					
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <?php
                    $d = "select * from booking";
                    $r = mysqli_query($link, $d);
                    while ($ro = mysqli_fetch_array($r)) {
                        $id = $ro['b_id'];
                    }
                    echo $id;
                    ?>
                    <input type="button" class="btn btn-default"   data-dismiss="modal" value="Cancel">
                    <a href="res.php?b_id=<?php echo $id ?>"><input type="button"  class="btn btn-danger" value="Delete"></a>
                </div>
            </form>
        </div>
    </div>
</div>
</for>
<?php include 'includes/overall/footer.php'; ?>