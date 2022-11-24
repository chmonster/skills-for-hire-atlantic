<?php
  include_once('login_db.php');
  $conn = login_db();
  $user = 'admin';
  $pass = password_hash('4dm1n', PASSWORD_DEFAULT);
  
  $query = "INSERT INTO login (username, password) 
            VALUES ('$user', '$pass');";
  

  $result = $conn->query($query);
  if ($result !== TRUE) {
    echo 'database error';
  }

  $conn->close();
?>