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


    <div class="formularios" id="F-ARPSPOOFING" style="display: none;">
      <form id="ARPSPOOFING-form" action="scripts.php" method="post" onsubmit="return fetchcall1();">
        <input type="hidden" name="ARPSPOOFING" value="1">
        <h2>ARP SPOOFING</h2>
        <p>Escribe la IP de la victima.</p>
        <input type="text" name="IP-V" placeholder="192.168.214.100">
        <br>
        <p>Escribe la IP de la puerta de enlace.</p>
        <input type="text" name="IP-P" placeholder="192.168.12.10">
        <br>
        <button type="submit" name="button">Enviar</button>
      </form>
    </div>

    <div class="formularios" id="F-DNSSPOOFING" style="display: none;">
      <form id="DNSSPOOFING-form" action="scripts.php" method="post" onsubmit="return fetchcall1();">
        <input type="hidden" name="DNSSPOOFING" value="1">
        <h2>DNS SPOOFING</h2>
        <p>Escriba el dominio que quiere suplantar.</p>
        <input type="text" name="ORIGINAL-DOMAIN" placeholder="google.com.">
        <br>
        <p>Escriba el dominio con el suplentara al dominio anterior.</p>
        <input type="text" name="FALSE-DOMAIN" placeholder="10.0.104.200">
        <br>
        <button type="submit" name="button">Enviar</button>
      </form>
    </div>

      <div id="ataques">
        <div class="ataques">
          <h2>DDOS</h2>
          <p>Un ataque DDoS, o ataque distribuido de denegación de servicio, es un tipo de ciberataque que intenta hacer que un sitio web o recurso de red no esté disponible colapsándolo con tráfico malintencionado para que no pueda funcionar correctamente.</p>
          <form class="boton" id="ataque1" action="scripts.php" method="post" onsubmit="return kill1();">
            <button id="DDOS" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="DDOS-stop" value="1">
          </form>
        </div>
        <div class="ataques">
          <h2>ARP SPOOFING</h2>
          <p>ARP SPOOFING es un ataque en red LAN cuyo funcionamiento es envenenar las tablas mac de la victima, para hacerle pensar que el gateway es el hacker, por lo que el hacker realiza un MITM.</p>
          <form class="boton" id="ataque2" action="scripts.php" method="post" onsubmit="return kill2();">
            <button id="ARPSPOOFING" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="ARPSPOOFING-stop" value="1">
          </form>
        </div>
        <div class="ataques">
          <h2>DNS SPOOFING</h2>
          <p>El DNS SPOOFING es [Insertar Definición]. Este ataque solo funciona con dominios en HTTP, y se necesita que la victima esta siendo atacada con el ARP SPOOFING.</p>
          <form class="boton" id="ataque3" action="scripts.php" method="post" onsubmit="return kill3();">
            <button id="DNSSPOOFING" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="DNSSPOOFING-stop" value="1">
          </form>
        </div>

        <div class="ataques">
          <h2>ATAQUE4</h2>
          <p>Texto aleatorio XD.</p>
          <form class="boton" id="ataque4" action="scripts.php" method="post" onsubmit="return kill4();">
            <button id="ATAQUE4" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="ATAQUE4-stop" value="1">
          </form>
        </div>
        <div class="ataques">
          <h2>ATAQUE5</h2>
          <p>Texto aleatorio XD.</p>
          <form class="boton" id="ataque5" action="scripts.php" method="post" onsubmit="return kill5();">
            <button id="ATAQUE5" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="ATAQUE5-stop" value="1">
          </form>
        </div>
        <div class="ataques">
          <h2>ATAQUE6</h2>
          <p>Texto aleatorio XD.</p>
          <form class="boton" id="ataque6" action="scripts.php" method="post" onsubmit="return kill6();">
            <button id="ATAQUE6" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="ATAQUE6-stop" value="1">
          </form>
        </div>
      </div>
    <footer></footer>

  </body>
  <script type="text/javascript" src="main.js"></script>
  <script type="text/javascript" src="atacks.js"></script>
</html>
