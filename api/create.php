<?php 
  // Headers

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../config/Database.php';
  include_once '../models/User.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $user = new User($db);

  // Get raw posted data
  $data =  json_decode(file_get_contents("php://input"));
  // print_r($data);

  // $user->id= $data->id;                // id is auto generated
  $user->uname = $data->uname;
  $user->village = $data->village;
  $user->taluka = $data->taluka;
  $user->district = $data->district;
  $user->phoneno = $data->phoneno;
  $user->adhaarno = $data->adhaarno;
  $user->length = $data->length;
  $user->breadth = $data->breadth;
  $user->rate = $data->rate;
  $user->totalarea = $data->totalarea;
  $user->totalamount = $data->totalamount;
  $user->invoiceid = $data->invoiceid;

  // Create post
  if($user->create()) {
    echo json_encode(
      array('message' => 'Post Created')
    );
  } else {
    echo json_encode(
      array('message' => 'Post Not Created')
    );
  }

