<?php
  session_start();
  //echo "You are ".$_SESSION["user"]."<hr>";

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "users_db";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
 // $sql = "SELECT * FROM login where username=".$_SESSION["user"].
   //      "and password=".$_SESSION["password"];
  //$result = $conn->query($sql);
  
  //if ($result==0) {
    // output data of each row
   // echo "Successful <hr>";
    //}
   //else {
   // echo "0 results";
  //}
?>