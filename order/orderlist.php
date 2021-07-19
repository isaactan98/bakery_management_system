<?php
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
	body {
		background-image: url("bread.png");
		background-repeat: no-repeat;
		height: 100%;
		background-position: center;
		background-size: cover;
	}

	.dropdown-container {
		display: none;
		background-color: #262626;
	}

	.cake-dropdown-container {
		display: none;
		background-color: #262626;
	}

	div.one {
		background-color: white;
		padding: 10px;
		margin-top: 15px;
		border-radius: 5px;
	}

	* {
		box-sizing: border-box;
	}

	input[type=text],
	input[type=number],
	input[type=date],
	select,
	textarea {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize: vertical;
	}

	select.time {
		width: 10%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize: vertical;
	}

	input[type=time].time {
		width: 30%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize: vertical;
	}

	label {
		padding: 12px 12px 12px 0;
		display: inline-block;
	}

	input[type=submit] {
		background-color: #4CAF50;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		margin-top: 20px;
	}

	input[type=submit]:hover {
		background-color: #45a049;
	}

	.container1 {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		margin-top: 15px;
	}

	.col-25 {
		float: left;
		width: 25%;
		margin-top: 6px;
	}

	.col-75 {
		float: left;
		width: 75%;
		margin-top: 6px;
	}

	/* Clear floats after the columns */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {

		.col-25,
		.col-75,
		input[type=submit] {
			width: 100%;
			margin-top: 0;
		}
	}
</style>
<script>
	function cakeTypeF(type) {
		if (type == "Other") {
			document.getElementById('typeInput').style.display = "block";
			document.getElementById('type').style.display = "none";
			document.getElementById('typeInput').style.display = "inline";
			document.getElementById('cakeTypeOther').value = type;
		} else {
			document.getElementById('typeInput').style.display = "none";
			document.getElementById('cakeTypeOther').value = type;
		}

	}

	function cakeFlavourF(flavour) {
		if (flavour == "Other") {
			document.getElementById('flavourInput').style.display = "block";
			document.getElementById('flavour').style.display = "none";
			document.getElementById('flavourInput').style.display = "inline";
			document.getElementById('cakeFlavourOther').value = flavour;
		} else {
			document.getElementById('flavourInput').style.display = "none";
			document.getElementById('cakeFlavourOther').value = flavour;
		}

	}

	function cakeFillingF(filling) {
		if (filling == "Other") {
			document.getElementById('fillingInput').style.display = "block";
			document.getElementById('filling').style.display = "none";
			document.getElementById('fillingInput').style.display = "inline";
			document.getElementById('cakeFillingOther').value = filling;
		} else {
			document.getElementById('fillingInput').style.display = "none";
			document.getElementById('cakeFillingOther').value = filling;
		}

	}

	function cakeShapeF(shape) {
		if (shape == "Other") {
			document.getElementById('shapeInput').style.display = "block";
			document.getElementById('shape').style.display = "none";
			document.getElementById('shapeInput').style.display = "inline";
			document.getElementById('cakeShapeOther').value = shape;
		} else {
			document.getElementById('shapeInput').style.display = "none";
			document.getElementById('cakeShapeOther').value = shape;
		}

	}

	function cakeSizeF(size) {
		if (size == "Other") {
			document.getElementById('sizeInput').style.display = "block";
			document.getElementById('size').style.display = "none";
			document.getElementById('sizeInput').style.display = "inline";
			document.getElementById('cakeSizeOther').value = size;
		} else {
			document.getElementById('sizeInput').style.display = "none";
			document.getElementById('cakeSizeOther').value = size;
		}

	}

	function cakeBoardF(board) {
		if (board == "Other") {
			document.getElementById('boardInput').style.display = "block";
			document.getElementById('board').style.display = "none";
			document.getElementById('boardInput').style.display = "inline";
			document.getElementById('cakeBoardOther').value = board;
		} else {
			document.getElementById('boardInput').style.display = "none";
			document.getElementById('cakeBoardOther').value = board;
		}

	}

	function hidefield() {
		document.getElementById('typeInput').style.display = 'none';
		document.getElementById('flavourInput').style.display = 'none';
		document.getElementById('fillingInput').style.display = 'none';
		document.getElementById('shapeInput').style.display = 'none';
		document.getElementById('sizeInput').style.display = 'none';
		document.getElementById('boardInput').style.display = 'none';
	}
