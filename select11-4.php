<?php	
    include("js/db_connect.php");

$sbr = $_POST["sbr"];
if ($sbr == 1){
$mysqli->query("UPDATE `table_products` SET `delete` = 1 ");
};
$sbr = 0;
?>
<!DOCTYPE HTML>
<html>
<head>
<link href="css/select11.css" rel="stylesheet" type="text/css" />
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<form method="POST" action="">
<input type="hidden" name="sbr" value="1" />
<?php
//$mysqli->query("UPDATE `table_products` SET `delete` = 1 ");
?>
<center><input type="submit" name="submit" id="button-param-search" value="Sbros" /></center> 
</form>

<?php
$cc = $_POST["kol-vo"];
echo $cc;
echo '<br/>';
// $result = $mysqli->query( "SELECT * FROM `table_products` WHERE `type`='bag' ORDER BY 'id' DESC");
$result = $mysqli->query( "SELECT * FROM `table_products`");
$row = $result->fetch_array();
do {
//	name="item['.$row["products_id"].']"
	$kkk = $row["products_id"];
	$key = $_POST[ $kkk ];
/*	echo $key; 
	echo '</br>';*/
 $mysqli->query("UPDATE `table_products` SET `delete` = 0 WHERE `products_id`= '$key'");

	} while ($row = $result->fetch_array());
	?>

<div id="block-basket"><a>fffffffff+++++++</a></div>

<div id="rrr333">replase</div>


<div id="nomer"><div id="lll"></div></div>
<div class="letter">
<div class="letter1">
<div class="point1" jjj="odin">66</div>
</div>
<div class="letter2"></div>
</div>

<?php

echo '<br/>
<form method="POST" action="">';
$calc = 0;
$result = $mysqli->query( "SELECT * FROM `table_products` WHERE `delete` = 1 ORDER BY 'id' DESC");

$row = $result->fetch_array();
do {
echo'
<div class="letter" tid="'.$row["products_id"].'">
<div class="check1">

<input type="checkbox" class="box1" name="'.$row["products_id"].'" value="'.$row["products_id"].'" />

</div>
<div class="letter1" tid="'.$row["products_id"].'">
<div class="point1" tid="'.$row["products_id"].'" color22="green">'.$row["products_id"].'</div>
</div>
<div class="letter2">
<!--- <span>'.$row["date"].'</span> -->
 <a class="foto1" href="view_content.php?id='.$row["products_id"].'" ><img src="/uploads_images/'.$row["image"].'"  height="80" width="auto" /></a>
<a class="price1" href="view_content.php?id='.$row["products_id"].'">'.$row["price"].'руб.</a>
<div class="title">'.$row["title"].'</div>
</div>
</div>
';
$calc = $calc +1;
} while ($row = $result->fetch_array());
echo '<input type="hidden" name="kol-vo" value="'.$calc.'" />';
echo $calc;
?>
<center><input type="submit" name="submit" id="button-param-search" value="1Поиск1" /></center> 
</form>

</body>
</html>