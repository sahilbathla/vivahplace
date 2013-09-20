<?php
  // log errors if any
  ini_set('display_errors', 1);
  ini_set('log_errors', 1);
  ini_set('error_log', dirname(__FILE__) . '/error_log.txt');

  //Set Global Variables
  if (isset($_GET['id']))
    $id = $_GET['id'];
  else 
    $id = 2; 
  // include database files
  include '../config/db.php';

  //function get vendor by their id
  function getVendor($id)
  {
    // global connection $con
    global $con; 
    $query = "SELECT * FROM vendors WHERE id = $id";
    $result = mysqli_query($con, $query);
    if (!$result) 
      {
        $message = 'ERROR:' . mysql_error();
        return $message;
      }
    else
    {
      $rows = array();
      while ($row = mysqli_fetch_assoc($result)) 
      {
        $rows = $row;
      }
      return json_encode($rows);
    }
  }
  print getVendor($id);
  ?>
