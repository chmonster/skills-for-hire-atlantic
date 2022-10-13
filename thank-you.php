<?php

  const DATE_FORMAT = 'l, F j, Y';

  $name=$_GET['name'];
  $email=$_GET['email'];
  $location=$_GET['location'];
  $date=$_GET['date'];
  $dateFormatted=date(DATE_FORMAT, strtotime($date));
  $comments=$_GET['comments'];
  
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
