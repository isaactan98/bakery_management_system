<?php
// spacing
function spacing($space){
	for($i=1;$i<=$space;$i++){
		echo '&nbsp';
	}
}

function bakeryHeader(){
	echo '<head>';
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
	echo '<link rel="shortcut icon" href="../company logo/favicon.png">';
	echo '<link rel="stylesheet" href="../lib/CSS.css">';
	echo '<link rel="stylesheet" href="../lib/w3.css">';
	echo '<link rel="stylesheet" href="../lib/boot3.css">';
	echo '<title>Miss Candy Bakery</title>';
	echo '</head>';
}

function bakeryHeaderIn(){
	echo '<head>';
	echo '<link rel="shortcut icon" href="company logo/favicon.png">';
	echo '<title>Miss Candy Bakery</title>';
echo '</head>';
}

// create order
// function submitOrder(){
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
// }


//delete order
function deleteOrder(){
	$custID = $_POST['IDtoDelete'];
	
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	
	if(!$con){
		echo 'Failed to connect'.mysqli_connect_error();
		exit;
	}
	else{
		$sql= "DELETE from product_order WHERE cust_ID='$custID'";
		
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}

//update order
function updateOrderPT(){
	$con= mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo "Failed to connect".mysqli_connect_error();
		exit;
	}
	else{
		$custID= $_POST['cust_ID'];
		$name= $_POST['cust_Name'];
		$hpn= $_POST['hpnNo'];
		$cakeQuantity= $_POST['cakeQuantity'];
		$cakeType= cakeType();
		$cakeFlavour= cakeFlavour();
		$cakeFilling= cakeFilling();
		$cakeShape= cakeShape();
		$cakeSize= cakeSize();
		$cakeBoard= cakeBoard();
		$cakePrice= $_POST['cakePrice'];
		$orderDate= $_POST['orderDate'];
		$dispatchDate= $_POST['dispatchDate'];
		$time= $_POST['time'];
		$dispatchTime= $_POST['dispatchTime'];
		$dispatchPlace= $_POST['dispatchPlace'];
		$remark= $_POST['remark'];

		$sql= "UPDATE product_order SET cust_Name='$name', cust_HPN='$hpn', quantity='$cakeQuantity', type='$cakeType', flavour='$cakeFlavour', filling='$cakeFilling',
				shape='$cakeShape', size='$cakeSize', board='$cakeBoard', price='$cakePrice', orderDate='$orderDate', dispatchDate='$dispatchDate', 
				dispatchTime='$dispatchTime', dispatchDay='$time', dispatchPlace='$dispatchPlace', remark='$remark' WHERE cust_ID='$custID' ";
				
		$qry= mysqli_query($con,$sql);
		if(!$qry)
			echo "Error updating";
	}
}

// pending order
function pendingOrder(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	$status="pending";
	if(!$con){
		echo 'failed to connect:'.mysqli_connect_error();
		exit;
	}
	else{
		$sql= "SELECT * from product_order WHERE status='".$status."' ORDER BY cust_ID ASC";
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}	
// ready order
function doneOrder(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	$status="done";
	if(!$con){
		echo 'failed to connect:'.mysqli_connect_error();
		exit;
	}
	else{
		$sql= "SELECT * from product_order WHERE status='".$status."' ORDER BY cust_ID ASC";
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}
// ready order
function deliverOrder(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	$status="deliver";
	if(!$con){
		echo 'failed to connect:'.mysqli_connect_error();
		exit;
	}
	else{
		$sql= "SELECT * from product_order WHERE status='".$status."' ORDER BY cust_ID ASC";
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}
//search cake order by name
function searchOrderByName($name,$status){
	$con=mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo 'failed to connect: '.mysqli_connect_error();
		exit;
	}
	else{
		if($status==1){
			$statusPage="pending";
		$sql="SELECT * from product_order WHERE cust_Name LIKE '".$name."%' AND status='".$statusPage."' ORDER BY cust_ID ASC";
		$qry= mysqli_query($con,$sql);
		return $qry;
		}
		else if($status==2){
			$statusPage="done";
			$sql="SELECT * from product_order WHERE cust_Name LIKE '".$name."%' AND status='".$statusPage."' ORDER BY cust_ID ASC";
			$qry= mysqli_query($con,$sql);
			return $qry;
		}
		else{
			$statusPage="deliver";
			$sql="SELECT * from product_order WHERE cust_Name LIKE '".$name."%' AND status='".$statusPage."' ORDER BY cust_ID ASC";
			$qry= mysqli_query($con,$sql);
			return $qry;
		}
	}
}
//search cake order by HPN
function searchOrderByHPN($hpn,$status){
	$con=mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo 'failed to connect: '.mysqli_connect_error();
		exit;
	}
	else{
		if($status==1){
			$statusPage="pending";
		$sql="SELECT * from product_order WHERE cust_HPN LIKE '".$hpn."%' AND status='".$statusPage."' ORDER BY cust_ID ASC";
		$qry= mysqli_query($con,$sql);
		return $qry;
		}
		else if($status==2){
			$statusPage="done";
		$sql="SELECT * from product_order WHERE cust_HPN LIKE '".$hpn."%' AND status='".$statusPage."' ORDER BY cust_ID ASC";
		$qry= mysqli_query($con,$sql);
		return $qry;
		}
		else{
			$statusPage="deliver";
			$sql="SELECT * from product_order WHERE cust_HPN LIKE '".$hpn."%' AND status='".$statusPage."' ORDER BY cust_ID ASC";
			$qry= mysqli_query($con,$sql);
			return $qry;
		}
	}
}
//search cake order by type
function searchOrderByType($type,$status){
	$con=mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo 'failed to connect: '.mysqli_connect_error();
		exit;
	}
	else{
		if($status==1){
			$statusPage="pending";
		$sql="SELECT * from product_order WHERE type LIKE '".$type."%' AND status='".$statusPage."' ORDER BY cust_ID ASC";
		$qry= mysqli_query($con,$sql);
		return $qry;
		}
		else if($status==2){
			$statusPage="done";
		$sql="SELECT * from product_order WHERE type LIKE '".$type."%' AND status='".$statusPage."' ORDER BY cust_ID ASC";
		$qry= mysqli_query($con,$sql);
		return $qry;
		}
		else{
			$statusPage="deliver";
		$sql="SELECT * from product_order WHERE type LIKE '".$type."%' AND status='".$statusPage."' ORDER BY cust_ID ASC";
		$qry= mysqli_query($con,$sql);
		return $qry;
		}
	}
}
function cakeType(){
if($_POST['otherCakeType']=="Other")
	$type= $_POST['otherCakeTypeInput'];
else
	$type= $_POST['cakeType'];

return $type;
}

