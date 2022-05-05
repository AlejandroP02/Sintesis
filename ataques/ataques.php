<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <menu></menu>
    <div class="formularios" id="F-DDOS" style="display: none;">
      <form id="DDOS-form" action="scripts.php" method="post" onsubmit="return fetchcall();">
        <input type="hidden" name="DDOS" value="1">
        <h2>DDOS</h2>
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


    <div class="formularios" id="F-ATAQUE2" style="display: none;">
      <form id="ATAQUE2-form" action="scripts.php" method="post" onsubmit="return fetchcall();">
        <input type="hidden" name="ATAQUE2" value="1">
        <p>Escribe la IP de la victima.</p>
        <input type="text" name="IP-V" placeholder="192.168.214.100">
        <br>
        <p>Escribe la IP de la puerta de enlace.</p>
        <input type="text" name="IP-P" placeholder="192.168.12.10">
        <br>
        <button type="submit" name="button">Enviar</button>
      </form>
    </div>



    <div id="ataques">
      <div class="ataques">
        <h2>DDOS</h2>
        <p>Un ataque DDoS, o ataque distribuido de denegación de servicio, es un tipo de ciberataque que intenta hacer que un sitio web o recurso de red no esté disponible colapsándolo con tráfico malintencionado para que no pueda funcionar correctamente.</p>
        <form class="boton" id="ataque1" action="scripts.php" method="post" onsubmit="return kill();">
          <button id="DDOS" type="button" name="button">Atacar</button>
          <button type="submit" name="stop">Parar ataque</button>
          <input type="hidden" name="DDOS-stop" value="1">
        </form>
      </div>
      <div class="ataques">
        <h2>ATAQUE2</h2>
        <p>Un ataque DDoS, o ataque distribuido de denegación de servicio, es un tipo de ciberataque que intenta hacer que un sitio web o recurso de red no esté disponible colapsándolo con tráfico malintencionado para que no pueda funcionar correctamente.</p>
        <form class="boton" id="ataque2" action="scripts.php" method="post" onsubmit="return kill();">
          <button id="ATAQUE2" type="button" name="button">Atacar</button>
          <button type="submit" name="stop">Parar ataque</button>
          <input type="hidden" name="ATAQUE2-stop" value="1">
        </form>
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
    <footer></footer>
  </body>
  <script type="text/javascript" src="main.js"></script>
  <script type="text/javascript" src="atacks.js"></script>
</html>
