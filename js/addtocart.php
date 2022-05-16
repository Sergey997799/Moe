<?php
include("db_connect.php");
include("functions.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$id = $_POST["id"];
/* define('myeshop', true); */
/*
include("db_connect.php");
include("functions.php"); */
/*        
$id = clear_string($mysqli,$_POST["id"]);

$result = $mysqli->query("SELECT * FROM `cart` WHERE `cart_ip` = '{$_SERVER['REMOTE_ADDR']}' AND `cart_id_product` = '$id'");
if ($result->num_rows > 0)
{
$row = $result->fetch_array();    
$new_count = $row["cart_count"] + 1;
$update = $mysqli->query ("UPDATE `cart` SET `cart_count`='$new_count' WHERE `cart_ip` = '{$_SERVER['REMOTE_ADDR']}' AND `cart_id_product` ='$id'");   
}
else
{
    $result = $mysqli->query("SELECT * FROM `table_products` WHERE `products_id` = '$id'");
    $row = $result->fetch_array(); 
    
    		$mysqli->query("INSERT INTO `cart`(`cart_id_product`,`cart_price`,`cart_datetime`,`cart_ip`)
						VALUES(	
                            '".$row['products_id']."',
                            '".$row['price']."',					
							NOW(),
                            '".$_SERVER['REMOTE_ADDR']."'                                                                        
						    )");	
}
} */
$result = $mysqli->query("SELECT * FROM `table_products` WHERE `products_id` = '$id'");
$row = $result->fetch_array();
if ($result->num_rows > 0)
{ 
$n = $row["delete"];
		if ( $n == 0 ){
			$mysqli->query ("UPDATE `table_products` SET `delete`='1' WHERE `products_id` = '$id'");   
		} else {
			$mysqli->query ("UPDATE `table_products` SET `delete`='0' WHERE `products_id` = '$id'");   
		}
};

$result = $mysqli->query("SELECT * FROM `table_products` WHERE `products_id` = '$id'");
// echo $id 'delete= $row["delete"]';
$row = $result->fetch_array();
echo 'id='.$id.' delete= '.$row["delete"];

// echo $row["delete"];
}
?>