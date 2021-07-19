<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'db.php';

$app = new \Slim\App();
$app->get('/', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello World!');
});

// -------------------------------------------------------------------------------------------------------
//  Order Api 
// -------------------------------------------------------------------------------------------------------
//Submit Order
$app->post('/createOrder', function (Request $request, Response $response, array $args) {
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE);
    //
    $name = $input['cust_Name'];
    $hpn = $input['hpnNo'];
    $cakeQuantity = $input['cakeQuantity'];
    $cakeType = $input['cakeType'];
    $cakeFlavour = $input['cakeFlavour'];
    $cakeFilling = $input['cakeFilling'];
    $cakeShape = $input['cakeShape'];
    $cakeSize = $input['cakeSize'];
    $cakeBoard = $input['cakeBoard'];
    $cakePrice = $input['cakePrice'];
    $orderDate = $input['orderDate'];
    $dispatchDate = $input['dispatchDate'];
    $time = $input['time'];
    $dispatchTime = $input['dispatchTime'];
    $dispatchPlace = $input['dispatchPlace'];
    $remark = $input['remark'];
    $status = "pending";

    try {
        $sql = "INSERT into product_order(cust_Name, cust_HPN, quantity, type, flavour, filling, shape, size, board, price, orderDate, dispatchDate, dispatchTime, dispatchDay, dispatchPlace, remark, status)
		VALUES(:name,:hpn,:cakeQuantity,:cakeType,:cakeFlavour,:cakeFilling,:cakeShape,:cakeSize,:cakeBoard,:cakePrice,:orderDate,:dispatchDate,:dispatchTime,:time,:dispatchPlace,:remark,:status)";

        $db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':hpn', $hpn);
        $stmt->bindValue(':cakeQuantity', $cakeQuantity);
        $stmt->bindValue(':cakeType', $cakeType);
        $stmt->bindValue(':cakeFlavour', $cakeFlavour);
        $stmt->bindValue(':cakeFilling', $cakeFilling);
        $stmt->bindValue(':cakeShape', $cakeShape);
        $stmt->bindValue(':cakeSize', $cakeSize);
        $stmt->bindValue(':cakeBoard', $cakeBoard);
        $stmt->bindValue(':cakePrice', $cakePrice);
        $stmt->bindValue(':orderDate', $orderDate);
        $stmt->bindValue(':dispatchDate', $dispatchDate);
        $stmt->bindValue(':time', $time);
        $stmt->bindValue(':dispatchTime', $dispatchTime);
        $stmt->bindValue(':dispatchPlace', $dispatchPlace);
        $stmt->bindValue(':remark', $remark);
        $stmt->bindValue(':status', $status);

        $stmt->execute();
        $count = $stmt->rowCount();
        $db = null;

        $data = array(
            "status" => "success",
            "rowcount" => $count
        );
        echo json_encode($data);
    } catch (PDOException $e) {
        $data = array(
            "status" => "fail"
        );
        echo json_encode($data);
        echo $e;
    }
});

// delete order
$app -> delete('/order/{id}', function(Request $request, Response $response, array $args){
    $id = $args['id'];

    try {
        $sql= "DELETE from product_order WHERE cust_ID= :id";

        $db = new db();
        $db = $db->connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    } catch (PDOException $e) {
        $data = array("status" => "fail");
        echo json_encode($data);
    }
    return $response;
});

// get all orders with order status (pending, done, deliver)
$app -> get('/orders/{status}', function(Request $request, Response $response, array $args){
    $status = $args['status'];
    
    $statusWhitelist = array("pending", "done", "deliver");

    if(!in_array($status, $statusWhitelist)) $status = $statusWhitelist[0];
    
    try {
        $sql= "SELECT * from product_order WHERE status='$status' ORDER BY cust_ID ASC";
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $orders = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        
        echo json_encode($orders);
    } catch (PDOException $e) {
        $data = array("status" => "fail");
        echo json_encode($data);
    }
    return $response;
});


//Update API
$app->put('/updateOrder/{id}', function (Request $request, Response $response, array $args) {
    $id = $args['id'];

    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE);

    $custName = $input['cust_Name'];
    $custHpn = $input['hpnNo'];
    $cakeQuantity = $input['cakeQuantity'];
    $cakeType = $input['cakeType'];
    $cakeFlavour = $input['cakeFlavour'];
    $cakeFilling = $input['cakeFilling'];
    $cakeShape = $input['cakeShape'];
    $cakeSize = $input['cakeSize'];
    $cakeBoard = $input['cakeBoard'];
    $cakePrice = $input['cakePrice'];
    $orderDate = $input['orderDate'];
    $dispatchDate = $input['dispatchDate'];
    $dispatchTime = $input['dispatchTime'];
    $dispatchDay = $input['time'];
    $dispatchPlace = $input['dispatchPlace'];
    $remark = $input['remark'];

    $sql = "UPDATE product_order SET cust_Name=:custName, cust_HPN=:custHpn, quantity=:cakeQuantity, type=:cakeType, flavour=:cakeFlavour, filling=:cakeFilling,
    shape=:cakeShape, size=:cakeSize, board=:cakeBoard, price=:cakePrice, orderDate=:orderDate, dispatchDate=:dispatchDate, 
    dispatchTime=:dispatchTime, dispatchDay=:dispatchDay, dispatchPlace=:dispatchPlace, remark=:remark WHERE cust_ID='$id'";

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':custName', $custName);
        $stmt->bindParam(':custHpn', $custHpn);
        $stmt->bindParam(':cakeQuantity', $cakeQuantity);
        $stmt->bindParam(':cakeType', $cakeType);
        $stmt->bindParam(':cakeFlavour', $cakeFlavour);
        $stmt->bindParam(':cakeFilling', $cakeFilling);
        $stmt->bindParam(':cakeShape', $cakeShape);
        $stmt->bindParam(':cakeSize', $cakeSize);
        $stmt->bindParam(':cakeBoard', $cakeBoard);
        $stmt->bindParam(':cakePrice', $cakePrice);
        $stmt->bindParam(':orderDate', $orderDate);
        $stmt->bindParam(':dispatchDate', $dispatchDate);
        $stmt->bindParam(':dispatchTime', $dispatchTime);
        $stmt->bindParam(':dispatchDay', $dispatchDay);
        $stmt->bindParam(':dispatchPlace', $dispatchPlace);
        $stmt->bindParam(':remark', $remark);

        $stmt->execute();
        $count = $stmt->rowCount();

        $data = array(
            "rowAffected" => $count,
            "status" => "success"
        );
        echo json_encode($data);
    } catch (PDOException $e) {
        $data = array(
            "status" => "fail"
        );
        echo json_encode($data);
    }
});



// -------------------------------------------------------------------------------------------------------
//  Chart Api 
// -------------------------------------------------------------------------------------------------------
$app->get('/chart', function (Request $request, Response $response, array $args) {
    $jsonArray = array();

    $sql = "SELECT type,sum(quantity) as totalQuantity FROM product_order group by type order by type";

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->query($sql);
        $jsArrayItem = array();
        while ($chart = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $jsArrayItem['label'] = $chart['type'];
            $jsArrayItem['y'] = intval($chart['totalQuantity']);

            array_push($jsonArray, $jsArrayItem);
        }

        echo json_encode($jsonArray, JSON_PRETTY_PRINT);
    } catch (PDOException $e) {
        $data = array(
            "status" => "fail"
        );
        echo json_encode($data);
    }
});

$app->get('/chart/highest', function (Request $request, Response $response, array $args) {
    $jsonArray = array();

    $sql = "SELECT type,sum(quantity) as totalQuantity from product_order group by type order by totalQuantity DESC";

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->query($sql);
        $jsArrayItem = array();
        while ($chart = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $jsArrayItem['label'] = $chart['type'];
            $jsArrayItem['y'] = intval($chart['totalQuantity']);

            array_push($jsonArray, $jsArrayItem);
        }

        echo json_encode($jsonArray, JSON_PRETTY_PRINT);
    } catch (PDOException $e) {
        $data = array(
            "status" => "fail"
        );
        echo json_encode($data);
    }
});

$app->get('/chart/details', function (Request $request, Response $response, array $args) {
    error_reporting(0);

    $datas = json_encode($request->getQueryParams('details', null));
    $jsonD = json_decode($datas, true);
    $cakeType = $jsonD['cakeType'];
    $custName = $jsonD['custName'];
    $startDate = $jsonD['start'];
    $endDate = $jsonD['end'];

    if ($cakeType != null && $custName == null && $startDate == null && $endDate == null) {
        $sql = "SELECT type,sum(quantity) as totalQuantity, MONTHNAME(orderDate) as monthlySale, Year(orderDate) as yearSales from product_order where type Like '$cakeType' group by monthlySale order by monthlySale";
    } else if ($cakeType == null && $custName != null && $startDate == null && $endDate == null) {
        $sql = "SELECT cust_Name,type,quantity from product_order where cust_Name like '$custName'";
    } else if ($cakeType == null && $custName == null && $startDate != null && $endDate != null) {
        $sql = "SELECT type,orderDate,sum(quantity) as totalQuantity from product_order where orderDate between '$startDate' and '$endDate' group by type";
    } else if ($cakeType != null && $custName != null && $startDate == null && $endDate == null) {
        $sql = "SELECT cust_Name,type,sum(quantity) as totalQuantity from product_order where type Like '$cakeType' AND cust_Name like '$custName'";
    } else if ($cakeType != null && $custName == null && $startDate != null && $endDate != null) {
        $sql = "SELECT type,orderDate,sum(quantity) as totalQuantity from product_order where type LIKE '$cakeType' and orderDate between '$startDate' and '$endDate' group by type";
    } else {
        $sql = "SELECT cust_Name,type,orderDate,sum(quantity) as totalQuantity from product_order where cust_Name like '$custName' and orderDate between '$startDate' and '$endDate' group by type";
    }

    $jsonArray = array();

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->query($sql);
        $jsArrayItem = array();
        while ($chart = $stmt->fetch(PDO::FETCH_ASSOC)) {

            if ($chart['totalQuantity'] == null) {
                $jsArrayItem['label'] = $chart['type'];
                $jsArrayItem['y'] = intval($chart['quantity']);
            } else if($chart['type']==null){
                $jsArrayItem['label'] = $chart['monthlySale'] . ' ' . $chart['yearSales'];
                $jsArrayItem['y'] = intval($chart['totalQuantity']);
            }
            else{
                $jsArrayItem['label'] = $chart['type'];
                $jsArrayItem['y'] = intval($chart['totalQuantity']);
            }

            array_push($jsonArray, $jsArrayItem);
        }

        echo json_encode($jsonArray, JSON_PRETTY_PRINT);
    } catch (PDOException $e) {
        $data = array(
            "status" => "fail"
        );
        echo json_encode($data);
    }
});
// -------------------------------------------------------------------------------------------------------

$app->run();
