<?php
  $name=$_GET['name'];
  $email=$_GET['email'];
  $location=$_GET['location'];
  $date=$_GET['date'];
  $comments=$_GET['comments'];
  
  echo <<<THANKS
  <article id='thank-you' class='modal modal-show'>
    <div class='modal-content'>
      <h3>Thanks for booking!</h3>
      <br />
      Here are your details: <br />
      Name: $name <br />
      Email: $email <br /> 
      Location: $location <br />
      Date: $date <br />
      Comments: $comments <br />
      We'll be in contact soon!
      <a href='/'><button>Close</button></a>
    </div>
    <a href='/' class='close-button'>+</a>
  </article>
THANKS;
