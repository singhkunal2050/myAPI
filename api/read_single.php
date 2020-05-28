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

  $result = $user->read_single();
  // $num = $result->rowCount();
  $num = mysqli_num_rows($result);

  // Check if any posts
  if($num > 0) {
    // Post array
    $users_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch_assoc()) {
      extract($row);
      // due to extract we dont have to call $row[id] and so on

      $user = array(
        'id' => $id,
        'uname' => $uname,
        'village' => $village,
        'taluka' => $taluka,
        'district' => $district,
        'phoneno' => $phoneno,
        'adhaarno' => $adhaarno
      );

      // Push to "data"
      array_push($users_arr, $user);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($users_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }
