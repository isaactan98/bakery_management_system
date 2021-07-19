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

	function redirect() {
		window.location = "viewOrder.php?page=1&method=4&searchValue=";
	}
</script>
<?php
include "../bakery_function.php";
bakeryHeader();
if (isset($_POST['updateOrder'])) {
	$custDetail = getMemberDetailPT();
}



?>
<style>
	div.one {
		background-color: white;
		padding: 10px;
		padding-top: 0px;
		padding-bottom: 20px;
		margin-top: 10;
		border-radius: 5px;
		min-height: 680px;
	}

	.inner {
		padding: 5rem;
	}
</style>

<body>
	<div class="col-sm-9">
		<div class="one">
			<h2>Customer Order Details</h2>
			<div class="inner">

				<?php

				$row = mysqli_fetch_assoc($custDetail);
				$custID = $row['cust_ID'];
				$custName = $row['cust_Name'];
				$custHpn = $row['cust_HPN'];
				$cakeQuantity = $row['quantity'];
				$cakeType = $row['type'];
				$cakeFlavour = $row['flavour'];
				$cakeFilling = $row['filling'];
				$cakeShape = $row['shape'];
				$cakeSize = $row['size'];
				$cakeBoard = $row['board'];
				$cakePrice = $row['price'];
				$orderDate = $row['orderDate'];
				$dispatchDate = $row['dispatchDate'];
				$dispatchTime = $row['dispatchTime'];
				$dispatchDay = $row['dispatchDay'];
				$dispatchPlace = $row['dispatchPlace'];
				$remark = $row['remark'];
				echo '<body onload="hidefield()"><div class="wrapper fadeInDown" id="formContent">'; // body
				echo '<form id="updateDetails" enctype="multipart/form-data" method="post">';  // form
				echo "<input type='hidden' name='cust_ID' value='$custID'>";
				echo 'Customer Name: <input type="text" name="cust_Name" value="' . $custName . '" required><br><br>';
				echo 'Customer HPN: <input type="text" name="hpnNo" value="' . $custHpn . '" required><br><br>';
				echo 'Cake Quantity: <input type="number" name="cakeQuantity" value="' . $cakeQuantity . '" required><br><br>';

				// cakeType <select>
				echo 'Cake Type: ';
				type($cakeType);
				echo "<input type='hidden' name='otherCakeType' id='cakeTypeOther' value=''>"; 			// hidden cakeType
				echo '<div id="typeInput"><input type="text" name="otherCakeTypeInput"></div>';

				// cakeFlavour <select>
				echo '<br><br>Cake Flavour: ';
				flavour($cakeFlavour);
				echo "<input type='hidden' name='otherCakeFlavour' id='cakeFlavourOther'>"; 			// hidden cakeFlavour
				echo '<div id="flavourInput"><input type="text" name="otherCakeFlavourInput"></div>';

				// cakeFilling <select>
				echo '<br><br>Cake Filling : ';
				filling($cakeFilling);
				echo "<input type='hidden' name='otherCakeFilling' id='cakeFillingOther'>"; 			// hidden cakeFilling
				echo '<div id="fillingInput"><input type="text" name="otherCakeFillingInput"></div>';

				// cakeShape <select>
				echo '<br><br>Cake Shape: ';
				shape($cakeShape);
				echo "<input type='hidden' name='otherCakeShape' id='cakeShapeOther'>"; 			// hidden cakeShape
				echo '<div id="shapeInput"><input type="text" name="otherCakeShapeInput"></div>';

				// cakeSize <select>
				echo '<br><br>Cake Size: ';
				size($cakeSize);
				echo "<input type='hidden' name='otherCakeSize' id='cakeSizeOther'>"; 			// hidden cakeShape
				echo '<div id="sizeInput"><input type="text" name="otherCakeSizeInput"></div>';

				// cakeBoard <select>
				echo '<br><br>Cake Board: ';
				board($cakeBoard);
				echo "<input type='hidden' name='otherCakeBoard' id='cakeBoardOther'>"; 			// hidden cakeBoard
				echo '<div id="boardInput"><input type="text" name="otherCakeBoardInput"></div>';
				echo '<br><br>Cake Price: <input type="text" name="cakePrice" value="' . $cakePrice . '" required><br><br>';
				echo 'Order Date: <input type="date" name="orderDate" value="' . $orderDate . '" required><br><br>';
				echo 'Dispatch Date: <input type="date" name="dispatchDate" value="' . $dispatchDate . '" required><br><br>';
				echo 'Dispatch Time: <input type="time" name="dispatchTime" value="' . $dispatchTime . '" required>';
				day($dispatchDay); // AM/PM
				echo 'Dispatch Place: <input type= "text" name= "dispatchPlace" value="' . $dispatchPlace . '" required><br><br>';
				echo "Remark: <br><textarea style='resize:none' name='remark' rows='10'cols='30' >$remark</textarea><br><br>";
				echo '<input type="button" name="backToView" onclick="redirect()" value="Back">';
				echo '<input type="submit" name="updateDetail" value="UPDATE">';
				echo '</form>';
				echo '</body></div>';
				?>
				<?php
				function type($type)
				{		// get cake type
					if ($type == "Sponge") {
						echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Type -</option>
		<option value="Sponge" selected>Sponge</option>
		<option value="Butter">Butter</option>
		<option value="Cupcake">Cupcake</option>
		<option value="Tart">Tart</option>
		<option value="20 Cupcake">20 Cupcake</option>
		<option value="30 Cupcake">30 Cupcake</option>
		<option value="Mousse">Mousse</option>
		<option value="Cheese">Cheese</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($type == "Butter") {
						echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Type -</option>
		<option value="Sponge">Sponge</option>
		<option value="Butter" selected>Butter</option>
		<option value="Cupcake">Cupcake</option>
		<option value="Tart">Tart</option>
		<option value="20 Cupcake">20 Cupcake</option>
		<option value="30 Cupcake">30 Cupcake</option>
		<option value="Mousse">Mousse</option>
		<option value="Cheese">Cheese</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($type == "Cupcake") {
						echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Type -</option>
		<option value="Sponge">Sponge</option>
		<option value="Butter">Butter</option>
		<option value="Cupcake" selected>Cupcake</option>
		<option value="Tart">Tart</option>
		<option value="20 Cupcake">20 Cupcake</option>
		<option value="30 Cupcake">30 Cupcake</option>
		<option value="Mousse">Mousse</option>
		<option value="Cheese">Cheese</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($type == "Tart") {
						echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Type -</option>
		<option value="Sponge">Sponge</option>
		<option value="Butter">Butter</option>
		<option value="Cupcake">Cupcake</option>
		<option value="Tart" selected>Tart</option>
		<option value="20 Cupcake">20 Cupcake</option>
		<option value="30 Cupcake">30 Cupcake</option>
		<option value="Mousse">Mousse</option>
		<option value="Cheese">Cheese</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($type == "20 Cupcake") {
						echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Type -</option>
		<option value="Sponge">Sponge</option>
		<option value="Butter">Butter</option>
		<option value="Cupcake">Cupcake</option>
		<option value="Tart">Tart</option>
		<option value="20 Cupcake" selected>20 Cupcake</option>
		<option value="30 Cupcake">30 Cupcake</option>
		<option value="Mousse">Mousse</option>
		<option value="Cheese">Cheese</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($type == "30 Cupcake") {
						echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Type -</option>
		<option value="Sponge">Sponge</option>
		<option value="Butter">Butter</option>
		<option value="Cupcake">Cupcake</option>
		<option value="Tart">Tart</option>
		<option value="20 Cupcake">20 Cupcake</option>
		<option value="30 Cupcake" selected>30 Cupcake</option>
		<option value="Mousse">Mousse</option>
		<option value="Cheese">Cheese</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($type == "Mousse") {
						echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Type -</option>
		<option value="Sponge">Sponge</option>
		<option value="Butter">>Butter</option>
		<option value="Cupcake">Cupcake</option>
		<option value="Tart">Tart</option>
		<option value="20 Cupcake">20 Cupcake</option>
		<option value="30 Cupcake">30 Cupcake</option>
		<option value="Mousse" selected>Mousse</option>
		<option value="Cheese">Cheese</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($type == "Cheese") {
						echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Type -</option>
		<option value="Sponge">Sponge</option>
		<option value="Butter">>Butter</option>
		<option value="Cupcake">Cupcake</option>
		<option value="Tart">Tart</option>
		<option value="20 Cupcake">20 Cupcake</option>
		<option value="30 Cupcake">30 Cupcake</option>
		<option value="Mousse">Mousse</option>
		<option value="Cheese" selected>Cheese</option>
		<option value="Other">Other</option>
		</select>';
					} else {
						echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Type -</option>
		<option value="Sponge">Sponge</option>
		<option value="Butter">Butter</option>
		<option value="Cupcake">Cupcake</option>
		<option value="Tart">Tart</option>
		<option value="20 Cupcake">20 Cupcake</option>
		<option value="30 Cupcake">30 Cupcake</option>
		<option value="Mousse">Mousse</option>
		<option value="Cheese">Cheese</option>
		<option value="Other">Other</option>';
						echo "<option value='$type' selected>$type</option>
		</select>";
					}
				}

				function flavour($flavour)
				{
					if ($flavour == "Original") {
						echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original" selected>Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($flavour == "Chocolate") {
						echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate" selected>Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($flavour == "Matcha") {
						echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha" selected>Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($flavour == "Dark Chocolate") {
						echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate" selected>Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>
		</select><br><br>';
					} else if ($flavour == "Red Velvet") {
						echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet" selected>Red Velvet</option>
		<option value="Other">Other</option>
		</select>';
					} else {
						echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>';
						echo "<option value='$flavour' selected>$flavour</option>
		</select>";
					}
				}

				function filling($filling)
				{
					if ($filling == "Chocolate") {
						echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate" selected>Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($filling == "Mocha") {
						echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha" selected>Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($filling == "Blueberry") {
						echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry" selected>Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($filling == "Strawberry") {
						echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry" selected>Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($filling == "Mango") {
						echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango" selected>Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($filling == "Peach") {
						echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach" selected>Peach</option>
		<option value="Other">Other</option>
		</select>';
					} else {
						echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>';
						echo "<option value='$filling' selected>$filling</option>
		</select>";
					}
				}

				function shape($shape)
				{
					if ($shape == "Round") {
						echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round" selected>Round</option>
		<option value="Square">Square</option>
		<option value="Rectangle">Rectangle</option>
		<option value="Heart">Heart</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($shape == "Square") {
						echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round">Round</option>
		<option value="Square" selected>Square</option>
		<option value="Rectangle">Rectangle</option>
		<option value="Heart">Heart</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($shape == "Rectangle") {
						echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round">Round</option>
		<option value="Square">Square</option>
		<option value="Rectangle" selected>Rectangle</option>
		<option value="Heart">Heart</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($shape == "Heart") {
						echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round">Round</option>
		<option value="Square">Square</option>
		<option value="Rectangle">Rectangle</option>
		<option value="Heart" selected>Heart</option>
		<option value="Other">Other</option>
		</select>';
					} else {
						echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round">Round</option>
		<option value="Square">Square</option>
		<option value="Rectangle">Rectangle</option>
		<option value="Heart">Heart</option>
		<option value="Other">Other</option>';
						echo "<option value='$shape' selected>$shape</option>
		</select>";
					}
				}

				function size($size)
				{
					if ($size == "6 inch") {
						echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch" selected>6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($size == "7 inch") {
						echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch" selected>7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($size == "8 inch") {
						echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch" selected>8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($size == "9 inch") {
						echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch" selected>9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($size == "10 inch") {
						echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch" selected>10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($size == "12 inch") {
						echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch" selected>12 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else {
						echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch" selected>7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>';
						echo "<option value='$size' selected>$size</option>
		</select>";
					}
				}

				function board($board)
				{
					if ($board == "8 inch") {
						echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch" selected>8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($board == "9 inch") {
						echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch" selected>9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($board == "10 inch") {
						echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch" selected>10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($board == "12 inch") {
						echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch" selected>12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else if ($board == "14 inch") {
						echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch" selected>14 inch</option>
		<option value="Other">Other</option>
		</select>';
					} else {
						echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" required>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>';
						echo "<option value='$board' selected>$board</option>
		</select>";
					}
				}

				function day($day)
				{
					if ($day == "AM")
						echo '<select name="time" required><option value="AM" selected>AM</option><option value="PM">PM</option></select><br><br>';
					else
						echo '<select name="time" required><option value="AM">AM</option><option value="PM" selected>PM</option></select><br><br>';
				}
				?>

				<script>
					$("#updateDetails").submit(function(event) {
						event.preventDefault();
						var urlstring;
						datas = new FormData(event.target);
						fromJson = Object.fromEntries(datas.entries());
						urlstring = fromJson['cust_ID'];
						fromJson = JSON.stringify(fromJson);
						console.log(fromJson);
						
						$.ajax({
							type: "PUT",
							url: "http://localhost/bms/api/updateOrder/" + urlstring,
							data: fromJson,
							dataType: "json",
							contentType: "application/json",

							success: function(data, status, xhr) {
								if (status == 'success') {
									alert("ok, successfully add data");
									window.location.href = "viewOrder.php?page=1&method=4&searchValue=";
								} else {
									alert(status);
									alert("fail to insert, " + data.errormessage);
								}
							},

							error: function(xhr, resp, text) {
								alert("error " + xhr.error + ", " + resp + ", " + text);
								console.log(xhr.responseText);
								console.log(resp);
								console.log(text);
							},
						});
					});
				</script>