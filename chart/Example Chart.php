<?php
session_start();
$con = mysqli_connect("localhost","web2","web2","bakery_system");
if($con == false){
	echo "Connection Error";
}
else{
	$result = mysqli_query($con,"SELECT * FROM product_order ");

	//initialize the array to store the process data
	$jsonArray = array();
	//check if there is any data returned by the SQL query
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			$jsArrayItem = array();
			$newArray = array();
			
			$jsArrayItem['label'] = $row['type'];
			$jsArrayItem['y'] = intval($row['quantity']);

			array_push($jsonArray, $jsArrayItem);

			foreach ($jsonArray as $item)
			{
				if(isset($newArray[$item['label']])){
					$newArray[$item['label']] += $item['y'];
				}
				else{
					$newArray[$item['label']] = $item['y'];
				}
			}
		
		}

			//apend the above created object into the main array
		}
	}
	mysqli_close($con);
	echo json_encode($newArray);
	echo json_encode($jsonArray);



?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Chart for this month order</title>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 500px; width: 100%;"></div>
</body>
</html>