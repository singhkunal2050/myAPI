<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

if(isset($_GET['phoneno']))
{
    $phoneno = $_GET['phoneno'];
    $otp = rand(10000,99999);
    
    $field = array(
        "sender_id" => "FSTSMS",
        "language" => "english",
        "route" => "qt",
        "numbers" => "$phoneno",
        "message" => "28363",                         // message tempalate id 
        "variables" => "{#AA#}",
        "variables_values" => "$otp"
    );
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($field),
      CURLOPT_HTTPHEADER => array(
        "authorization: CM9PjNmqh6gr5KAT8sXZeO0wpBxtavcIW3JdVlQnUELHSDo2f4jsge25yCdGiSWvk0MubxRzoJI43qfY",
        "cache-control: no-cache",
        "accept: */*",
        "content-type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo(json_encode(array("error"=>"Internal curl error")));
    } else {
      // echo($response);
      echo(json_encode(array("otp"=>$otp)));
    }
}
else{
  echo(json_encode(array("error"=>"No `phoneno` given")));
}
?>