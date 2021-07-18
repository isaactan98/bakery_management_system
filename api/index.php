<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'db.php';

$app = new \Slim\App();
$app->get('/', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello World!');
});

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
		VALUES(:name,:hpn,:cakeQuantity,:cakeType,:cakeFlavour,:cakeFilling,:cakeShape,:cakeSize,:cakeBoard,:cakePrice,:orderDate,:dispatchDate,:time,:dispatchTime,:dispatchPlace,:remark,:status)";

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



//Chart Display 
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
        while($chart = $stmt->fetch(PDO::FETCH_ASSOC)){

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


$app->run();
