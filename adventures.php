<?php 

date_default_timezone_set('America/Halifax');
const SECONDS_PER_DAY = 24*60*60;
const DATE_FORMAT = 'l, F j, Y';
const DATE_FORMAT_TAG = 'Y-m-d';

function randomDate() {
  $today = time();
  $durationDays = random_int(1,14);
  $timestamp1 = $today+random_int(7,28)*SECONDS_PER_DAY;
  $timestamp2 = $timestamp1+$durationDays*SECONDS_PER_DAY;
  $time1 = '<time datetime=' . date(DATE_FORMAT_TAG, $timestamp1) .'>' . date(DATE_FORMAT, $timestamp1) . '</time>';
  $time2 = '<time datetime=' . date(DATE_FORMAT_TAG, $timestamp2) .'>' . date(DATE_FORMAT, $timestamp2) . '</time>';
  $duration = '<time datetime="P' . ($durationDays+1) . 'D"> (' . $durationDays . ' days)</time>';

  return  $time1.' to '. $time2 . $duration;
}

function loren($div) {
  $proxiedURL = "https://corsproxy.io/?http://metaphorpsum.com/paragraphs/3?p=true";
  $fp = fopen($proxiedURL, 'r');
  $outstring = PHP_EOL 
    . '<div class="loren" id=\'' 
    . $div 
    . '\'>' 
    . PHP_EOL 
    . stream_get_contents($fp) 
    . PHP_EOL 
    . '</div>';
  return $outstring;
  fclose($fp);
}

echo <<<ADVENTURES1
  <article id='adventure-list'>
    <h1>Upcoming Adventures</h1>
    <section class="adventure">
      <h2>Halifax</h2>
ADVENTURES1;

echo '<div class="random-date" id="random-date1">'.randomDate().'</div>';

echo '<h3>Summary</h3>';

echo loren('loren1');

echo <<<ADVENTURES2
  </section>
  <section class="adventure">
    <h2>Sydney</h2>
ADVENTURES2;

echo '<div class="random-date" id="random-date2">'.randomDate().'</div>';
    
echo '<h3>Summary</h3>';

echo loren('loren2');

echo <<<ADVENTURES3
    </section>
  </article>`
ADVENTURES3;
