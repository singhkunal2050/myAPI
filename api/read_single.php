<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../config/Database.php';
  include_once '../models/User.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  $user = new User($db);

  // check if id is given in url
  $user->id = isset($_GET['id']) ? $_GET['id'] : die("No id given");

  // id set for read single 
  $user->read_single();
  
      $user1 = array(
        'id' => $user->id,
        'uname' => $user->uname,
        'village' => $user->village,
        'taluka' => $user->taluka,
        'district' => $user->district,
        'phoneno' => $user->phoneno,
        'adhaarno' => $user->adhaarno
      );

   echo json_encode($user1);



  ?>