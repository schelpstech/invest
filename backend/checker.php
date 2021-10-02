<?php
    $query = array(
      "SECKEY" => "FLWSECK_TEST-c08364f6b70e72c086ca0cc07303a1c0-X",
      "txref" => "pref1948304"
  ); 
    //validate transaction ref
	
                
          
                  $data_string = json_encode($query);
                          
                  $ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify');                                                                      
                  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                              
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
          
                  $response = curl_exec($ch);
          
                  $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                  $header = substr($response, 0, $header_size);
                  $body = substr($response, $header_size);
          
                  curl_close($ch);
          
                  echo $response;