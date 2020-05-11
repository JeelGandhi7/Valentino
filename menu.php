<?php
include 'includes/overall/header.php';
include 'config.php';
if (isset($_REQUEST['submit'])) {
    $txt_name = $_REQUEST['txt_name'];
    //$txt_email=$_REQUEST['txt_email'];
    $txt_item_price = $_REQUEST['txt_item_price'];
    $txt_cat_id = $_REQUEST['txt_cat_id'];


    $insert = "insert into item(item_name,cat_id,item_price) values('$txt_name','$txt_cat_id','$txt_item_price')";
    mysqli_query($link, $insert);
}
if (isset($_REQUEST['btn_update'])) {
    $iid = $_REQUEST['iid'];
    $name = $_REQUEST['name'];
    $item_price = $_REQUEST['item_price'];
    $cat_id = $_REQUEST['txt_cat_id'];


    $update = "update item set item_name='$name',cat_id='$cat_id',item_price='$item_price' where item_id='$iid'";
    mysqli_query($link, $update);
    //echo "Update Sucessfully";
}
if (isset($_REQUEST['item_id'])) {
    $id = $_REQUEST['item_id'];
    $delete = "delete from item where item_id='$id'";
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
                            <h2>Manage <b>Menu</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addMenuModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Item</span></a>
                            <a href="#deleteMenuModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
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
                            <th>Price</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $j = 1;
                            $k = 1;
                            $sel = "select * from item";
                            $res = mysqli_query($link, $sel);
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td><?php echo $k++; ?></td>
                                <td><?php echo $row['item_name'] ?></td>
                                <td><?php echo $row['item_price'] ?></td>
                                <td><?php echo $row['cat_id'] ?></td>
                                <td>
                                    
                                    <a href="#editMenuModal<?php echo $j; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="menu.php?item_id=<?php echo $row["item_id"] ?>" onclick="return confirm('Press a button!')" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
<div id="addMenuModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">						
                    <h4 class="modal-title">Add Menu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="txt_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <textarea class="form-control" name="txt_item_price" required></textarea>
                    </div>
                    <select class="form-group" name="txt_cat_id">
                        <?php
                        $d = "select * from category";
                        $r = mysqli_query($link, $d);
                        while ($ro = mysqli_fetch_array($r)) {
                            ?>
                            <option value="<?php echo $ro[0] ?>"><?php echo $ro[1]; ?></option>
                            <?php
                        }a
                        ?>
                    </select>				
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
$s = "select * from item";
$r = mysqli_query($link, $s);
while ($ro = mysqli_fetch_array($r)) {
    ?>
    <div id="editMenuModal<?php echo $a ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">


                    <div class="modal-header">						
                        <h4 class="modal-title">Edit Menu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="iid" value="<?php echo $ro['item_id'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="<?php echo $ro['item_name'] ?>" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <textarea name="item_price"  class="form-control" required><?php echo $ro['item_price'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-group" name="txt_cat_id">
                                <?php
                                $d1 = "select * from category";
                                $r1 = mysqli_query($link, $d1);
                                while ($ro1 = mysqli_fetch_array($r1)) {
                                    ?>
                                    <option value="<?php echo $ro1[0] ?>"><?php echo $ro1[1]; ?></option>
                                    <?php
                                }
                                ?>
                            </select>    
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
<div id="deleteMenuModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">						
                    <h4 class="modal-title">Delete Menu</h4>
                    <a href="menu.php?item_id=<?php echo $ro['id'] ?>"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></a>
                </div>
                <div class="modal-body">					
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <?php
                    $d = "select * from item";
                    $r = mysqli_query($link, $d);
                    while ($ro = mysqli_fetch_array($r)) {
                        $id = $ro['item_id'];
                    }
                    echo $id;
                    ?>
                    <input type="button" class="btn btn-default"   data-dismiss="modal" value="Cancel">
                    <a href="menu.php?item_id=<?php echo $id ?>"><input type="button"  class="btn btn-danger" value="Delete"></a>
                </div>
            </form>
        </div>
    </div>
</div>
</for>
<?php include 'includes/overall/footer.php'; ?>