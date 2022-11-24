<?php 
  include_once('login_db.php');
  $conn = login_db();

  date_default_timezone_set('America/Halifax');
  const SECONDS_PER_DAY = 24*60*60;
  const DATE_FORMAT = 'l, F j, Y';
  const DATE_FORMAT_TAG = 'Y-m-d';

  //get data
  $query = 'SELECT * FROM adventures';
  $result = $conn->query($query);
?>

  <article id="adventure-list">
    <h1>Upcoming Adventures</h1>

<?php
  //loop through rows
  if ($result->num_rows > 0) {
    while ($row =$result->fetch_assoc()) {
      //get data
      $tripDate = $row['tripDate'];
      $tripDateFormatted=date(DATE_FORMAT, strtotime($tripDate));
      $heading = $row['heading'];
      $duration = $row['duration'];
      $summary = $row['summary'];
      $id = $row['id'];

      //and print
      echo '<section class="adventure" id='.$id.'>';
      echo '<h2>'.$heading.'</h2>';
      echo '<div class="tripDate">';
      echo $tripDate;
      echo '</div>';
      echo $duration . ' days';
      echo '<h3>Summary</h3>';
      echo $summary;
      echo '</section>';
    }
  }
?>

  </article>

<?php 
  $conn->close();
?>