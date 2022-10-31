<?php

//open database connection
function login_db() {
  $servername = "localhost";
  // echo var_dump($_ENV);
  $username = getenv('MRC_USERNAME');
  $password = getenv('MRC_PASSWORD');
  $dbname = 'halifaxcanoeandkayak';

  // Create connection
  $mysqli = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
  }
  // echo "Connected successfully\n";
  return $mysqli;
}

