
<?php 

include 'config.php';

if(isset($_POST) && !empty($_POST['pid']) && !empty($_POST['pprice']))
{
    
    if(empty($_POST['orid']))
    {
        $date=date('Y-m-d');
        $sql="insert into tbl_Order (date) values($date)";
        mysqli_query($link,$sql);
        
        $sql="select max(oid) as oid from tbl_Order";
        $rl=mysqli_fetch_assoc(mysqli_query($link,$sql));
        $sql="insert into tbl_oredr_detail (oid,pid,qnt,price) values('{$rl['oid']}','{$_POST['pid']}','1','{$_POST['pprice']}')";
        mysqli_query($link,$sql);
        $rtn=array("rtn"=>$rl['oid']);
    }
    else
    {
        $sql="select count(*) as cnt from tbl_oredr_detail where pid={$_POST['pid']} and oid={$_POST['orid']}";
        $tmp=mysqli_fetch_assoc(mysqli_query($link,$sql));
        
        if($tmp['cnt'])
        {
            //echo $tmp['cnt'];
            $sql="update tbl_oredr_detail set qnt=qnt+1 where pid={$_POST['pid']} and oid={$_POST['orid']}";
            mysqli_query($link,$sql);
        }
        else
        {
            $sql="insert into tbl_oredr_detail (oid,pid,qnt,price) values('{$_POST['orid']}','{$_POST['pid']}','1','{$_POST['pprice']}')";
            mysqli_query($link,$sql);
        }
        
        $rtn=array("rtn"=>$_POST['orid']);
    }
    
    //$rtn=array("rtn"=>'0');
    echo json_encode($rtn);
}

if(isset($_POST) && !empty($_POST['tbody']) && !empty($_POST['orid']))
{
    $sql="select sno,item.item_name,price,qnt from tbl_oredr_detail,item where tbl_oredr_detail.pid=item.item_id and oid='{$_POST['orid']}'";
    $rl= mysqli_query($link,$sql);
    $thtml="";
    $total=0;
    while($k = mysqli_fetch_assoc($rl))
    {
        //echo $k['item_name'];
        $thtml.="<tr>"
                . "<td><span class='custom-checkbox'><input type='checkbox' id='checkbox1' name='options[]' value='1'><label for='checkbox1'></label></span></td>";
        $thtml.="<td>".$k['item_name']."</td>";
        $thtml.="<td>".$k['price']."</td>";
        $thtml.="<td> <button class='btn btn-primary btn-xs editp' epsno='{$k['sno']}'><i class='material-icons' title='Edit'>&#xE147;</i></button><input type='text' style='width:35px;color:#000000' min='1' readonly='true' id='txtplus' value=".$k['qnt']."><button class='btn btn-primary btn-xs editm' emsno='{$k['sno']}'><i class='material-icons' title='Edit'>&#xE15C;</i></button> </td>";  
        $thtml.="<td>".$k['price']*$k['qnt']."</td>";
        $total+=$k['price']*$k['qnt'];
        $thtml.="<td><button class='btn btn-primary btn-xs delete' dsno='{$k['sno']}'><i class='material-icons' title='Delete'>&#xE872;</i></button></td>";
        $thtml.="</tr>";
    }
    $thtml.="<tr><td id='total' style='text-align:right;padding-right:20%;'colspan='6'>Total : $total</td></tr>";
    //echo $thtml;die();
    $rtn=array("rtn"=>$thtml,"total"=>$total);
    echo json_encode($rtn);
}

if(isset($_POST['epson']) && !empty($_POST['epson']))
{
    $sql="update tbl_oredr_detail set qnt=qnt+1 where sno={$_POST['epson']}";
    $rl=mysqli_query($link,$sql);
    $rtn=array('rtn'=>$rl);
     echo json_encode($rtn);
}
if(isset($_POST['emson']) && !empty($_POST['emson']))
{
    $sql="update tbl_oredr_detail set qnt=qnt-1 where sno={$_POST['emson']}";
    $rl=mysqli_query($link,$sql);
    $rtn=array('rtn'=>$rl);
     echo json_encode($rtn);
}
if(isset($_POST['dson']) && !empty($_POST['dson']))
{
    $sql="delete from tbl_oredr_detail where sno={$_POST['dson']}";
    $rl=mysqli_query($link,$sql);
    $rtn=array('rtn'=>$rl);
     echo json_encode($rtn);
}

?>