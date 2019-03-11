<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json");

  include_once '../lib/Config.php';
  include_once '../lib/Database.php';
  include_once '../models/Location.php';
  include_once '../functions/stringfunc.php';

  //Creates an instance of the database and the connect function
  $database = new Database();
  $db = $database->connect();

  //An instance of our location model
  $location = new Location($db);

  //Gets the value for location
  	$location->name = isset($_GET['g']) ? $_GET['g'] : die();

	  $locationRes = $location->getLocation();

	  $count = $locationRes->rowCount();

	  if($count > 0) {

		  $result_arr = array();
		  $result_arr['Location'] = array();

		  while($row = $locationRes->fetch(PDO::FETCH_ASSOC)){
		  	extract($row);

		  	//Program to compare the input and the names of the city in the database
		  	$score = inputMatch($name, $location->name);

		  	$location_items = array(
		  		'id' => $id,
		  		'name' => $name,
		  		'latitude' => round($latitude, 2),
		  		'longitude' => round($longitude, 2),
		  		'score' => $score
		  	);

		  	array_push($result_arr['Location'], $location_items);
		  }

		  echo json_encode($result_arr);
	  } else {
	  	echo json_encode(array('message' => 'No location found'));
	  } 

  