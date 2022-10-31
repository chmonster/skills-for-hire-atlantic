<?php

  include_once('header.php');
  include_once('menu.php');
  include_once('photo-area.php');
  
  if (isset($_GET['name'])) {
    include_once('thank-you.php');
  }
  else {
    include_once('book.php');
  }

  if(isset($_POST['heading'])){
    include_once('admin-confirm.php');
  }
  else {
    include_once('admin-add.php');
  } 

  include_once('all-adventures.php');
  include_once('footer.php');
