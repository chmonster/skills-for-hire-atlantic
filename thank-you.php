<?php

  const DATE_FORMAT = 'l, F j, Y';

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $name=test_input($_GET['name']);
  $email=test_input($_GET['email']);
  $location=test_input($_GET['location']);
  $date=test_input($_GET['date']);
  $dateFormatted=date(DATE_FORMAT, strtotime($date));
  $comments=test_input($_GET['comments']);
  
  echo <<<THANKS
  <article id='thank-you' class='modal modal-show'>
    <div class='modal-content' style='text-align: center;'>
      <h3>Thanks for booking!</h3>
      Here are your details: <br />
      Name: $name <br />
      Email: $email <br /> 
      Location: $location <br />
      Date: <time datetime="$date">$dateFormatted</time> <br />
      Comments: $comments <br />
      <h3>We'll be in contact soon!</h3>
      <a href='#' class='modal-button'><button>Close</button></a>
    </div>
    <a href='#' class='close-button'>+</a>
  </article>
THANKS;
