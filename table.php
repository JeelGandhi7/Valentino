<?php 
include 'includes/overall/header.php'; 
 $c=mysqli_connect("localhost","root","","cafe");
            
 
  


?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Table page
            <small>Optional description</small>
        </h1>
        <h2> </h2>
        
        <form action="#" method="post">
         <?php
         $sel="select * from tbl_table";
        $id=array();
         $res=mysqli_query($c,$sel);
        while($row= mysqli_fetch_array($res))
        {
                array_push($id,$row['table_id']);
        }
        ?>
        
 
        <div class="col-xs-3">
            <a href="order.php?table_1=<?php echo $id[0]  ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Table 1</button></a>
          
        </div>
        
        <div class="col-xs-3">
          <a href="order.php?table_2=<?php echo $id[1]  ?>"><button type="button"  class="btn btn-primary btn-block btn-flat">Table 2</button></a>
        </div>
        <div class="col-xs-3">
          <a href="order.php?table_3=<?php echo $id[2]  ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Table 3</button></a>
        </div>
        <div class="col-xs-3">
          <a href="order.php?table_4=<?php echo $id[3]  ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Table 4</button></a>
          <br>
        </div>
        <div class="col-xs-3">
          <a href="order.php?table_5=<?php echo $id[4]  ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Table 5</button></a>
        </div>
        <div class="col-xs-3">
          <a href="order.php?table_6=<?php echo $id[5]  ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Table 6</button></a>
        </div>
        <div class="col-xs-3">
          <a href="order.php?table_7=<?php echo $id[6]  ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Table 7</button></a>
        </div>
        <div class="col-xs-3">
          <a href="order.php?table_8=<?php echo $id[7]  ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Table 8</button></a>
          <br>
        </div>
        <div class="col-xs-3">
          <a href="order.php?table_9=<?php echo $id[8]  ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Table 9</button></a>
        </div>
        <div class="col-xs-3">
         <a href="order.php?table_10=<?php echo $id[9]  ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Table 10</button></a>
        </div>
         
           </form>
    </section>
</div>
<?php
           
                
            ?>
<?php include 'includes/overall/footer.php'; ?>