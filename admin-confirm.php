<?php
  include_once('login.php');
  $conn = login_db();

  const DATE_FORMAT = 'l, F j, Y';

  function test_input($conn, $label) {
    // echo $label . '' . $_POST[$label];
    return $conn->real_escape_string($_POST[$label]);
  }
  
  $heading=test_input($conn, 'heading');
  $tripDate=test_input($conn, 'tripDate');
  $tripDateFormatted=date(DATE_FORMAT, strtotime($tripDate));
  $duration=test_input($conn, 'duration');
  $summary=test_input($conn, 'summary');

  $query = "INSERT INTO adventures (heading, tripDate, duration, summary) 
            VALUES ('$heading','$tripDate','$duration','$summary')";

  $result = $conn->query($query);

  if ($result !== TRUE) {
    echo 'database error';
  }

  echo <<<CONFIRM
  <article id='admin-confirm' class='modal modal-show'>
    <div class='modal-content' style='text-align: center;'>
      <h3>Adventure entered!</h3>
      Here are the details: <br />
      Heading: $heading <br />
      Date: <time datetime="$tripDate">$tripDateFormatted</time> <br />
      Duration: $duration <br />
      Summary: $summary <br />
      <h3>Thanks!</h3>
      <a href='#' class='modal-button'><button>Close</button></a>
    </div>
    <a href='#' class='close-button'>+</a>
  </article>
CONFIRM;

$conn->close();
