<?php

include 'core/init.php';


$data = array();

$db = DB::getInstance();
$data["html"] = "";
$data["final_total"] = 0;
if (Input::get("oid") == "") {
    $data["html"] = "error accure getting pid and oid";
} else {
    $str = "";
    $total = 0;
    $hide = ($user->hasPermission("admin")) ? false : true;
    $products = $db->qurey("select tbl_product_summery.psid,tbl_product.pname,tbl_product_summery.pid,tbl_product_summery.qty,tbl_product_summery.price from tbl_product_summery, tbl_product where tbl_product_summery.pid = tbl_product.pid and tbl_product_summery.oid = ?",array(Input::get("oid")));
    if(!$products->error())
    {
        $products = $products->results();
        
        foreach ($products as $product) {
           $total = $total + ($product->price * $product->qty);
           $str .= "<tr>";
           $str .= '<td>' . $product->pname . '</td>';
           $str .= '<td>' . $product->price . '</td>';
            if ($hide)
            {
                $str .= '<td><button class="btn btn-primary fa fa-plus product_plus" data-id="' . $product->psid . '"></button><input type="text" name="value" readonly="" value="' . $product->qty .' "><button class="btn btn-primary fa fa-minus product_minus hide" data-id="' . $product->psid. '" data-qty="' . $product->qty . '"></button></td>';
            }else{
                $str .= '<td><button class="btn btn-primary fa fa-plus product_plus" data-id="' . $product->psid . '"></button><input type="text" name="value" readonly="" value="' . $product->qty .' "><button class="btn btn-primary fa fa-minus product_minus" data-id="' . $product->psid. '" data-qty="' . $product->qty . '"></button></td>';
            }
           $str .= "<td class='product_price'>" . ($product->price * $product->qty) . "</td>";
           if ($hide)
           {
               $str .= '<td><button class="btn btn-primary fa fa-trash product_remove hide" data-id="' . $product->psid . '"></button></td>';
           }
           else{
               $str .= '<td><button class="btn btn-primary fa fa-trash product_remove" data-id="' . $product->psid . '"></button></td>';
           }

           $str .= "</tr>";

        }
        
        $data["html"] = $str;
        $data["final_total"] = $total;
        
        $result = $db->update(
                "tbl_orders", 
                Input::get("oid"), array(
                'total' => $total,
                'date_modify' => date("Y-m-d h:i:s", time())
            ), "oid"
        );
    }
    
}

echo json_encode($data);