</script>
<?php
include "../bakery_function.php";
bakeryHeader();
$custName = $_POST['cust_Name'];
$custHpn = $_POST['hpnNo'];
?>
<div class="container-fluid">
	<div class="row content">
		<!-- Side Bar -->
		<div class="col-sm-2 sidenav">
			<center><img src="../company logo/png logo.png" alt="Miss Candy Bakery" style="width:140px;height:100px;margin-top:20px;margin-bottom:10px;"></center>
			<h4 class="one">Miss Candy Bakery</h4>
			<hr class="one">
			<ul class="menu">
				<li class="active"><a class="one" href="createOrder.php"><?php spacing(3); ?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Create Order</a></li>
			</ul>
			<button class="dropdown-btn"><i class="fas fa-birthday-cake" aria-hidden="true" style="margin-right:10px"></i>Cake Status<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<ul class="drop">
					<li class="xactive"><a class="one" href="viewOrder.php?page=1&method=4&searchValue="><?php spacing(7); ?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Order List</a></li>
					<li class="xactive"><a class="one" href="doneOrder.php?page=1&method=4&searchValue="><?php spacing(7); ?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Ready List</a></li>
					<li class="xactive"><a class="one" href="deliveryOrder.php?page=1&method=4&searchValue="><?php spacing(7); ?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Delivery List</a></li>
				</ul>
			</div>

			<ul class="menu">
				<li class="xactive"><a class="one" href="../chart/chart.php"><?php spacing(3); ?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Report</a></li>
				<li class="xactive"><a class="one" href="../login/logout.php"><?php spacing(3); ?><i class="fa fa-sign-out" aria-hidden="true" style="margin-right:10px"></i>Log out</a></li>
			</ul>
		</div>
		<!--  -->
		<div class="col-sm-9">
			<div class="container1">

				<body onload="hidefield()">
					<!--body-->
					<form action="createOrder.php" id="orderForm" method="post">
						<!--form-->
						<?php
						echo "<input type='hidden' name='cust_Name' value='$custName'>
				<input type='hidden' name='hpnNo' value='$custHpn'>" ?>
						<div class="row">
							<div class="col-25">
								<label for="quantity">Cake Quantity</label>
							</div>
							<div class="col-75">
								<input type="number" id="quantity" name="cakeQuantity" placeholder="Cake Quantity" required>
							</div>
						</div>
						<!--	cakeType <select>	-->
						<div class="row">
							<div class="col-25">
								<label for="type">Cake Type</label>
							</div>
							<div class="col-75">
								<select id="type" name="cakeType" style="display:inline" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
									<option value="">- Please Select a Cake Type -</option>
									<option value="Sponge">Sponge</option>
									<option value="Butter">Butter</option>
									<option value="Cupcake">Cupcake</option>
									<option value="Tart">Tart</option>
									<option value="20 Cupcake">20 Cupcake</option>
									<option value="30 Cupcake">30 Cupcake</option>
									<option value="Mousse">Mousse</option>
									<option value="Cheese">Cheese</option>
									<option value="Other">Other</option>
								</select>
								<input type='hidden' name='otherCakeType' id='cakeTypeOther'> <!--	hidden cakeType	-->
								<div id="typeInput"><input type="text" name="otherCakeTypeInput"></div>
							</div>
						</div>
						<!--	cakeFlavour <select>	-->
						<div class="row">
							<div class="col-25">
								<label for="flavour">Cake Flavour</label>
							</div>
							<div class="col-75">
								<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" required>
									<option value="">- Please Select a Cake Flavour -</option>
									<option value="Original">Original</option>
									<option value="Chocolate">Chocolate</option>
									<option value="Matcha">Matcha</option>
									<option value="Dark Chocolate">Dark Chocolate</option>
									<option value="Red Velvet">Red Velvet</option>
									<option value="Other">Other</option>
								</select>
								<input type='hidden' name='otherCakeFlavour' id='cakeFlavourOther'> <!--	hidden cakeFlavour	-->
								<div id="flavourInput"><input type="text" name="otherCakeFlavourInput"></div>
							</div>
						</div>
						<!--	cakeFilling <select>	-->
						<div class="row">
							<div class="col-25">
								<label for="filling">Cake Filling</label>
							</div>
							<div class="col-75">
								<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" required>
									<option value="">- Please Select a Cake Filling -</option>
									<option value="Chocolate">Chocolate</option>
									<option value="Mocha">Mocha</option>
									<option value="Blueberry">Blueberry</option>
									<option value="Strawberry">Strawberry</option>
									<option value="Mango">Mango</option>
									<option value="Peach">Peach</option>
									<option value="Other">Other</option>
								</select>
								<input type='hidden' name='otherCakeFilling' id='cakeFillingOther'> <!--	hidden cakeFilling	-->
								<div id="fillingInput"><input type="text" name="otherCakeFillingInput"></div>
							</div>
						</div>
						<!--	cakeShape <select>	-->
						<div class="row">
							<div class="col-25">
								<label for="shape">Cake Shape</label>
							</div>
							<div class="col-75">
								<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" required>
									<option value="">- Please Select a Cake Shape -</option>
									<option value="Round">Round</option>
									<option value="Square">Square</option>
									<option value="Rectangle">Rectangle</option>
									<option value="Heart">Heart</option>
									<option value="Other">Other</option>
								</select>
								<input type='hidden' name='otherCakeShape' id='cakeShapeOther'> <!--	hidden cakeShape	-->
								<div id="shapeInput"><input type="text" name="otherCakeShapeInput"></div>
							</div>
						</div>
						<!--	cakeSize <select>	-->
						<div class="row">
							<div class="col-25">
								<label for="size">Cake Size</label>
							</div>
							<div class="col-75">
								<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" required>
									<option value="">- Please Select a Cake Size -</option>
									<option value="6 inch">6 inch</option>
									<option value="7 inch">7 inch</option>
									<option value="8 inch">8 inch</option>
									<option value="9 inch">9 inch</option>
									<option value="10 inch">10 inch</option>
									<option value="12 inch">12 inch</option>
									<option value="Other">Other</option>
								</select>
								<input type='hidden' name='otherCakeSize' id='cakeSizeOther'> <!--	hidden cakeShape	-->
								<div id="sizeInput"><input type="text" name="otherCakeSizeInput"></div>
							</div>
						</div>
						<!--	cakeBoard <select>	-->
						<div class="row">
							<div class="col-25">
								<label for="board">Cake Board</label>
							</div>
							<div class="col-75">
								<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" required>
									<option value="">- Please Select a Cake Board Size -</option>
									<option value="8 inch">8 inch</option>
									<option value="9 inch">9 inch</option>
									<option value="10 inch">10 inch</option>
									<option value="12 inch">12 inch</option>
									<option value="14 inch">14 inch</option>
									<option value="Other">Other</option>
								</select>
								<input type='hidden' name='otherCakeBoard' id='cakeBoardOther'> <!--	hidden cakeBoard	-->
								<div id="boardInput"><input type="text" name="otherCakeBoardInput"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="price">Cake Price</label>
							</div>
							<div class="col-75">
								<input type="text" id="price" name="cakePrice" placeholder="Price" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="Dorder">Order Date</label>
							</div>
							<div class="col-75">
								<input type="date" id="Dorder" name="orderDate" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="Ddispatch">Dispatch Date</label>
							</div>
							<div class="col-75">
								<input type="date" id="Ddispatch" name="dispatchDate" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="Dtime">Dispatch Time</label>
							</div>
							<div class="col-75">
								<input type="time" class="time" id="Dtime" name="dispatchTime" required>
								<select class="time" name="time">
									<option value="AM">AM</option>
									<option value="PM">PM</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="place">Dispatch Place</label>
							</div>
							<div class="col-75">
								<input type="text" id="place" name="dispatchPlace" placeholder="Place" required>
							</div>
						</div>
						<div class="row">
							<div class="col-25">
								<label for="note">Remark</label>
							</div>
							<div class="col-75">
								<textarea id="note" style='resize:none;height:150px;' name='remark' placeholder="Write something.."></textarea>
							</div>
						</div>
						<center>
							<div class="row">
								<input type="submit" name="submitOrder" value="Submit Order">
							</div>
						</center>
					</form>
				</body>
			</div>
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
<script>
	$("#orderForm").submit(function() {
		event.preventDefault();
		datas = new FormData(event.target);
		fromJson = Object.fromEntries(datas.entries());
		fromJson = JSON.stringify(fromJson);
		console.log(fromJson);

		$.ajax({
			type: "POST",
			url: "http://localhost/bms/api/createOrder",
			data: fromJson,
			dataType: "json",
			contentType: "application/json",

			success: function(data, status, xhr) {
				if (data.rowcount > 0) {
					alert("ok, successfully add data");
					window.location.href = "createOrder.php";
				} else {
					alert("fail to insert, " + data.errormessage);
				}
			},

			error: function(xhr, resp, text) {
				alert("error " + xhr + ", " + resp + ", " + text);
				console.log(xhr.responseText);
			},
		});
	});
</script>