function cakeFlavour(){
if($_POST['otherCakeFlavour']=="Other")
	$flavour= $_POST['otherCakeFlavourInput'];
else
	$flavour= $_POST['cakeFlavour'];

return $flavour;
}

function cakeFilling(){
if($_POST['otherCakeFilling']=="Other")
	$filling= $_POST['otherCakeFillingInput'];
else
	$filling= $_POST['cakeFilling'];

return $filling;
}
function cakeShape(){
if($_POST['otherCakeShape']=="Other")
	$shape= $_POST['otherCakeShapeInput'];
else
	$shape= $_POST['cakeShape'];

return $shape;
}

function cakeSize(){
if($_POST['otherCakeSize']=="Other")
	$size= $_POST['otherCakeSizeInput'];
else
	$size= $_POST['cakeSize'];

return $size;
}

function cakeBoard(){
if($_POST['otherCakeBoard']=="Other")
	$board= $_POST['otherCakeBoardInput'];
else
	$board= $_POST['cakeBoard'];

return $board;
}

function getMemberDetailPT(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	$custID= $_POST['IDtoView'];
	if(!$con){
		echo 'failed to connect:'.mysqli_connect_error();
		exit;
	}
	else{
		$sql= "SELECT * from product_order WHERE cust_ID='$custID'";
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}

function create_stock(){
//$productID = $_POST['productId'];
$productName = $_POST['productName'];
$productRate = $_POST['productRate'];
$productQuantity = $_POST['productQuantity'];
$productUnit = $_POST['productUnit'];
$productBrand = $_POST['productBrand'];
$productStatus 	= $_POST['productStatuss'];
$productWarn = $_POST['productWarn'];
$productDate 	= $_POST['productDate'];
$con = mysqli_connect("localhost","web2","web2","bakery_system");

if(!$con){
		echo "Failed to connect:".mysqli_connect_error();
	}	
	else{ 
		$sql="INSERT into product(PRODUCT_NAME,PRODUCT_RATE,PRODUCT_QUANTITY,PRODUCT_UNIT,PRODUCT_BRAND,PRODUCT_STATUS,PRODUCT_WARN,PRODUCT_DATE,PRODUCT_CHECK,PRODUCT_CHECKCOUNT)
		values ('$productName','$productRate','$productQuantity','$productUnit','$productBrand','$productStatus','$productWarn','$productDate',0,0)";
		
		$qry = mysqli_query($con,$sql);//run query
   }
}


function updateStock(){	
	
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo 'failed to connect:'.mysqli_connect_error();
		exit;
	}
	else{	
	$productID = $_POST['productID'];
	$productName = $_POST['productName'];
        $productRate = $_POST['productRate'];
        $productQuantity = $_POST['productQuantity'];
		$productUnit= $_POST['productUnit'];
        $productBrand = $_POST['productBrand'];
		$productWarn = $_POST['productWarn'];
        $productStatus = $_POST['productStatus'];
		$productDate = $_POST['productDate'];
		$sql= "UPDATE product SET PRODUCT_NAME='$productName',PRODUCT_RATE='$productRate',PRODUCT_QUANTITY=PRODUCT_QUANTITY+'$productQuantity',PRODUCT_UNIT='$productUnit',PRODUCT_BRAND='$productBrand',PRODUCT_STATUS='$productStatus',PRODUCT_WARN='$productWarn', PRODUCT_DATE='$productDate', PRODUCT_CHECK=0, PRODUCT_CHECKCOUNT=0 WHERE PRODUCT_ID = '$productID' ";
		$qry= mysqli_query($con,$sql);
		
		$sql="SELECT PRODUCT_QUANTITY as totalQuantity from product WHERE PRODUCT_ID = '$productID'";
		$result = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_assoc($result)){
		if($row['totalQuantity']> $productQuantity){
			$conn = mysqli_connect("localhost","web2","web2","bakery_system");

		$sql="DELETE from stock_notification WHERE PRODUCT_NAME = '$productName' AND PRODUCT_BRAND='$productBrand' "; 
		$resultt=mysqli_query($conn, $sql);
		
		$sql="UPDATE product SET PRODUCT_STATUS='Available' where PRODUCT_NAME = '$productName' AND PRODUCT_BRAND='$productBrand' ";
		}
/*		else{
			$conn = mysqli_connect("localhost","web2","web2","bakery_system");

			$sql="UPDATE product SET PRODUCT_CHECK =1 AND PRODUCT_STATUS = 'Available' WHERE PRODUCT_NAME = '$productName' AND PRODUCT_BRAND='$productBrand' "; 
			$resultt=mysqli_query($conn, $sql);
		}*/
		}
	}
}
		
