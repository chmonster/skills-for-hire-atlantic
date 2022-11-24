<?php 
  echo <<<ADMIN_LOGIN

  <article id='admin-login' class='modal'>
    <form action='#admin-add' method='post' class='modal-content'>
      <h3 style='text-align:center;'>Enter login <br />credentials</h3>
      <label for='user'>User:</label>
      <input type='text' name='user' id='user' /><br />
      <label for='password'>Password:</label>
      <input type='password' name='password' id='password' /><br />
      <label></label>
      <button type='submit' class='modal-button'>Login</button>
    </form><br />
    <a href='#' class='close-button'>+</a>
  </article>

ADMIN_LOGIN;

// $mysqli->close();