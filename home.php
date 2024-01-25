<?php
session_start();

if($_SESSION['usuario'] != "david") {
  header('location:login.php');
} else {
  // echo  "<p>"."Hola ".$_SESSION['usuario']."</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
      <meta name="viewport" content/>
      <meta http-equiv="X-UA-Compatible" content/>
      <title>Proyecto Musical - Melodías con Metrónomo</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="styles2.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="manifest" href="./manifest.json">
      <script type="text/javascript">
        if ("serviceWorker" in navigator) {
          navigator.serviceWorker.register("sw.js");
        }
      </script>

  <meta name="theme-color" content="#F0DB4F">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="shortcut icon" type="image/png" href="./img1/flor1.gif">
  <link rel="apple-touch-icon" href="./img1/flor1.gif">
  <link rel="apple-touch-startup-image" href="./img1/flor1.gif">
</head>


<body>
<?php 
require('./partials/navBar.php') 
?>
  <div class="wrapper" >
    <header class="container mt-3 mb-5">
      <div class="text-center">
        <div class="button-row">
          <!-- <p>hola <?php echo $_SESSION['usuario'];?></p> -->
          <button id="decreaseTempoButton" class="tempo-button btn-l">
            <img src="./img1/velocidad.png" alt="" >
          </button>
          <button id="stopButton" class="playbutton btn-sleep">
            <img src="./img1/pausa.png" alt="">
          </button>
          <button id="increaseTempoButton" class="tempo-button btn-r">
            <img src="./img1/velocidad.png" alt="" >
          </button>
          <span id="tempoDisplay" class="tempo"> Tempo: 120 BPM</span>
        </div>
      </div>
    </header>

    <div class="button-container">
      <div class="button-column">
        <button id="playButton1" class="play-button btn-1" onclick="toggleButtonColor(this)" data-key="a"></button>
        <button id="playButton2" class="play-button btn-2" onclick="toggleButtonColor(this)"></button>
        <button id="playButton3" class="play-button btn-3" onclick="toggleButtonColor(this)"></button>
        <button id="playButton4" class="play-button btn-4" onclick="toggleButtonColor(this)"></button>
      </div>
      <div class="button-column">
        <button id="playButton5" class="play-button btn-5" onclick="toggleButtonColor(this)"></button>
        <button id="playButton6" class="play-button btn-6" onclick="toggleButtonColor(this)"></button>
        <button id="playButton7" class="play-button btn-7" onclick="toggleButtonColor(this)"></button>
        <button id="playButton8" class="play-button btn-8" onclick="toggleButtonColor(this)"></button>
      </div>
      <div class="button-column">
        <button id="playButton9" class="play-button btn-9" onclick="toggleButtonColor(this)"></button>
        <button id="playButton10" class="play-button btn-10" onclick="toggleButtonColor(this)"></button>
        <button id="playButton11" class="play-button btn-11" onclick="toggleButtonColor(this)"></button>
        <button id="playButton12" class="play-button btn-12" onclick="toggleButtonColor(this)"></button>
      </div>
      <div class="button-column">
        <button id="playButton13" class="play-button btn-13" onclick="toggleButtonColor(this)"></button>
        <button id="playButton14" class="play-button btn-14" onclick="toggleButtonColor(this)"></button>
        <button id="playButton15" class="play-button btn-15" onclick="toggleButtonColor(this)"></button>
        <button id="playButton16" class="play-button btn-16" onclick="toggleButtonColor(this)"></button>
      </div>
      <div class="button-column">
        <button id="playButton17" class="play-button btn-17" onclick="toggleButtonColor(this)"></button>
        <button id="playButton18" class="play-button btn-18" onclick="toggleButtonColor(this)"></button>
        <button id="playButton19" class="play-button btn-19" onclick="toggleButtonColor(this)"></button>
        <button id="playButton20" class="play-button btn-20" onclick="toggleButtonColor(this)"></button>
      </div>
      <div class="button-column">
        <button id="playButton21" class="play-button btn-21" onclick="toggleButtonColor(this)"></button>
        <button id="playButton22" class="play-button btn-22" onclick="toggleButtonColor(this)"></button>
        <button id="playButton23" class="play-button btn-23" onclick="toggleButtonColor(this)"></button>
        <button id="playButton24" class="play-button btn-24" onclick="toggleButtonColor(this)"></button>
      </div>
      <div class="button-column">
        <button id="playButton25" class="play-button btn-25" onclick="toggleButtonColor(this)"></button>
        <button id="playButton26" class="play-button btn-26" onclick="toggleButtonColor(this)"></button>
        <button id="playButton27" class="play-button btn-27" onclick="toggleButtonColor(this)"></button>
        <button id="playButton28" class="play-button btn-28" onclick="toggleButtonColor(this)"></button>
      </div>
    </div>
    <div class="">
      <button id="salsaButton" class="play-button"></button>
    </div>
  </div>


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./app.js"></script>
    <script src="./script.js"></script>

</body>
</html>