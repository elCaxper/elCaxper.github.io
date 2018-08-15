<?php
if (isset($_REQUEST['name'],$_REQUEST['email'])) {
      
    $myvar = array(1,2,3);
    console_log( $myvar ); // [1,2,3]

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
      
    // Set your email address where you want to receive emails. 
    $to = 'youremail@mail.com';
      
    $subject = 'Contact Request From Website';
    $headers = "From: ".$name." <".$email."> \r\n";
      
    $send_email = mail($to,$subject,$message,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}


function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

?>
