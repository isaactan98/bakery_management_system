<?php
include "../bakery_function.php";
bakeryHeader();
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {
	header ("Location: ../login/login.php");
}

$orderDate='';
$dispatchDate='';
$Searchtype = '';
$cust_Name = '';

function getPost(){
		$post = array();
		$post[4] = $_POST['Searchtype'];
		$post[1] = $_POST['SearchCust'];

		return $post;
	}

$con = mysqli_connect("localhost","web2","web2","bakery_system");
if($con == false){
	echo "Connection Error";
}
else{

		$result = mysqli_query($con,"SELECT type,sum(quantity) as totalQuantity FROM product_order group by type order by type");
		//initialize the array to store the process data
		$jsonArray = array();
		//check if there is any data returned by the SQL query
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				$jsArrayItem = array();
			
				$jsArrayItem['label'] = $row['type'];
				$jsArrayItem['y'] = intval($row['totalQuantity']);

				array_push($jsonArray, $jsArrayItem);
			
			}

				//apend the above created object into the main array
			}

	if(isset($_POST['checkDate'])){
		$orderDate = $_POST['orderDate'];
		$dispatchDate = $_POST['dispatchDate'];
		$result = mysqli_query($con,"SELECT type,orderDate,sum(quantity) as totalQuantity from product_order where orderDate between '$orderDate' and '$dispatchDate' group by type");
		$jsonArray = array();
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				$jsArrayItem = array();

				$jsArrayItem['label'] = $row['type'];
				$jsArrayItem['y'] = intval($row['totalQuantity']);
				array_push($jsonArray, $jsArrayItem);
			}
		}
	}
	if(isset($_POST['highestOrder'])){

		$result = mysqli_query($con,"SELECT type,sum(quantity) as totalQuantity from product_order group by type order by totalQuantity DESC");
		$jsonArray = array();
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				$jsArrayItem = array();

				$jsArrayItem['label'] = $row['type'];
				$jsArrayItem['y'] = intval($row['totalQuantity']);
				array_push($jsonArray, $jsArrayItem);
			}
		}
	}
	
	if(isset($_POST['cakeType'])){
		$Searchtype = $_POST['Searchtype'];

		$data = getPost();

		$result = mysqli_query($con,"SELECT type,sum(quantity) as totalQuantity,MONTHNAME(orderDate) as monthlySale from product_order where type Like '$data[4]' group by monthlySale order by monthlySale");
		$jsonArray = array();
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_array($result)) {
				$jsArrayItem = array();
				$jsArrayItem['label'] = $row['monthlySale'];
				$jsArrayItem['y'] = intval($row['totalQuantity']);
				array_push($jsonArray, $jsArrayItem);
			}
		}

	}


	if(isset($_POST['Cust_order'])){
		$data = getPost();

		$cust_Name = $_POST['SearchCust'];
		$result = mysqli_query($con,"SELECT cust_Name,type,quantity from product_order where cust_Name like '$data[1]'");
		$jsonArray = array();
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_array($result)) {
				$jsArrayItem = array();
				$jsArrayItem['label'] = $row['type'];
				$jsArrayItem['y'] = intval($row['quantity']);
				array_push($jsonArray, $jsArrayItem);
			}
		}

	}


} 
	mysqli_close($con);



?>
<!DOCTYPE HTML>
<html>
<head>
<title>Chart for this month order</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
<link rel="stylesheet" href="../lib/w3.css">
<link rel="stylesheet" href="../lib/CSS.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"
        integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Cake Order Chart"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: 

			<?php  echo json_encode($jsonArray);?>
			
		}
		]
	});
	chart.render();


	var canvas = $("#chartContainer .canvasjs-chart-canvas").get(0);
	var dataURL = canvas.toDataURL();
	//console.log(dataURL);

	$("#exportButton").click(function(){
	    var pdf = new jsPDF();
	    pdf.addImage(dataURL, 'JPEG', 0, 0);
	    pdf.save("download.pdf");
	});
}
</script>

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
	overflow-x:auto;
	border-radius:5px;
	min-height:200px;
}

div.second{
	background-color:white;
	overflow-x:auto;
	min-height:200px;
}

