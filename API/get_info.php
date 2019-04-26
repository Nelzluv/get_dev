<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");

  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //assigning variables to post objects
    $customer_name = trim($_POST['customer_name']);
    $parcel_name = trim($_POST['parcel_name']);
    $parcel_weight = trim($_POST['parcel_weight']);
    $distance = trim($_POST['distance']);
    $city_from = trim($_POST['city_from']);
    $city_to = trim($_POST['city_to']);

    //Check if variables are empty
    notEmpty($customer_name, "Please type in a customer name");
    notEmpty($parcel_name, "Please type in customer name");
    notEmpty($parcel_weight, "Please type a parcel weight ");
    notEmpty($distance, "Please type in distance");
    notEmpty($city_from, "Please type in the city the parcel is coming from ");
    notEmpty($city_to, "Please type in the city the parcel is going to");

    //fake formular for calculating shipment cost
    $cost = $parcel_weight * $distance / 60;

    $parcel_info = array(
        'customer_name' => $customer_name,
        'parcel_name' => $parcel_name,
        'parcel_weight' => $parcel_weight,
        'cost' => $parcel_weight,
        'distance' => $distance,
        'city_from' => $city_from,
        'city_to' => $city_to, 
        'cost' => $cost."$"
    );

    //declaration of array
    $result_arr['Parcel'] = $parcel_info;

    //array_push($result_arr['Parcel'], $parcel_info);
    echo json_encode($result_arr, JSON_PRETTY_PRINT);
  }

//function to check variables if empty
  function notEmpty($parameter, $error = null){
    if(empty($parameter)){
        echo $error."<br>";
        exit();
    } else {
        return true;
    }
}

  