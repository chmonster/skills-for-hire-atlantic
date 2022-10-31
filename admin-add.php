<?php 
  echo <<<ADVENTURE_ENTRY

  <article id='admin-form' class='modal'>
    <form action='#admin-confirm' method='post' class='modal-content'>
      <h3 style='text-align:center;'>Enter new <br />adventure details</h3>
      <label for='heading'>Heading:</label>
      <input type='text' name='heading' id='heading' /><br />
      <label for='tripDate'>Date:</label>
      <input type='date' name='tripDate' id='tripDate' /><br />
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

// $mysqli->close();