<?php

echo <<<HEADER

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

  HEADER;
  ?>