function getStockInfo($productID){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo "failed to connect:".mysqli_connect_error();
		exit;
	}
	else{
		$sql= "select * from product WHERE PRODUCT_ID = '$productID' ";
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}	

function delete_stock(){
$con = mysqli_connect("localhost","web2","web2","bakery_system");
$productID = $_POST['IDtoDelete'];

	if(!$con){
		echo "failed to connect:".mysqli_connect_error();
		exit;
	}
	else{
		$sql= "DELETE from add_item WHERE PRODUCT_ID = '".$productID."' ";
		$qry= mysqli_query($con,$sql);
		
	}
	
}

function totalProduct(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo mysqli_connect_error();
		exit;
	}
	else{
		$sql= "SELECT * from product";
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}

function searchByName($stockName){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo 'failed to connect:'.mysqli_connect_error();
		exit;
	}
	else{
		$sql= "SELECT * from product WHERE PRODUCT_NAME= '".$stockName."' OR PRODUCT_NAME LIKE '%".$stockName."%' ";
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}

function searchByDate($productDate){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	
	if(!$con){
		echo 'failed to connect:'.mysqli_connect_error();
		exit;
	}
	
	else{
		$sql= "SELECT * from product WHERE month(PRODUCT_DATE)='".$productDate."' ";
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}

function StoredCreate_stock(){
//$productID = $_POST['productID'];
$productName = $_POST['productName'];
$productRate = $_POST['productRate'];
$productQuantity = $_POST['productQuantity'];
$productUnit = $_POST['productUnit'];
$productBrand = $_POST['productBrand'];
$productStatus 	= $_POST['productStatuss'];
$productWarn = $_POST['productWarn'];
$productDate 	= $_POST['productDate'];
$con = mysqli_connect("localhost","web2","web2","bakery_system");

if(!$con){
		echo "Failed to connect:".mysqli_connect_error();
	}	
	else{ //add register record
		$sql="INSERT into product(PRODUCT_NAME,PRODUCT_RATE,PRODUCT_QUANTITY,PRODUCT_UNIT,PRODUCT_BRAND,PRODUCT_STATUS,PRODUCT_WARN,PRODUCT_DATE)
		values ('$productName','$productRate','$productQuantity','$productUnit','$productBrand','$productStatus','$productWarn','$productDate')";
		
		$qry = mysqli_query($con,$sql);//run query
		if(!$qry)
			echo 'error inserting record';
		else{
			echo '<script>alert("Created")</script>';
			header("refresh:2; url= display_stock.php");
   }
   }
}


function deductItem(){
	$productName = $_POST['productName'];
	$productQuantity = $_POST['productQuantity'];
	$productBrand = $_POST['productBrand'];
	$productWarn = $_POST['productWarn'];
	$con = mysqli_connect("localhost","web2","web2","bakery_system");

if(!$con){
		echo "Failed to connect:".mysqli_connect_error();
	}	
	else{
		$sql="UPDATE product SET PRODUCT_QUANTITY=PRODUCT_QUANTITY-'$productQuantity' WHERE PRODUCT_NAME = '$productName' AND PRODUCT_BRAND='$productBrand' ";
		$qry = mysqli_query($con,$sql);//run query
		
		$sqll="SELECT PRODUCT_QUANTITY as finalQuantity from product WHERE PRODUCT_NAME = '$productName' AND PRODUCT_BRAND='$productBrand' ";
		$result = mysqli_query($con,$sqll);
		while($row = mysqli_fetch_assoc($result)){
		if($row['finalQuantity']<= $productWarn){
			$conn = mysqli_connect("localhost","web2","web2","bakery_system");

			$sql="UPDATE product SET PRODUCT_CHECK =0 ,PRODUCT_STATUS = 'Not_Available', PRODUCT_CHECKCOUNT=0 WHERE PRODUCT_NAME = '$productName' AND PRODUCT_BRAND='$productBrand' "; 
			$resultt=mysqli_query($conn, $sql);
		}
		else{
			$conn = mysqli_connect("localhost","web2","web2","bakery_system");

			$sql="UPDATE product SET PRODUCT_CHECK =1 WHERE PRODUCT_NAME = '$productName' AND PRODUCT_BRAND='$productBrand' "; 
			$resultt=mysqli_query($conn, $sql);
		}
		}
	}
}

function storedItem(){
	$productName = $_POST['productName'];
	$productQuantity = $_POST['productQuantity'];
	$productUnit = $_POST['productUnit'];
	$productBrand = $_POST['productBrand'];
	$productDate 	= $_POST['productDate'];
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo "Failed to connect:".mysqli_connect_error();
	}	
	else{
		$sql="INSERT into item_used (PRODUCT_NAME,PRODUCT_QUANTITY,PRODUCT_UNIT,PRODUCT_BRAND,PRODUCT_DATE) values ('$productName','$productQuantity','$productUnit','$productBrand','$productDate') ";
		$qry = mysqli_query($con,$sql);//run query
	}
}

