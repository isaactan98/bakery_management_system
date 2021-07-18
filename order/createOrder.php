<?php
include "../bakery_function.php";
session_start();
if (!(isset($_SESSION['login_user']) && $_SESSION['login_user'] != '')) {
	header ("Location: ../login/login.php");
}
if(isSet($_POST['submitOrder'])){
	//submitOrder();
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
body{
		background-image : url("bread.png");
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

.wrapper{
	display:flex;
	align-items: center; 
	flex-direction:column;
	justify-content: center; 
	padding:50px;
}

#formContent{ 
      border-radius: 10px 10px 10px 10px; 
      background: #181919; 
      padding: 50px; 
      width: 90%; 
      max-width: 450px; 
      position: relative; 
      padding: 0px;  
      text-align: center; 
	  color:white;
	  background:rgba(0,0,0,0.8);
}

input[type=text]:focus{
	background-color:#fff;
	border-bottom:5px solid #48a8f2;
}

 input[type=text] { 
 	background-color: #f6f6f6; 
 	border: none; 
 	color: #0d0d0d; 
 	padding: 15px 32px; 
 	text-align: center; 
 	text-decoration: none;
	
	display: inline-block; 
	font-size: 16px; 
	margin: 5px; 
	width: 85%; 
	border: 2px solid #f6f6f6; 
	-webkit-transition: all 0.5s ease-in-out; 
	-moz-transition: all 0.5s ease-in-out; 
	-ms-transition: all 0.5s ease-in-out; 
	-o-transition: all 0.5s ease-in-out; 
	transition: all 0.5s ease-in-out; 
	-webkit-border-radius: 5px 5px 5px 5px; 
	border-radius: 5px 5px 5px 5px; 
	}
	
input[type=submit]{
 	background-color: #bc7d1c; 
 	border: none; 
 	color: white; 
 	padding: 15px 80px; 
 	text-align: center; 
 	text-decoration: none; 
 	display: inline-block; 
 	text-transform: uppercase; 
 	font-size: 15px;  
 	border-radius: 5px 5px 5px 5px; 
 	margin: 8px 20px 10px 20px; 
}

input[type=submit]:hover{
 	background-color: #e09521; 
}

/* Simple CSS3 Fade-in Animation */ 
   @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
   @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } } 
   @keyframes fadeIn { from { opacity:0; } to { opacity:1; } } 

.fadeIn { 
opacity:0; 
-webkit-animation:fadeIn ease-in 1; 
-moz-animation:fadeIn ease-in 1; 
animation:fadeIn ease-in 1; 
-webkit-animation-fill-mode:forwards; 
-moz-animation-fill-mode:forwards; 
animation-fill-mode:forwards; 
-webkit-animation-duration:1s; 
-moz-animation-duration:1s; 
animation-duration:1s; 
} 

.fadeIn.first { 
-webkit-animation-delay: 0.1s; 
-moz-animation-delay: 0.1; 
animation-delay: 0.1s; 
} 
</style>
<style>

</style>
<?php
bakeryHeader();
?>
<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-2 sidenav">
			<center><img src="../company logo/png logo.png" alt="Miss Candy Bakery" style="width:140px;height:100px;margin-top:20px;margin-bottom:10px;"></center>
			<h4 class="one">Miss Candy Bakery</h4><hr class="one">
			<ul class="menu">
				<li class="active"><a class="one" href="createOrder.php"><?php spacing(3);?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Create Order</a></li>
			</ul>
			<button class="dropdown-btn"><i class="fas fa-birthday-cake" aria-hidden="true" style="margin-right:10px"></i>Cake Status<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
			<ul class="drop">
			<li class="xactive"><a class="one" href="viewOrder.php?page=1&method=4&searchValue="><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Order List</a></li>
			<li class="xactive"><a class="one" href="doneOrder.php?page=1&method=4&searchValue="><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Ready List</a></li>
			<li class="xactive"><a class="one" href="deliveryOrder.php?page=1&method=4&searchValue="><?php spacing(7);?><i class="fas fa-caret-right" aria-hidden="true" style="margin-right:10px"></i>Delivery List</a></li>
			</ul>
			</div>
					
			<ul class="menu">
				<li class="xactive"><a class="one" href="../chart/chart.php"><?php spacing(3);?><i class="far fa-list-alt" aria-hidden="true" style="margin-right:10px"></i>Report</a></li>
				<li class="xactive"><a class="one" href="../login/logout.php"><?php spacing(3);?><i class="fa fa-sign-out" aria-hidden="true" style="margin-right:10px"></i>Log out</a></li>
			</ul>
		</div>
		<div class="col-sm-9">
			<?php
			if(isSet($_POST['nextOrder'])){
				//submitOrder();
				$custName= $_POST['cust_Name'];
				$custHpn= $_POST['hpnNo'];
			?>
				<div class="wrapper fadeIn first"><div id="formContent" >
				<h2>Register Customer</h2><br>
				
				<form action="orderlist.php" enctype="multipart/form-data" method="post">
				<?php
				echo "<input type='text' name='cust_Name' placeholder='Customer Name' value='$custName' title='Insert Customer Name' oninput='this.value=this.value.toUpperCase()' required>
				<input type='text' name='hpnNo' pattern='0-9]{9,11}' title='9 - 11 digits' value='$custHpn' placeholder='Phone Number (9-11 digits)' required>"?>
				<input type="submit" name="OrderForm" value="Create Order">
				</div></div>
			<?php
			}
			else{
			?>
				<div class="wrapper fadeIn first"><div id="formContent" >
				<h2>Register Customer</h2><br>
	
				<form action="orderlist.php" method="post">
				<input type="text" name= "cust_Name" placeholder="Customer Name" title="Insert Customer Name" oninput="this.value=this.value.toUpperCase()" required>
				<input type="text" pattern="[0-9]{9,11}" title="Phone Number(9 - 11 digits)" name="hpnNo" placeholder="Phone Number (9-11 digits)" required>
				<input type="submit" name="OrderForm" value="Create Order">
				</form>
				</div></div>
				
			<?php
			}?>
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