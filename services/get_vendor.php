<?php
  ini_set('display_errors', 1);
  ini_set('log_errors', 1);
  ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
  include '../config/db.php';
  //get vendor by their id
  function getVendor($id)
  {
    global $con;
    $query = 'select * from vendors where id = "$id" ';
    $result = mysqli_query($con,$query);
    
    if (!$result) 
      {
	      $message = 'ERROR:' . mysql_error();
	      return $message;
      }

    else
    {
	    $rows = array();
      while($row = mysqli_fetch_assoc($result)) 
      {
        $rows[] = $row;
      }
      print json_encode($rows);
    }
  }

  getVendor(1);
    
?>
