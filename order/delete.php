<?php
$pageStatus=$_GET['status'];
$custID = $_GET['del_id'];
$page= $_GET['page'];
$method= $_GET['method'];
$searchValue= $_GET['searchValue'];
$con = mysqli_connect("localhost","web2","web2","bakery_system");
if($pageStatus==1){
	$status="pending";
	$sql= "DELETE from product_order WHERE cust_ID='$custID' AND status='".$status."' ";		
	$qry= mysqli_query($con,$sql);
	if($page!=1){
		if($method==1){
			$sql1= "SELECT COUNT(cust_ID) AS totalRecord FROM product_order WHERE cust_Name LIKE '".$searchValue."%' AND status='".$status."' ";
			$result= mysqli_query($con,$sql1);
			$row= mysqli_fetch_assoc($result);
			$totalRow= $row['totalRecord'];
			if($totalRow%10 == 0) $page-=1;
		}
		else if($method==2){
			$sql1= "SELECT COUNT(cust_ID) AS totalRecord FROM product_order WHERE cust_HPN LIKE '".$searchValue."%' AND status='".$status."' ";
			$result= mysqli_query($con,$sql1);
			$row= mysqli_fetch_assoc($result);
			$totalRow= $row['totalRecord'];
			if($totalRow%10 == 0) $page-=1;
		}
		else if($method==3){
			$sql1= "SELECT COUNT(cust_ID) AS totalRecord FROM product_order WHERE type LIKE '".$searchValue."%' AND status='".$status."' ";
			$result= mysqli_query($con,$sql1);
			$row= mysqli_fetch_assoc($result);
			$totalRow= $row['totalRecord'];
			if($totalRow%10 == 0) $page-=1;
		}
		else{
			if($method==4){
				$sql1= "SELECT COUNT(cust_ID) AS totalRecord from product_order WHERE status='".$status."' ";
				$result= mysqli_query($con,$sql1);
				$row= mysqli_fetch_assoc($result);
				$totalRow= $row['totalRecord'];
				if($totalRow%10 == 0) $page-=1;
			}
		}
	}
	header("Location: viewOrder.php?page=$page&method=$method&searchValue=$searchValue");
}
else if($pageStatus==2){
	$status="done";
	$sql= "DELETE from product_order WHERE cust_ID='$custID' AND status='".$status."' ";		
	$qry= mysqli_query($con,$sql);
	if($page!=1){
		if($method==1){
			$sql1= "SELECT COUNT(cust_ID) AS totalRecord FROM product_order WHERE cust_Name LIKE '".$searchValue."%' AND status='".$status."' ";
			$result= mysqli_query($con,$sql1);
			$row= mysqli_fetch_assoc($result);
			$totalRow= $row['totalRecord'];
			if($totalRow%10 == 0) $page-=1;
		}
		else if($method==2){
			$sql1= "SELECT COUNT(cust_ID) AS totalRecord FROM product_order WHERE cust_HPN LIKE '".$searchValue."%' AND status='".$status."' ";
			$result= mysqli_query($con,$sql1);
			$row= mysqli_fetch_assoc($result);
			$totalRow= $row['totalRecord'];
			if($totalRow%10 == 0) $page-=1;
		}
		else if($method==3){
			$sql1= "SELECT COUNT(cust_ID) AS totalRecord FROM product_order WHERE type LIKE '".$searchValue."%' AND status='".$status."' ";
			$result= mysqli_query($con,$sql1);
			$row= mysqli_fetch_assoc($result);
			$totalRow= $row['totalRecord'];
			if($totalRow%10 == 0) $page-=1;
		}
		else{
			if($method==4){
				$sql1= "SELECT COUNT(cust_ID) AS totalRecord from product_order WHERE status='".$status."' ";
				$result= mysqli_query($con,$sql1);
				$row= mysqli_fetch_assoc($result);
				$totalRow= $row['totalRecord'];
				if($totalRow%10 == 0) $page-=1;
			}
		}
	}
	header("Location: doneOrder.php?page=$page&method=$method&searchValue=$searchValue");
}
else if($pageStatus==3){
	$status="deliver";
	$sql= "DELETE from product_order WHERE cust_ID='$custID' AND status='".$status."' ";		
	$qry= mysqli_query($con,$sql);
	if($page!=1){
		if($method==1){
			$sql1= "SELECT COUNT(cust_ID) AS totalRecord FROM product_order WHERE cust_Name LIKE '".$searchValue."%' AND status='".$status."' ";
			$result= mysqli_query($con,$sql1);
			$row= mysqli_fetch_assoc($result);
			$totalRow= $row['totalRecord'];
			if($totalRow%10 == 0) $page-=1;
		}
		else if($method==2){
			$sql1= "SELECT COUNT(cust_ID) AS totalRecord FROM product_order WHERE cust_HPN LIKE '".$searchValue."%' AND status='".$status."' ";
			$result= mysqli_query($con,$sql1);
			$row= mysqli_fetch_assoc($result);
			$totalRow= $row['totalRecord'];
			if($totalRow%10 == 0) $page-=1;
		}
		else if($method==3){
			$sql1= "SELECT COUNT(cust_ID) AS totalRecord FROM product_order WHERE type LIKE '".$searchValue."%' AND status='".$status."' ";
			$result= mysqli_query($con,$sql1);
			$row= mysqli_fetch_assoc($result);
			$totalRow= $row['totalRecord'];
			if($totalRow%10 == 0) $page-=1;
		}
		else{
			if($method==4){
				$sql1= "SELECT COUNT(cust_ID) AS totalRecord from product_order WHERE status='".$status."' ";
				$result= mysqli_query($con,$sql1);
				$row= mysqli_fetch_assoc($result);
				$totalRow= $row['totalRecord'];
				if($totalRow%10 == 0) $page-=1;
			}
		}
	}
	header("Location: deliveryOrder.php?page=$page&method=$method&searchValue=$searchValue");
}
else
	echo 'Wrong page status';
?>