<?php

//include 'core/init.php';
include 'config.php';

$user = new User();

$data = array();

$db = DB::getInstance();

if ((Input::get("pid") == "") && (Input::get("oid") == "") && (Input::get("pirce") == "")) {
    $data["error"][] = "error accure getting data";
}
else
{
    $db->insert(
            "tbl_product_summery", array(
              'oid' => Input::get("oid"),
              'pid' => Input::get("pid"),
              'qty' => 1,
              'price' => Input::get("price")
            )
            );
    $data["success"][] = "Product is added";
}
echo json_encode($data);