function storedUpdatedStock(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo 'failed to connect:'.mysqli_connect_error();
		exit;
	}
	else{	
		$productName = $_POST['productName'];
        $productRate = $_POST['productRate'];
        $productQuantity = $_POST['productQuantity'];
		$productUnit= $_POST['productUnit'];
        $productBrand = $_POST['productBrand'];
		$productWarn = $_POST['productWarn'];
        $productStatus = $_POST['productStatus'];
		$productDate = $_POST['productDate'];
		$sql= "insert add_item (PRODUCT_NAME,PRODUCT_RATE,PRODUCT_QUANTITY,PRODUCT_UNIT,PRODUCT_BRAND,PRODUCT_STATUS,PRODUCT_WARN,PRODUCT_DATE)
		values ('$productName','$productRate','$productQuantity','$productUnit','$productBrand','$productStatus','$productWarn','$productDate')";
		$qry= mysqli_query($con,$sql);
	}
}

function delete_notification(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
$productName = $_POST['productName'];
	if(!$con){
		echo "failed to connect:".mysqli_connect_error();
		exit;
	}
	else{
		$sql= "DELETE from stock_notification WHERE PRODUCT_NAME = '".$productName."' ";
		$qry= mysqli_query($con,$sql);
		return $qry;
	}
}

function FindStockDate($start,$endd){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	if(!$con){
		echo "failed to connect:".mysqli_connect_error();
		exit;
	}
	else{
		$sql = "SELECT * FROM add_item where PRODUCT_DATE BETWEEN '" . $start. "' AND  '" . $endd . "' ";
		$qry= mysqli_query($con,$sql);
	return $qry;
}
}

function delete_HistoryStock(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	$productID = $_POST['IDtoDelete'];

	if(!$con){
		echo "failed to connect:".mysqli_connect_error();
		exit;
	}
	else{
		$sql= "DELETE from item_used WHERE PRODUCT_ID = '".$productID."' ";
		$qry= mysqli_query($con,$sql);
		
	}
}

function delete_HistoryStockDate(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	$productID = $_POST['DatetoDelete'];

	if(!$con){
		echo "failed to connect:".mysqli_connect_error();
		exit;
	}
	else{
		$sql= "DELETE from item_used WHERE PRODUCT_ID = '".$productID."' ";
		$qry= mysqli_query($con,$sql);
		
	}
}

function delete_SelectedStockDate(){
	$con = mysqli_connect("localhost","web2","web2","bakery_system");
	$productID = $_POST['DatetoDelete'];

	if(!$con){
		echo "failed to connect:".mysqli_connect_error();
		exit;
	}
	else{
		$sql= "DELETE from add_item WHERE PRODUCT_ID = '".$productID."' ";
		$qry= mysqli_query($con,$sql);
		
	}
	
}
?>