<!DOCTYPE html />
<html lang="en" />

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halifax Canoe and Kayak</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reseter.css" />
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@1,700&display=swap">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="index.js"></script>
</head>

<body>
  <header>
    <div id="hamburger">
      <img src="img/hamburger.png" height="100%" alt="navigation menu" title="click here to navigate">
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Book Trip</a></li>
          <li><a href="#">Admin Login</a></li>
        </ul>
      </nav>
    </div>
    <div id="headertitle">
      <h1>Halifax Canoe and Kayak</h1>
    </div>
    <div id="paddle">
      <img src="img/paddle-white.png" height="100%" title="if Mr. Canoehead is annoying you, click here to dismiss him">
    </div>
  </header>
  
  <div id="photo-area">
    <img id="canoe-img" src="img/canoe.jpg" alt="a nature scene near Halifax">
    <div id="mrcanoehead">
      <img id="mrcanoehead-img" src="img/mr-canoehead.png" alt="Mr. Canoehead, Great Canadian">
      <div id="bubble" alt="a comic-style speech bubble">Come experience<br/>Canada!</div>
    </div>
  </div>

  <article>
    <form action='thank-you.php' method='GET'>
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
      <button type='submit'>Submit</button><br />
    </form>
  </article>

  <article>
    <h1>Upcoming Adventures</h1>
    <section class="adventure">
      <h2>Halifax</h2>
      <div class="random-date" id="random-date1"></div>
      <h3>Summary</h3>
      <div class="loren" id="loren1"></div>
    </section>
    <section class="adventure">
      <h2>Sydney</h2>
      <div class="random-date" id="random-date2"></div>
      <h3>Summary</h3>
      <div class="loren" id="loren2"></div>
    </section>
  </article>
  
</body>
</html>