<?php

  include_once('header.php');
  include_once('photo-area.php');
  
  echo(var_dump($_GET));
  if(!isset($_GET['name'])){
    include_once('book.php');
  } else {
    include_once('thank-you.php');
  }
    
  include_once('adventures.php');
  include_once('footer.php');

?>