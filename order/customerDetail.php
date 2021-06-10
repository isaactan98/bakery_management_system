<?php
include "../bakery_function.php";
bakeryHeader();
if(isSet($_POST['orderDetail'])){
	$custDetail= getMemberDetailPT();
}
$page= $_GET['page'];
$method= $_GET['method'];
$searchValue= $_GET['searchValue'];
$row= mysqli_fetch_assoc($custDetail);
$custName= $row['cust_Name'];
$custHpn= $row['cust_HPN'];
$cakeQuantity= $row['quantity'];
$cakeType= $row['type'];
$cakeFlavour= $row['flavour'];
$cakeFilling= $row['filling'];
$cakeShape= $row['shape'];
$cakeSize= $row['size'];
$cakeBoard= $row['board'];
$cakePrice= $row['price'];
$orderDate= $row['orderDate']; 
$dispatchDate= $row['dispatchDate'];
$dispatchTime= $row['dispatchTime'];
$dispatchDay= $row['dispatchDay'];
$dispatchPlace= $row['dispatchPlace'];
$remark= $row['remark'];

echo 'Customer Name: <input type="text" name="cust_Name" value="'.$custName.'" disabled><br><br>';
echo 'Customer HPN: <input type="text" name="hpnNo" value="'.$custHpn.'" disabled><br><br>';
echo 'Cake Quantity: <input type="number" name="cakeQuantity" value="'.$cakeQuantity.'" disabled><br><br>';

// cakeType <select>
echo 'Cake Type: '; type($cakeType);																
// cakeFlavour <select>
echo 'Cake Flavour: '; flavour($cakeFlavour);  
// cakeFilling <select>
echo 'Cake Filling : '; filling($cakeFilling);  
// cakeShape <select>
echo 'Cake Shape: '; shape($cakeShape);  
// cakeSize <select>
echo 'Cake Size: '; size($cakeSize);  
// cakeBoard <select>
echo 'Cake Board: '; board($cakeBoard);  

echo 'Cake Price: <input type="text" name="cakePrice" value="'.$cakePrice.'" disabled><br><br>';
echo 'Order Date: <input type="date" name="orderDate" value="'.$orderDate.'" disabled><br><br>';
echo 'Dispatch Date: <input type="date" name="dispatchDate" value="'.$dispatchDate.'" disabled><br><br>';
echo 'Dispatch Time: <input type="time" name="dispatchTime" value="'.$dispatchTime.'" disabled>';
day($dispatchDay); // AM/PM
echo 'Dispatch Place: <input type= "text" name= "dispatchPlace" value="'.$dispatchPlace.'" disabled><br><br>';
echo $remark;
echo "Remark: <br><textarea style='resize:none' name='remark' rows='10'cols='30' disabled>$remark</textarea><br><br>";
echo "<form action='viewOrder.php?page=$page&method=$method&searchValue=$searchValue' method='post'><input type='submit' value='Back'></form>";
?>
<?php
function type($type){		// get cake type
	if($type=="Sponge"){
		echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" disabled>
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
		</select><br><br>'; 			
	}
	else if($type=="Butter"){
		echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" disabled>
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
		</select><br><br>'; 			
	}
	else if($type=="Cupcake"){
		echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" disabled>
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
		</select><br><br>'; 			
	}
	else if($type=="Tart"){
		echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" disabled>
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
		</select><br><br>'; 			
	}
	else if($type=="20 Cupcake"){
		echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" disabled>
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
		</select><br><br>'; 			
	}
	else if($type=="30 Cupcake"){
		echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" disabled>
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
		</select><br><br>'; 			
	}
	else if($type=="Mousse"){
		echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" disabled>
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
		</select><br>'; 			
	}
	else if($type=="Cheese"){
		echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" disabled>
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
		</select><br><br>'; 			
	}
	else{
		echo '<select class="form-control" id="type" name="cakeType" onchange="cakeTypeF(this.options[this.selectedIndex].value)" disabled>
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
		</select><br><br>"; 
	}
}