.cake-dropdown-container{
	 display: none;
    background-color: #262626;
}
/* Bootstrap 3 text input with search icon */

.has-search .form-control-feedback {
    right: initial;
    left: 0;
    color: #ccc;
}

.has-search .form-control {
    padding-right: 12px;
    padding-left: 34px;
}

</style>
</head>
<body>
	<div class="container-fluid">
	<div class="row content">
	<div class="col-sm-2 sidenav">
			<center><img src="../company logo/png logo.png" alt="Miss Candy Bakery" style="width:140px;height:100px;margin-top:20px;margin-bottom:10px;"></center>
			<h4 class="one">Miss Candy Bakery</h4><hr class="one">
			<ul class="menu">
				<li class="xactive"><a class="one" href="../order/createOrder.php"><?php spacing(3);?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Create Order</a></li>
			</ul>
			<button class="dropdown-btn"><i class="fas fa-birthday-cake" aria-hidden="true" style="margin-right:10px"></i>Cake Status<i class="fa fa-caret-down"></i>
			</button>
			<div class="cake-dropdown-container">
			<ul class="drop">
			<li class="xactive"><a class="one" href="../order/viewOrder.php?page=1&method=4&searchValue="><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Order List</a></li>
			<li class="xactive"><a class="one" href="../order/doneOrder.php?page=1&method=4&searchValue="><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Ready List</a></li>
			<li class="xactive"><a class="one" href="../order/deliveryOrder.php?page=1&method=4&searchValue="><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Delivery List</a></li>
			</ul>
			</div>
			<button class="dropdown-btn"><i class="fa fa-home" aria-hidden="true" style="margin-right:10px"></i>Stock<i class="fa fa-caret-down"></i>
			</button>
			
			<div class="cake-dropdown-container">
			<ul class="drop">
			<li class="xactive"><a class="one" href="../stock/display_stock?page=1.php"><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Stock List</a></li>
			<li class="xactive"><a class="one" href="../stock/stock.php"><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Add New Stock</a></li>
			<li class="xactive"><a class="one" href="../stock/history_item_used.php"><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>History Used List</a></li>
			<li class="xactive"><a class="one" href="../stock/stock_report.php"><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Sales Report</a></li>
			</ul>			
			</div>
			
			<ul class="menu">
				<li class="active"><a class="one" href="../chart/chart.php"><?php spacing(3);?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Report</a></li>
				<li class="xactive"><a class="one" href="../login/logout.php"><?php spacing(3);?><i class="fa fa-sign-out" aria-hidden="true" style="margin-right:10px"></i>Log out</a></li>
			</ul>
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

<div class="one">
<form action="chart.php" method="POST" enctype="multipart/form-data">
<fieldset style="margin-top:10px;border:2px solid silver;padding:10px;">
	<!--Enter text-->
	<div class="form-group ">
	

	<input type="text" name="Searchtype" placeholder="Search Cake Type">
	<input type="submit" name="cakeType" class="btn btn-primary" value="Search Cake Type">
	

	<input type="text" name="SearchCust" oninput='this.value=this.value.toUpperCase()' placeholder="Customer Name">
	<input type="submit" name="Cust_order" class="btn btn-primary" value="Search Customer Order">

	<!---->
	
	<input type="date" class="datepicker" name="orderDate">
	<input type="date" class="datepicker" name="dispatchDate">
	<input type="submit" name="checkDate" value="Check Date" class="btn btn-primary">
	

	<br><br>
	<input type="submit" name="highestOrder" value="Check Highest Order"class="btn btn-primary">
	<input type="submit" name="showChart" value="Show Chart" class="btn btn-primary">
	<button id="exportButton" class="btn btn-primary" type="button">Export as PDF</button>
	
</div>
</fieldset>
</form>


<h1 style="color: black "><?php echo $orderDate?>  <?php echo $dispatchDate?><?php echo $Searchtype?><?php echo $cust_Name?></h1>
<div class="col-sm-9">
<div id="chartContainer" style="height: 500px; width: 100%;"></div></div>
</div>


</div></div>
</body>
</html>