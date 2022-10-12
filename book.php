<?php 
  echo <<<BOOKING

  <article id = 'adventure-form' class='modal'>
    <form action='#' method='GET' class='modal-content'>
      <label for='name'>Name:</label>
      <input type='text' name='name' id='name' /><br />
      <label for='email'>Email:</label>
      <input type='text' name='email' id='email' /><br />
      <label for='location'>Location:</label>
      <select name='location' id='location'>
        <option name='Halifax'>Halifax</option>
        <option name='Sydney'>Sydney</option>
      </select><br />
      <label for='date'>Date:</label>
      <input type='text' name='date' id='date' /><br />
      <label for="comments">Comments:</label>
      <textarea name='comments'></textarea><br />
      <button type='submit'>Submit</button>
      <a href='#' class='close-button'>+</a>
    </form>
  </article>

BOOKING;
