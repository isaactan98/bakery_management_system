<?php
include "../bakery_function.php";
include "../config.php";
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {
	header("Location: ../login/login.php");
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

	.cake-dropdown-container {
		display: none;
		background-color: #262626;
	}

	div.one {
		background-color: white;
		padding: 10px;
		padding-top: 0px;
		padding-bottom: 20px;
		margin-top: 10;
		border-radius: 5px;
		min-height: 680px;
	}

	div.second {
		background-color: white;
		overflow-x: auto;
		height: 470px;
	}

	.pagination {
		display: flex;
		justify-content: center;
		margin-bottom: 0;
		position: absolute;
		bottom: 5;
		left: 50%;
		transform: translate(-50%, -50%);
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

	.pagination a.disableDot {
		text-decoration: none;
		pointer-events: none;
		cursor: not-allowed;
	}

	.pagination a.disable {
		cursor: not-allowed;
		text-decoration: none;
	}

	.pagination a:hover:not(.active) {
		background-color: #ddd;
	}
</style>
<script>
	function confirmDelete(delID, method, searchValue) {
		var status = 2;
		var result = null,
			tmp = [];
		var item = location.search.substr(1).split("&");
		for (var index = 0; index < item.length; index++) {
			tmp = item[index].split("=");
			if (tmp[0] === "page") result = decodeURIComponent(tmp[1]);
		}
		if (confirm("Are You Sure You Want to Delete This Order?")) {
			// window.location.href='delete.php?del_id=' +delID+'&status='+status+'&page='+result+'&method='+method+'&searchValue='+searchValue;
			// return true;
			$.ajax({
				type: "DELETE",
				url: "http://localhost/bms/api/order/" + delID,
				dataType: "json",
				contentType: "application/json",

				success: function(data, status, xhr) {
					if (xhr.status == 200)
						location.reload();
					else {
						console.log("fail to insert, " + data.errormessage);
					}
				},
				error: function(xhr, resp, text) {
					console.log(xhr.responseText);
				},
			});
		}
	}
	// deliver
	function confirmUpdate(updateID, page, method, searchValue) {
		var status = 2;
		if (confirm("Are you sure the cake is done?")) {
			window.location.href = 'updateDoneOrder.php?updateID=' + updateID + '' + '&status=' + status + '&page=' + page + '&method=' + method + '&searchValue=' + searchValue;
			return true;
		}
	}

	function searchName() {
		var x = document.getElementById("iconSearch").value;
		document.getElementById("searchPanel").action = 'doneOrder.php?page=1&method=1&searchValue=' + x;
	}

	function searchHPN() {
		var x = document.getElementById("iconSearch").value;
		document.getElementById("searchPanel").action = 'doneOrder.php?page=1&method=2&searchValue=' + x;
	}

	function searchType() {
		var x = document.getElementById("iconSearch").value;
		document.getElementById("searchPanel").action = 'doneOrder.php?page=1&method=3&searchValue=' + x;
	}

	function searchAll() {
		document.getElementById("iconSearch").value = '';
		document.getElementById("searchPanel").action = 'doneOrder.php?page=1&method=4&searchValue=';
	}
</script>
<?php
bakeryHeader();

if (isset($_POST['updateDetail'])) {
	updateOrderPT();
}

?>
<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-2 sidenav">
			<center><img src="../company logo/png logo.png" alt="Miss Candy Bakery" style="width:140px;height:100px;margin-top:20px;margin-bottom:10px;"></center>
			<h4 class="one">Miss Candy Bakery</h4>
			<hr class="one">
			<ul class="menu">
				<li class="xactive"><a class="one" href="createOrder.php"><?php spacing(3); ?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Create Order</a></li>
			</ul>
			<button class="dropdown-btn"><i class="fas fa-birthday-cake" aria-hidden="true" style="margin-right:10px"></i>Cake Status<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<ul class="drop">
					<li class="xactive"><a class="one" href="viewOrder.php?page=1&method=4&searchValue="><?php spacing(7); ?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Order List</a></li>
					<li class="active"><a class="one" href="doneOrder.php?page=1&method=4&searchValue="><?php spacing(7); ?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Ready List</a></li>
					<li class="xactive"><a class="one" href="deliveryOrder.php?page=1&method=4&searchValue="><?php spacing(7); ?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Delivery List</a></li>
				</ul>
			</div>

			<ul class="menu">
				<li class="xactive"><a class="one" href="../chart/chart.php"><?php spacing(3); ?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Report</a></li>
				<li class="xactive"><a class="one" href="../login/logout.php"><?php spacing(3); ?><i class="fa fa-sign-out" aria-hidden="true" style="margin-right:10px"></i>Log out</a></li>
			</ul>
		</div>
		<div class="col-sm-10">
			<?php
			$status = 2;
			echo '<div class="one">';
			displaySearchPanel();
			$searchKey = $_GET['searchValue'];
			$method = $_GET['method'];

			displayAll();
			$sql = "SELECT COUNT(cust_ID) as noOfRecord FROM product_order WHERE status='done'";

			$recordPerPage = 10;
			$con = mysqli_connect("localhost", "web2", "web2", "bakery_system");
			$rs_result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($rs_result);
			$total_records = $row['noOfRecord'];
			$total_pages = ceil($total_records / $recordPerPage);

			//display the list of page -----------------------------------
			$x = 1;
			echo '<div class="pagination">';
			$LcurrentPage = $RcurrentPage = $thisPage = $_GET['page'];
			$link = 5; // define how many link want to display

			if ($thisPage > $link)
				$start = $thisPage - $link;	// start to print different start link if the current page > $link
			else
				$start = 1;

			if ($thisPage < $link + 1)
				$end = $link + 1;		// do not print link if current page < $link
			else
				$end = $thisPage + $link;		// define the end link to display

			$last = $total_pages;	// the last link
			if ($end > $last)
				$end = $last;
			//left arrow 
			if ($LcurrentPage == 1)
				$LcurrentPage = 1;
			else
				$LcurrentPage -= 1;
			// right arrow
			if ($RcurrentPage == $total_pages)
				$RcurrentPage = $total_pages;
			else
				$RcurrentPage += 1;

			if ($thisPage == 1)	// disable left arrow if first page
				echo "<a class='disable'>&laquo;</a>";
			else
				echo "<a href='doneOrder.php?page=" . $LcurrentPage . "&method=" . $method . "&searchValue=" . $searchKey . "'>&laquo;</a>";

			if ($thisPage > $link + 1) {	// start to display first page with "..."
				echo '<a href="doneOrder.php?page=1&method=' . $method . '&searchValue=' . $searchKey . '">1</a>';
				echo '<a class="disableDot">...</a>';
			}
			// the range of link display
			for ($i = $start; $i <= $end; $i++) {
				$active = "";

				if (isset($_GET['page']) && $_GET['page'] == $i)
					$active = 'class="active"';
				echo "<a $active href='doneOrder.php?page=" . $start . "&method=" . $method . "&searchValue=" . $searchKey . "'>" . $start . "</a>";
				$start++;
			}

			if ($end < $last) {		// display last page with "..."
				echo '<a class="disableDot">...</a>';
				echo '<a href="doneOrder.php?page=' . $last . '&method=' . $method . '&searchValue=' . $searchKey . '">' . $last . '</a>';
			}

			if ($thisPage == $last)	// disable right arrow if last page
				echo "<a class='disable'>&raquo;</a>";
			else
				echo "<a href='doneOrder.php?page=" . $RcurrentPage . "&method=" . $method . "&searchValue=" . $searchKey . "'>&raquo;</a>";

			echo '</div>';
			//--------------------------------------------------------------------
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
function displaySearchPanel()
{
	
}


function displayAll()
{
	global $con;
	$recordPerPage = 10;
	$method = $_GET['method'];
	$searchValue = $_GET['searchValue'];
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}
	if ($page == 0)
		$page == 1;

	$start_from = ($page - 1) * $recordPerPage;
	//$con=mysqli_connect("localhost","web2","web2","bakery_system");

	//select recordPerPage records
	$sql = "SELECT * FROM product_order WHERE status='done' ORDER BY cust_ID ASC LIMIT $start_from, $recordPerPage";
	$qry = mysqli_query($con, $sql);
	$totalOrder = doneOrder();
	$numOrder = mysqli_num_rows($totalOrder);

	echo '<div class="second">';
	if ($numOrder > 0) {
		if ($numOrder > 10)
			echo '<h4 style="margin-top:0;color:#337AB7;">Page ' . $page . ' of ' . $numOrder . ' order/s ready</h4>';
		else
			echo '<h4 style="margin-top:0;color:#337AB7;">' . $numOrder . ' order/s is ready.</h4>';
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
		$count = (($page - 1) * $recordPerPage) + 1; //display current page rec no
		while ($row = mysqli_fetch_assoc($qry)) {
			echo '<tr class="w3-hover-text-blue">';
			echo '<td style="text-align:center;vertical-align:middle;">' . $count . '</td>';
			echo '<td style="text-align:center;vertical-align:middle;">' . $row['cust_ID'] . '</td>';
			echo '<td style="text-align:center;vertical-align:middle;">' . $row['cust_Name'] . '</td>';
			echo '<td style="text-align:center;vertical-align:middle;">' . $row['cust_HPN'] . '</td>';
			echo '<td style="text-align:center;vertical-align:middle;">' . $row['quantity'] . '</td>';
			echo '<td style="text-align:center;vertical-align:middle;">' . $row['type'] . '</td>';
			echo '<td style="text-align:center;vertical-align:middle;">' . $row['orderDate'] . '</td>';
			echo '<td style="text-align:center;vertical-align:middle;">' . $row['dispatchDate'] . '</td>';
			// detail -----------------------------------
			$custID = $row['cust_ID'];
			echo '<td style="text-align:center;vertical-align:middle;">';
			echo '<form action="customerDetail.php" method="post" style="display:inline">';
			echo "<input type='hidden' name='IDtoView' value='$custID'>";
			echo '<button type="submit" title="Details" name="orderDetail" style="margin-right:2;padding:4;" class="btn btn-primary fa fa-info-circle" aria-hidden="true">';
			echo '</form>';
			// delete----------------------------
			echo "<button type='submit' onclick='confirmDelete(" . $row['cust_ID'] . ",$method,\"$searchValue\")' title='Delete' name='deleteOrder' style='margin-right:2;padding:4;' class='btn btn-danger fa fa-trash-o' aria-hidden='true'>";

			// update order -----------------------------
			echo '<form action="updateCustDetail.php" method="post" style="display:inline">';
			echo "<input type='hidden' name='IDtoView' value='$custID'>";
			echo '<button type="submit" title="Edit" name="updateOrder" style="margin-right:2;padding:4;" class="btn btn-warning fa fa-pencil-square-o" aria-hidden="true">';
			echo '</form>';
			// update status -----------------------------
			echo "<button type='submit' onclick='confirmUpdate(" . $row['cust_ID'] . ",$page,$method,\"$searchValue\")' title='Done' name='updateStatus' style='margin-right:2;padding:4;' class='btn btn-success fa fa-check-square-o' aria-hidden='true'>";
			echo '</td>';
			//--------------------------------------------
			echo '</tr>';
			$count++;
		}
		echo '</table>';
	} else {
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