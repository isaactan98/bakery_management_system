<?php

include "bakery_function.php";
bakeryHeaderIn();
if (isset($_POST['submitOrder'])) {
	submitOrder();
	header("refresh:1; url= order/viewOrder.php");
}

// if(isSet($_POST['create'])){
// 	create_stock();	
// 	header("refresh:1; url=stock/display_stock.php");
// }

// if(isSet($_POST['removeProduct'])){
// 	delete_stock();	
// 	header("refresh:1;url=stock/display_stock.php");
// }