function flavour($flavour){
	if($flavour=="Original"){
		echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original" selected>Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($flavour=="Chocolate"){
		echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate" selected>Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($flavour=="Matcha"){
		echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha" selected>Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($flavour=="Dark Chocolate"){
		echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate" selected>Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($flavour=="Red Velvet"){
		echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet" selected>Red Velvet</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else{
		echo '<select name="cakeFlavour" id="flavour" onchange="cakeFlavourF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Flavour -</option>
		<option value="Original">Original</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Matcha">Matcha</option>
		<option value="Dark Chocolate">Dark Chocolate</option>
		<option value="Red Velvet">Red Velvet</option>
		<option value="Other">Other</option>';
		echo "<option value='$flavour' selected>$flavour</option>
		</select><br><br>";
	}
}

function filling($filling){
	if($filling=="Chocolate"){
		echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate" selected>Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($filling=="Mocha"){
		echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha" selected>Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select><br>';
	}
	else if($filling=="Blueberry"){
		echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry" selected>Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($filling=="Strawberry"){
		echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry" selected>Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($filling=="Mango"){
		echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango" selected>Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($filling=="Peach"){
		echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach" selected>Peach</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else{
		echo '<select name="cakeFilling" id="filling" onchange="cakeFillingF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Filling -</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Mocha">Mocha</option>
		<option value="Blueberry">Blueberry</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mango">Mango</option>
		<option value="Peach">Peach</option>
		<option value="Other">Other</option>';
		echo "<option value='$filling' selected>$filling</option>
		</select><br><br>";
	}
}

function shape($shape){
	if($shape=="Round"){
		echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round" selected>Round</option>
		<option value="Square">Square</option>
		<option value="Rectangle">Rectangle</option>
		<option value="Heart">Heart</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($shape=="Square"){
		echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round">Round</option>
		<option value="Square" selected>Square</option>
		<option value="Rectangle">Rectangle</option>
		<option value="Heart">Heart</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($shape=="Rectangle"){
		echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round">Round</option>
		<option value="Square">Square</option>
		<option value="Rectangle" selected>Rectangle</option>
		<option value="Heart">Heart</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($shape=="Heart"){
		echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round">Round</option>
		<option value="Square">Square</option>
		<option value="Rectangle">Rectangle</option>
		<option value="Heart" selected>Heart</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else{
		echo '<select name="cakeShape" id="shape" onchange="cakeShapeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Shape -</option>
		<option value="Round">Round</option>
		<option value="Square">Square</option>
		<option value="Rectangle">Rectangle</option>
		<option value="Heart">Heart</option>
		<option value="Other">Other</option>';
		echo "<option value='$shape' selected>$shape</option>
		</select><br><br>";
	}
}

function size($size){
	if($size=="6 inch"){
		echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch" selected>6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';	
	}
	else if($size=="7 inch"){
		echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch" selected>7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($size=="8 inch"){
		echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch" selected>8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($size=="9 inch"){
		echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch" selected>9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($size=="10 inch"){
		echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch" selected>10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($size=="12 inch"){
		echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch">7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch" selected>12 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else{
		echo '<select name="cakeSize" id="size" onchange="cakeSizeF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Size -</option>
		<option value="6 inch">6 inch</option>
		<option value="7 inch" selected>7 inch</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="Other">Other</option>';
		echo "<option value='$size' selected>$size</option>
		</select><br><br>";
	}
}

function board($board){
	if($board=="8 inch"){
		echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch" selected>8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($board=="9 inch"){
		echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch" selected>9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($board=="10 inch"){
		echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch" selected>10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($board=="12 inch"){
		echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch" selected>12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else if($board=="14 inch"){
		echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch" selected>14 inch</option>
		<option value="Other">Other</option>
		</select><br><br>';
	}
	else{
		echo '<select name="cakeBoard" id="board" onchange="cakeBoardF(this.options[this.selectedIndex].value)" disabled>
		<option value="">- Please Select a Cake Board Size -</option>
		<option value="8 inch">8 inch</option>
		<option value="9 inch">9 inch</option>
		<option value="10 inch">10 inch</option>
		<option value="12 inch">12 inch</option>
		<option value="14 inch">14 inch</option>
		<option value="Other">Other</option>';
		echo "<option value='$board' selected>$board</option>
		</select><br><br>";
	}
}

function day($day){
	if($day=="AM")
		echo '<select name="time" disabled><option value="AM" selected>AM</option><option value="PM">PM</option></select><br><br>';
	else
		echo '<select name="time" disabled><option value="AM">AM</option><option value="PM" selected>PM</option></select><br><br>';
}
?>
