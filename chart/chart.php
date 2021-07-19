<?php
include "../bakery_function.php";
bakeryHeader();
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {
	header("Location: ../login/login.php");
}

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.js"></script>
	<script type="text/javascript">
		var setChart;

		function chart() {
			var chart = new CanvasJS.Chart("chartContainer", {
				title: {
					text: "Cake Order Chart"
				},
				data: [{
					// Change type to "doughnut", "line", "splineArea", etc.
					type: "column",
					dataPoints: setChart,

				}]
			});
			chart.render();


			var canvas = $("#chartContainer .canvasjs-chart-canvas").get(0);
			var dataURL = canvas.toDataURL();
			//console.log(dataURL);

			$("#exportButton").click(function() {
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

		div.one {
			background-color: white;
			padding: 10px;
			padding-top: 0px;
			padding-bottom: 20px;
			overflow-x: auto;
			border-radius: 5px;
			min-height: 200px;
		}

		div.second {
			background-color: white;
			overflow-x: auto;
			min-height: 200px;
		}

		.cake-dropdown-container {
			display: none;
			background-color: #262626;
		}

		.canvasjs-chart-canvas {
			height: 40rem;
			width: 100%;
		}

		.canvasjs-chart-credit {
			display: none !important;
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
				<h4 class="one">Miss Candy Bakery</h4>
				<hr class="one">
				<ul class="menu">
					<li class="xactive"><a class="one" href="../order/createOrder.php"><?php spacing(3); ?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Create Order</a></li>
				</ul>
				<button class="dropdown-btn"><i class="fas fa-birthday-cake" aria-hidden="true" style="margin-right:10px"></i>Cake Status<i class="fa fa-caret-down"></i>
				</button>
				<div class="cake-dropdown-container">
					<ul class="drop">
						<li class="xactive"><a class="one" href="../order/viewOrder.php?page=1&method=4&searchValue="><?php spacing(7); ?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Order List</a></li>
						<li class="xactive"><a class="one" href="../order/doneOrder.php?page=1&method=4&searchValue="><?php spacing(7); ?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Ready List</a></li>
						<li class="xactive"><a class="one" href="../order/deliveryOrder.php?page=1&method=4&searchValue="><?php spacing(7); ?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Delivery List</a></li>
					</ul>
				</div>

				<ul class="menu">
					<li class="active"><a class="one" href="../chart/chart.php"><?php spacing(3); ?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Report</a></li>
					<li class="xactive"><a class="one" href="../login/logout.php"><?php spacing(3); ?><i class="fa fa-sign-out" aria-hidden="true" style="margin-right:10px"></i>Log out</a></li>
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
				<form action="" method="POST" id="filterChart" enctype="multipart/form-data">
					<fieldset style="margin-top:10px;border:2px solid silver;padding:10px;">
						<!--Enter text-->
						<div class="form-group ">
							<input id="Searchtype" type="text" name="Searchtype" placeholder="Search Cake Type" required>

							<input id="SearchCust" type="text" name="SearchCust" oninput='this.value=this.value.toUpperCase()' placeholder="Customer Name">

							<input id="orderDate" type="date" class="datepicker" name="orderDate">
							<input id="dispatchDate" type="date" class="datepicker" name="dispatchDate">
							<input type="button" id="checkFilter" value="Check" class="btn btn-primary">

						</div>
					</fieldset>
				</form>
				<button id="highestOrder" class="btn btn-primary">Check Highest Order</button>
				<button id="showChart" class="btn btn-primary">Reset</button>
				<button id="exportButton" class="btn btn-primary" type="button">Export as PDF</button>

				<div class="col-sm-12">
					<div id="chartContainer" style="height: 65%;"></div>
				</div>
			</div>


		</div>
	</div>
</body>
<script>
	$(document).ready(function() {
		$.ajax({
			type: "GET",
			url: "http://localhost/bakery_management_system/api/chart",
			dataType: "json",
			success: function(data, status, xhr) {
				setChart = data;
				chart();
			},

			error: function() {
				alert(status);
			},
		});
		$("#showChart").click(function() {
			$.ajax({
				type: "GET",
				url: "http://localhost/bakery_management_system/api/chart",
				dataType: "json",
				success: function(data, status, xhr) {
					setChart = data;
					chart();
				},

				error: function() {
					alert(status);
				},
			});
		});
	});
	$("#highestOrder").on('click', function() {
		$.ajax({
			type: "GET",
			url: "http://localhost/bakery_management_system/api/chart/highest",
			dataType: "json",
			success: function(data, status, xhr) {
				setChart = data;
				chart();
			},

			error: function() {
				alert(status);
			},
		});
	});
	$("#checkFilter").click(function() {
		var ctype = $('#Searchtype').val();
		var cCust = $('#SearchCust').val();
		var end = $('#dispatchDate').val();
		var start = $('#orderDate').val();
		var url;
		if (ctype != "" && cCust == "" && start == "" && end == "") {
			url = "http://localhost/bakery_management_system/api/chart/details?cakeType=" + ctype;
		} else if (ctype == "" && cCust != "" && start == "" && end == "") {
			url = "http://localhost/bakery_management_system/api/chart/details?custName=" + cCust;
		}
		if (ctype == "" && cCust == "" && start != "" && end != "") {
			url = "http://localhost/bakery_management_system/api/chart/details?start=" + start + "&end=" + end;
		} else if (ctype != "" && cCust != "" && start == "" && end == "") {
			url = "http://localhost/bakery_management_system/api/chart/details?cakeType=" + ctype + "&custName=" + cCust;
		} else if (ctype != "" && cCust == "" && start != "" && end != "") {
			url = "http://localhost/bakery_management_system/api/chart/details?cakeType=" + ctype + "&start=" + start + "&end=" + end;
		} else {
			url = "http://localhost/bakery_management_system/api/chart/details?cakeType=" + ctype + "&custName" + cCust + "&start=" + start + "&end=" + end;
		}

		$.ajax({
			type: "GET",
			url: url,
			dataType: "json",
			success: function(data, status, xhr) {
				setChart = data;
				chart();
			},

			error: function(xhr) {
				alert(xhr.responseText);
				console.log(xhr.responseText);
			},
		});
	});
</script>

</html>