<?php
include "config.php";
// spacing
function spacing($space)
{
	for ($i = 1; $i <= $space; $i++) {
		echo '&nbsp';
	}
}

function bakeryHeader()
{
	echo '<head>';
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
	echo '<link rel="shortcut icon" href="../company logo/favicon.png">';
	echo '<link rel="stylesheet" href="../lib/CSS.css">';
	echo '<link rel="stylesheet" href="../lib/w3.css">';
	echo '<link rel="stylesheet" href="../lib/boot3.css">';
	echo '<title>Miss Candy Bakery</title>';
	echo '</head>';
}

function bakeryHeaderIn()
{
	echo '<head>';
	echo '<link rel="shortcut icon" href="company logo/favicon.png">';
	echo '<title>Miss Candy Bakery</title>';
	echo '</head>';
}

//delete order
// function deleteOrder(){
// 	$custID = $_POST['IDtoDelete'];

// 	$con = mysqli_connect("localhost","web2","web2","bakery_system");

// 	if(!$con){
// 		echo 'Failed to connect'.mysqli_connect_error();
// 		exit;
// 	}
// 	else{
// 		$sql= "DELETE from product_order WHERE cust_ID='$custID'";

// 		$qry= mysqli_query($con,$sql);
// 		return $qry;
// 	}
// }

//update order
function updateOrderPT()
{
}

// pending order
function pendingOrder()
{
	//$con = mysqli_connect("localhost","web2","web2","bakery_system");
	$status = "pending";
	// if(!$con){
	// 	echo 'failed to connect:'.mysqli_connect_error();
	// 	exit;
	// }
	// else{
	global $con;
	$sql = "SELECT * from product_order WHERE status='" . $status . "' ORDER BY cust_ID ASC";
	$qry = mysqli_query($con, $sql);
	return $qry;
	//}
}
// ready order
function doneOrder()
{
	global $con;
	$status = "done";
	if (!$con) {
		echo 'failed to connect:' . mysqli_connect_error();
		exit;
	} else {
		$sql = "SELECT * from product_order WHERE status='" . $status . "' ORDER BY cust_ID ASC";
		$qry = mysqli_query($con, $sql);
		return $qry;
	}
}
// ready order
function deliverOrder()
{
	global $con;
	$status = "deliver";
	if (!$con) {
		echo 'failed to connect:' . mysqli_connect_error();
		exit;
	} else {
		$sql = "SELECT * from product_order WHERE status='" . $status . "' ORDER BY cust_ID ASC";
		$qry = mysqli_query($con, $sql);
		return $qry;
	}
}

function cakeType()
{
	if ($_POST['otherCakeType'] == "Other")
		$type = $_POST['otherCakeTypeInput'];
	else
		$type = $_POST['cakeType'];

	return $type;
}

function cakeFlavour()
{
	if ($_POST['otherCakeFlavour'] == "Other")
		$flavour = $_POST['otherCakeFlavourInput'];
	else
		$flavour = $_POST['cakeFlavour'];

	return $flavour;
}

function cakeFilling()
{
	if ($_POST['otherCakeFilling'] == "Other")
		$filling = $_POST['otherCakeFillingInput'];
	else
		$filling = $_POST['cakeFilling'];

	return $filling;
}
function cakeShape()
{
	if ($_POST['otherCakeShape'] == "Other")
		$shape = $_POST['otherCakeShapeInput'];
	else
		$shape = $_POST['cakeShape'];

	return $shape;
}

function cakeSize()
{
	if ($_POST['otherCakeSize'] == "Other")
		$size = $_POST['otherCakeSizeInput'];
	else
		$size = $_POST['cakeSize'];

	return $size;
}

function cakeBoard()
{
	if ($_POST['otherCakeBoard'] == "Other")
		$board = $_POST['otherCakeBoardInput'];
	else
		$board = $_POST['cakeBoard'];

	return $board;
}

function getMemberDetailPT()
{
	// $con = mysqli_connect("localhost", "web2", "web2", "bakery_system");
	global $con;
	$custID = $_POST['IDtoView'];
	if (!$con) {
		echo 'failed to connect:' . mysqli_connect_error();
		exit;
	} else {
		$sql = "SELECT * from product_order WHERE cust_ID='$custID'";
		$qry = mysqli_query($con, $sql);
		return $qry;
	}
}

function submitOrder()
{
	// 	$name= $_POST['cust_Name'];
	// 	$hpn= $_POST['hpnNo'];
	// 	$cakeQuantity= $_POST['cakeQuantity'];
	// 	$cakeType= cakeType();
	// 	$cakeFlavour= cakeFlavour();
	// 	$cakeFilling= cakeFilling();
	// 	$cakeShape= cakeShape();
	// 	$cakeSize= cakeSize();
	// 	$cakeBoard= cakeBoard();
	// 	$cakePrice= $_POST['cakePrice'];
	// 	$orderDate= $_POST['orderDate'];
	// 	$dispatchDate= $_POST['dispatchDate'];
	// 	$time= $_POST['time'];
	// 	$dispatchTime= $_POST['dispatchTime'];
	// 	$dispatchPlace= $_POST['dispatchPlace'];
	// 	$remark= $_POST['remark'];
	// 	$status= "pending";

	// 	if(!$con){
	// 		echo "Failed to connect: ".mysqli_connect_error();
	// 	}
	// 	else{
	// 		$sql= "INSERT into product_order(cust_Name, cust_HPN, quantity, type, flavour, filling, shape, size, board, price, orderDate, dispatchDate, dispatchTime, dispatchDay, dispatchPlace, remark, status)
	// 		VALUES('$name','$hpn','$cakeQuantity','$cakeType','$cakeFlavour', '$cakeFilling', '$cakeShape', '$cakeSize', '$cakeBoard', '$cakePrice','$orderDate','$dispatchDate', '$dispatchTime', '$time', '$dispatchPlace', '$remark', '$status')";

	// 		$qry= mysqli_query($con,$sql);
	// 		if(!$qry){
	// 			echo "Error submitting order";
	// 		}
	// 	}
}
