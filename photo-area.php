

<?php
  //booking has been processed
  
  $isGet = isset($_GET['date']);

  //booking form is open
  // $isBooking = true;
  
  if ($isGet) {
    $messageFromMrC = 'I\'ll get the<br />bologna ready!';
  } else {
    $messageFromMrC = 'Come experience<br />Canada!';
  }
    
    

  echo <<<PHOTOAREA

  <figure id="photo-area">
    <img id="canoe-img" src="img/canoe.jpg" alt="a nature scene near Halifax">
    <div id="mrcanoehead">
      <img id="mrcanoehead-img" src="img/mr-canoehead.png" alt="Mr. Canoehead, Great Canadian">
      <div id="bubble" alt="a comic-style speech bubble">$messageFromMrC</div>
      <div id="bubble-tail" alt="tail for speech bubble"></div>
    </div>
  </figure>

PHOTOAREA;
