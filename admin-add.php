<?php 

  include_once('login_db.php');
  $conn = login_db();

  function test_input($conn, $label) {
    // echo $label . '' . $_POST[$label];
    return $conn->real_escape_string(stripcslashes($_POST[$label]));
  }

  $userName = test_input($conn, 'user');
  $password = password_hash(test_input($conn, 'password'), PASSWORD_DEFAULT);
  $query = "SELECT * FROM login WHERE username = '$userName' AND password = '$password'";
  // echo $query;


  $result = $conn->query($query);
  $conn->close();

  $today = date("Y-m-d");

  if($result) {
  echo <<<ADVENTURE_ENTRY

  <article id='admin-add' class='modal modal-show'>
    <form action='#admin-confirm' method='post' class='modal-content'>
      <h3 style='text-align:center;'>Enter new <br />adventure details</h3>
      <label for='heading'>Heading:</label>
      <input type='text' name='heading' id='heading' /><br />
      <label for='tripDate'>Date:</label>
      <input type='date' name='tripDate' id='tripDate' value="$today"/><br />
      <label for='duration'>Duration (days):</label>
      <input type='number' name='duration' id='duration' value='1' min='1' max='7' /><br />
      <label for="summary">Summary:</label>
      <textarea name='summary'></textarea><br />
      <label></label>
      <button type='submit' class='modal-button'>Submit</button>
    </form><br />
    <a href='#' class='close-button'>+</a>
  </article>

ADVENTURE_ENTRY;
} else {
  echo 'bad login';
}
// 