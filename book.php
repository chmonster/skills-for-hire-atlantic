<?php 
  echo <<<BOOKING

  <article id = 'adventure-form' class='modal'>
    
    <form action='#' method='GET' class='modal-content'>
      <h3>Book your next great adventure now!</h3>
      <label for='name'>Name:</label>
      <input type='text' name='name' id='name' /><br />
      <label for='email'>Email:</label>
      <input type='email' name='email' id='email'/><br />
      <label for='location'>Location:</label>
      <select name='location' id='location'>
        <option name='Halifax'>Halifax</option>
        <option name='Sydney'>Sydney</option>
      </select><br />
      <label for='date'>Date:</label>
      <input type='date' name='date' id='date' /><br />
      <label for="comments">Comments:</label>
      <textarea name='comments'></textarea><br />
      <button type='submit'>Submit</button>
      <button class='close-button'>Close</button>
    </form>
    <a href='#' class='close-button'>+</a>
  </article>

BOOKING;
