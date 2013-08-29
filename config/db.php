<?php
  $con = mysqli_connect("localhost","onezeral_tts","shaadi","onezeral_vivahplace");
  // Check connection
  if (mysqli_connect_errno($con))
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
