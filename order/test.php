<?php

?><?php
include "../bakery_function.php";
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {
	header ("Location: ../login/login.php");
}
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
<link rel="stylesheet" href="../lib/w3.css">
<link rel="stylesheet" href="../lib/CSS.css">
<link rel="stylesheet" href="../lib/boot3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.dropdown-container {
    display: block;
    background-color: #262626;
}

div.one{
	background-color:white;
	padding:10px;
	padding-top:0px;
	padding-bottom:20px;
	margin-top:10;
	border-radius:5px;
	min-height:680px;
}

div.second{
	background-color:white;
	overflow-x:auto;
	height:470px;
}

.pagination {
    display: flex;
	justify-content:center;
	margin-bottom:0;
	position:absolute;
	bottom:5;
	left:50%;
	transform: translate(-50%,-50%);
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #bcbcbc;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a.disableDot{
	text-decoration: none;
	pointer-events:none;
	cursor: not-allowed;
}

.pagination a.disable{
	cursor: not-allowed;
	text-decoration: none;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<script>
function confirmDelete(delID){
	var status=3;
	var result =null,tmp = [];
	var item= location.search.substr(1).split("&");
	for (var index=0;index<item.length;index++){
		tmp=item[index].split("=");
		if(tmp[0]==="page") result= decodeURIComponent(tmp[1]);
	}
	if(confirm("Are You Sure You Want to Delete This Order?")){
		window.location.href='delete.php?del_id=' +delID+'&status='+status+'&page='+result;
		return true;
	}
}

function searchName(){
	document.getElementById("lol").action='deliveryOrder.php?searchPage=2&page=1';
}
function searchHPN(){
	document.getElementById("lol").action='deliveryOrder.php?searchPage=3&page=1';
}
function searchType(){
	document.getElementById("lol").action='deliveryOrder.php?searchPage=4&page=1';
}
function searchAll(){
	document.getElementById("lol").action='deliveryOrder.php?searchPage=1&page=1';
}
</script>
<?php 
bakeryHeader();

if(isSet($_POST['updateDetail'])){
	updateOrderPT();
}

?>
<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-2 sidenav">
			<center><img src="../company logo/png logo.png" alt="Miss Candy Bakery" style="width:140px;height:100px;margin-top:20px;margin-bottom:10px;"></center>
			<h4 class="one">Miss Candy Bakery</h4><hr class="one">
			<ul class="menu">
				<li class="xactive"><a class="one" href="createOrder.php"><?php spacing(3);?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Create Order</a></li>
			</ul>
			<button class="dropdown-btn"><i class="fas fa-birthday-cake" aria-hidden="true" style="margin-right:10px"></i>Cake Status<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
			<ul class="drop">
			<li class="xactive"><a class="one" href="viewOrder.php"><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Order List</a></li>
			<li class="xactive"><a class="one" href="doneOrder.php"><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Ready List</a></li>
			<li class="active"><a class="one" href="deliveryOrder.php?page=1"><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Delivery List</a></li>
			</ul>
			</div>
			<ul class="menu">
				<li class="xactive"><a class="one" href="../stock/display_stock.php"><?php spacing(3);?><i class="fas fa-warehouse" aria-hidden="true" style="margin-right:10px"></i>Stock</a></li>
				<li class="xactive"><a class="one" href="../login/logout.php"><?php spacing(3);?><i class="fa fa-sign-out" aria-hidden="true" style="margin-right:10px"></i>Log out</a></li>
			</ul>
		</div>
		<div class="col-sm-10">
			<?php
			//print_r($_POST);
			$status=3;
			echo '<div class="one">';
			displaySearchPanel();
				
				$searchKey=$_GET['searchValue'];
				
				$recordPerPage=10;
				displayAll($searchKey);
				$con=mysqli_connect("localhost","web2","web2","bakery_system");
				$sql = "SELECT COUNT(cust_ID) as noOfRecord FROM product_order WHERE cust_Name LIKE '".$searchKey."%' AND status='deliver'"; 
				$rs_result = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($rs_result); 
				$total_records = $row['noOfRecord']; 
				$total_pages=ceil($total_records/$recordPerPage);

		
				//display the list of page -----------------------------------
				$x=1;
				echo '<div class="pagination">';
				$LcurrentPage= $RcurrentPage= $thisPage= $_GET['page'];
				$link=5; // define how many link want to display
			
				if($thisPage>$link)		
					$start= $thisPage-$link;	// start to print different start link if the current page > $link
				else
					$start=1;
		
				if($thisPage<$link+1)
					$end=$link+1;		// do not print link if current page < $link
				else
					$end= $thisPage+$link;		// define the end link to display
		
				$last= $total_pages;	// the last link
				if($end>$last)
					$end=$last;
				//left arrow 
				if($LcurrentPage==1)
					$LcurrentPage=1;
				else
					$LcurrentPage-=1;
				// right arrow
				if($RcurrentPage==$total_pages)
					$RcurrentPage=$total_pages;
				else
					$RcurrentPage+=1;
		
				if($thisPage==1)	// disable left arrow if first page
					echo "<a class='disable'>&laquo;</a>";	
				else
					echo "<a href='test.php?searchValue=".$searchKey."&page=".$LcurrentPage."'>&laquo;</a>";	

				if($thisPage>$link+1){	// start to display first page with "..."
					echo '<a href="test.php?searchValue='.$searchKey.'&page=1">1</a>';
					echo '<a class="disableDot">...</a>';
				}
				// the range of link display
				for ($i=$start; $i<=$end; $i++) {
					$active="";
			
					if(isSet($_GET['page']) && $_GET['page']==$i)
						$active='class="active"';
					echo "<a $active href='test.php?searchValue=".$searchKey."&page=".$start."'>".$start."</a>"; 
					$start++;
				} 
		
				if($end<$last){		// display last page with "..."
					echo '<a class="disableDot">...</a>';
					echo '<a href="test.php?searchValue='.$searchKey.'&page='.$last.'">'.$last.'</a>';
				}
		
				if($thisPage==$last)	// disable right arrow if last page
					echo "<a class='disable'>&raquo;</a>";	
				else
					echo "<a href='test.php?searchValue=".$searchKey."&page=".$RcurrentPage."'>&raquo;</a>";

				echo '</div>';
			
			//--------------------------------------------------------------------
			
			/*else{
				displayAll();
			
				$recordPerPage=10;
				$con=mysqli_connect("localhost","web2","web2","bakery_system");
				$sql = "SELECT COUNT(cust_ID) as noOfRecord FROM product_order WHERE status='deliver'"; 
				$rs_result = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($rs_result); 
				$total_records = $row['noOfRecord']; 
				$total_pages=ceil($total_records/$recordPerPage);

		
				//display the list of page -----------------------------------
				$x=1;
				echo '<div class="pagination">';
				$LcurrentPage= $RcurrentPage= $thisPage= $_GET['page'];
				$link=5; // define how many link want to display
			
				if($thisPage>$link)		
					$start= $thisPage-$link;	// start to print different start link if the current page > $link
				else
					$start=1;
		
				if($thisPage<$link+1)
					$end=$link+1;		// do not print link if current page < $link
				else
					$end= $thisPage+$link;		// define the end link to display
		
				$last= $total_pages;	// the last link
				if($end>$last)
					$end=$last;
				//left arrow 
				if($LcurrentPage==1)
					$LcurrentPage=1;
				else
					$LcurrentPage-=1;
				// right arrow
				if($RcurrentPage==$total_pages)
					$RcurrentPage=$total_pages;
				else
					$RcurrentPage+=1;
		
				if($thisPage==1)	// disable left arrow if first page
					echo "<a class='disable'>&laquo;</a>";	
				else
					echo "<a href='deliveryOrder.php?page=".$LcurrentPage."'>&laquo;</a>";	

				if($thisPage>$link+1){	// start to display first page with "..."
					echo '<a href="deliveryOrder.php?page=1">1</a>';
					echo '<a class="disableDot">...</a>';
				}
				// the range of link display
				for ($i=$start; $i<=$end; $i++) {
					$active="";
			
					if(isSet($_GET['page']) && $_GET['page']==$i)
						$active='class="active"';
					echo "<a $active href='deliveryOrder.php?page=".$start."'>".$start."</a>"; 
					$start++;
				} 
		
				if($end<$last){		// display last page with "..."
					echo '<a class="disableDot">...</a>';
					echo '<a href="deliveryOrder.php?page='.$last.'">'.$last.'</a>';
				}
		
				if($thisPage==$last)	// disable right arrow if last page
					echo "<a class='disable'>&raquo;</a>";	
				else
					echo "<a href='deliveryOrder.php?page=".$RcurrentPage."'>&raquo;</a>";

				echo '</div>';
			
			//--------------------------------------------------------------------
			}*/
			echo '</div>';
			?>
		</div>
	</div>
</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<?php
function displaySearchPanel(){
	echo '<form action="test.php?page=1" method="post">';
	echo '<div class="form-group">';
	echo '<fieldset style="margin-top:10px;border:2px solid silver;padding:10px;"><legend style="font-size:16pt;margin-bottom:5;padding-left:10px;padding-right:10px;">Search Cake Order:</legend>';
	echo '<input type="text" name="searchValue" placeholder="Enter the details" id="iconSearch" class="InputSearch">';spacing(5);
	echo '<input type="submit" class="btn btn-primary" name="searchByName" value="By Name">';spacing(1);
	echo '<input type="submit" class="btn btn-primary" name="searchByHPN" value="By HPN">';spacing(1);
	echo '<input type="submit" class="btn btn-primary" name="searchByType" value="By Cake Type">';spacing(1);
	echo '<input type="submit" class="btn btn-primary" name="displayAll" value="Display All">';
	echo '</fieldset>';
	echo '</div>';
	echo '</form>';
}
function displayAll($searchKey){
	$recordPerPage=10;
	if(isSet($_GET['page'])){
		$page= $_GET['page'];
	}
	else{
		$page=1;
	}
	if($page==0)
		$page==1;
	
	$start_from=($page-1)*$recordPerPage;
	$con=mysqli_connect("localhost","web2","web2","bakery_system");

	//select recordPerPage records
	$sql="SELECT * from product_order WHERE cust_Name LIKE '".$searchKey."%' AND status='deliver' ORDER BY cust_ID ASC LIMIT $start_from, $recordPerPage";
	$qry = mysqli_query($con,$sql);
	$totalOrder= searchOrderByName($searchKey,"deliver");
	$numOrder= mysqli_num_rows($totalOrder);
	
	echo '<div class="second">';
	if($numOrder>0){
		if($numOrder>10)
			echo '<h4 style="margin-top:0;color:#337AB7;">Page '.$page.' of '.$numOrder.' delivery order/s.</h4>';
		else
			echo '<h4 style="margin-top:0;color:#337AB7;">'.$numOrder.' delivery order/s.</h4>';
		echo '<table border=1 cellspacing=0 cellpadding=10 style="background-color:white;width:100%;" class="w3-table w3-bordered w3-striped w3-large w3-hoverable w3-card-4">';
		echo '<tr style="background-color:#202021;color:white;">';
		echo '<th style="text-align:center">No.</th>';
		echo '<th style="text-align:center">Order ID</th>';
		echo '<th style="text-align:center">Customer Name</th>';
		echo '<th style="text-align:center">Customer HPN</th>';
		echo '<th style="text-align:center">Quantity</th>';
		echo '<th style="text-align:center">Cake Type</th>';
		echo '<th style="text-align:center">Order Date</th>';
		echo '<th style="text-align:center">Dispatch Date</th>';
		echo '<th style="text-align:center">Action</th>';
		echo '</tr>'; 
		$count=(($page-1)*$recordPerPage)+1;//display current page rec no
		while($row= mysqli_fetch_assoc($qry)){
			echo '<tr class="w3-hover-text-blue">';
				echo '<td style="text-align:center;vertical-align:middle;">'.$count.'</td>';
				echo '<td style="text-align:center;vertical-align:middle;">'.$row['cust_ID'].'</td>';
				echo '<td style="text-align:center;vertical-align:middle;">'.$row['cust_Name'].'</td>';
				echo '<td style="text-align:center;vertical-align:middle;">'.$row['cust_HPN'].'</td>';
				echo '<td style="text-align:center;vertical-align:middle;">'.$row['quantity'].'</td>';
				echo '<td style="text-align:center;vertical-align:middle;">'.$row['type'].'</td>';
				echo '<td style="text-align:center;vertical-align:middle;">'.$row['orderDate'].'</td>';
				echo '<td style="text-align:center;vertical-align:middle;">'.$row['dispatchDate'].'</td>';
				// detail -----------------------------------
				$custID= $row['cust_ID'];
				echo '<td style="text-align:center;vertical-align:middle;">';
					echo '<form action="customerDetail.php" method="post" style="display:inline">';
						echo "<input type='hidden' name='IDtoView' value='$custID'>";
						echo '<button type="submit" title="Details" name="orderDetail" style="margin-right:2;padding:4;" class="btn btn-primary fa fa-info-circle" aria-hidden="true">';
					echo '</form>';
				// delete-----------------------------?>
					<button type="submit" onclick="confirmDelete(<?php echo $row['cust_ID']; ?>)" title="Delete" name="deleteOrder" style="margin-right:2;padding:4;" class="btn btn-danger fa fa-trash-o" aria-hidden="true">
					<?php
				// update order -----------------------------
					echo '<form action="updateCustDetail.php" method="post" style="display:inline">';
						echo "<input type='hidden' name='IDtoView' value='$custID'>";
						echo '<button type="submit" title="Edit" name="updateOrder" style="margin-right:2;padding:4;" class="btn btn-warning fa fa-pencil-square-o" aria-hidden="true">';
					echo '</form>';
				echo '</td>';
				//--------------------------------------------
			echo '</tr>';
			$count++;
		}
		echo '</table>';
	}
	else{
		echo '<h1 style="text-align:center;vertical-align:center;">No order found</h1>';
		echo '<table border=1 cellspacing=0 cellpadding=10 style="background-color:white;width:100%;" class="w3-table w3-bordered w3-striped w3-large w3-hoverable w3-card-4">';
		echo '<tr style="background-color:#202021;color:white;">';
		echo '<th style="text-align:center">No.</th>';
		echo '<th style="text-align:center">Order ID</th>';
		echo '<th style="text-align:center">Customer Name</th>';
		echo '<th style="text-align:center">Customer HPN</th>';
		echo '<th style="text-align:center">Quantity</th>';
		echo '<th style="text-align:center">Cake Type</th>';
		echo '<th style="text-align:center">Order Date</th>';
		echo '<th style="text-align:center">Dispatch Date</th>';
		echo '<th style="text-align:center">Action</th>';
		echo '</tr>'; 
		echo '<tr class="w3-hover-text-blue">';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '</tr>';
		echo '</table>';
	}
	echo '</div>';
}
function table($search){
	$numOrder= mysqli_num_rows($search);
	$num=1;
	echo '<div class="second">';
	if($numOrder>0){
		/*if($numOrder>10)
			echo '<h4 style="margin-top:0;color:#337AB7;">Page '.$page.' of '.$numOrder.' delivery order/s.</h4>';
		else*/
			echo '<h4 style="margin-top:0;color:#337AB7;">'.$numOrder.' delivery order/s.</h4>';
		
		echo '<table border=1 cellspacing=0 cellpadding=10 style="background-color:white;width:100%;" class="w3-table w3-bordered w3-striped w3-large w3-hoverable w3-card-4">';
		echo '<tr style="background-color:#202021;color:white;">';
		echo '<th style="text-align:center">No.</th>';
		echo '<th style="text-align:center">Order ID</th>';
		echo '<th style="text-align:center">Customer Name</th>';
		echo '<th style="text-align:center">Customer HPN</th>';
		echo '<th style="text-align:center">Quantity</th>';
		echo '<th style="text-align:center">Cake Type</th>';
		echo '<th style="text-align:center">Order Date</th>';
		echo '<th style="text-align:center">Dispatch Date</th>';
		echo '<th style="text-align:center">Action</th>';
		echo '</tr>'; 
		while($row= mysqli_fetch_assoc($search)){
			echo '<tr class="w3-hover-text-blue">';
			echo '<td style="text-align:center;vertical-align:middle;">'.$num.'</td>';
			echo '<td style="text-align:center;vertical-align:middle;">'.$row['cust_ID'].'</td>';
			echo '<td style="text-align:center;vertical-align:middle;">'.$row['cust_Name'].'</td>';
			echo '<td style="text-align:center;vertical-align:middle;">'.$row['cust_HPN'].'</td>';
			echo '<td style="text-align:center;vertical-align:middle;">'.$row['quantity'].'</td>';
			echo '<td style="text-align:center;vertical-align:middle;">'.$row['type'].'</td>';
			echo '<td style="text-align:center;vertical-align:middle;">'.$row['orderDate'].'</td>';
			echo '<td style="text-align:center;vertical-align:middle;">'.$row['dispatchDate'].'</td>';
			// detail -----------------------------------
			$custID= $row['cust_ID'];
			echo '<td style="text-align:center;vertical-align:middle;">';
				echo '<form action="customerDetail.php" method="post" style="display:inline">';
				echo "<input type='hidden' name='IDtoView' value='$custID'>";
				echo '<button type="submit" title="Details" name="orderDetail" style="margin-right:2;padding:4;" class="btn btn-primary fa fa-info-circle" aria-hidden="true">';
				echo '</form>';
			// delete-----------------------------
				//echo '<form action="viewOrder.php" method="post" style="display:inline">';
				echo "<input type='hidden' name='IDtoDelete' value='$custID'>";?>
				<button type="submit" onclick="confirmDelete(<?php echo $row['cust_ID']; ?>)" title="Delete" name="deleteOrder" style="margin-right:2;padding:4;" class="btn btn-danger fa fa-trash-o" aria-hidden="true">
				<?php
			// update order -----------------------------
				echo '<form action="updateCustDetail.php" method="post" style="display:inline">';
				echo "<input type='hidden' name='IDtoView' value='$custID'>";
				echo '<button type="submit" title="Edit" name="updateOrder" style="margin-right:2;padding:4;" class="btn btn-warning fa fa-pencil-square-o" aria-hidden="true">';
				echo '</form>';
			echo '</td>';
			//--------------------------------------------
			echo '</tr>';
			$num++;
		}
		echo '</table>';
	}
	else{
		echo '<h1 style="text-align:center;vertical-align:center;">No order found</h1>';
		echo '<table border=1 cellspacing=0 cellpadding=10 style="background-color:white;width:100%;" class="w3-table w3-bordered w3-striped w3-large w3-hoverable w3-card-4">';
		echo '<tr style="background-color:#202021;color:white;">';
		echo '<th style="text-align:center">No.</th>';
		echo '<th style="text-align:center">Order ID</th>';
		echo '<th style="text-align:center">Customer Name</th>';
		echo '<th style="text-align:center">Customer HPN</th>';
		echo '<th style="text-align:center">Quantity</th>';
		echo '<th style="text-align:center">Cake Type</th>';
		echo '<th style="text-align:center">Order Date</th>';
		echo '<th style="text-align:center">Dispatch Date</th>';
		echo '<th style="text-align:center">Action</th>';
		echo '</tr>'; 
		echo '<tr class="w3-hover-text-blue">';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '<td style="text-align:center;vertical-align:middle;">-</td>';
		echo '</tr>';
		echo '</table>';
	}
	echo '</div>';
}
?>