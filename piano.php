<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content/>
    <meta http-equiv="X-UA-Compatible" content/>
    <title>Piano</title>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="theme-color" content="#F0DB4F">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/png" href="./img/ProgramadorFitness.png">
    <link rel="apple-touch-icon" href="./ProgramadorFitness.png">
    <link rel="apple-touch-startup-image" href="./ProgramadorFitness.png">
    <link rel="manifest" href="./manifest.json">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">

      <script>
        if ("serviceWorker" in navigator) {
          navigator.serviceWorker.register("sw.js");
        }
      </script>
  </head>

  <body onload="my_onload()" onkeydown="handle_key(event)">
    <div class="wrapper">
      <?php require("./partials/navBar.php"); ?>
      <header>  
        <div><button onclick="play_or_stop()" id="my_play_button">Inicio</button>
            <input id="my_bpm_input" onchange="change_bpm()" type="number" min="40" max="300" step="1" value="60" />
            <button class="plus_minus" onclick="increment_bpm(1)">+</button>
            <button class="plus_minus" onclick="increment_bpm(-1)">-</button>
            <input id="my_volume_input" value="20" />
            <span>Volumen</span>
            <input type="range" min="0" max="1" value="0.5" step="any" />
            <a href="./piano2/index2.html">
              <button class="piano2">?</button>
            </a> 
        <div class="column keys-checkbox">
          <span>Mostrar Notas</span><input type="checkbox" checked />
        </div>

        </div>
      </header>
      
      <ul class="piano-keys">
        <li class="key red" data-key="a"><span>Do</span></li>
        <li class="key black" data-key="w"><span>Re♭</span></li>
        <li class="key brown" data-key="s"><span>Re</span></li>
        <li class="key black" data-key="e"><span>Mi♭</span></li>
        <li class="key yelow" data-key="d"><span>Mi</span></li>
        <li class="key green" data-key="f"><span>Fa</span></li>
        <li class="key black" data-key="t"><span>Sol♭</span></li>
        <li class="key blue" data-key="g"><span>Sol</span></li>
        <li class="key black" data-key="y"><span>La♭</span></li>
        <li class="key blue2" data-key="h"><span>La</span></li>
        <li class="key black" data-key="u"><span>Si♭</span></li>
        <li class="key purple" data-key="j"><span>Si</span></li>
      </ul>
    </div> 
    <script src="./script.js"></script>
    <script src="./service.js"></script>
  </body>
</html>