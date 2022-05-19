<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <menu></menu>
    <div id="titulo-ataques">
      <h1>ATAQUES</h1>
      <p>Aqui podremos utilizar los ataques con una interfaz grafica, hasta un usuario con el minimo de formación informatica podra lanzar distintos ataques.</p>
    </div>
    <div class="formularios" id="F-NMAP" style="display: none;">
      <div id="INFO-NMAP">
        <iframe src="https://nmap.org/man/es/man-briefoptions.html" width="100%" height="100%"></iframe>
      </div>
      <form id="NMAP-form" action="scripts.php" method="post" onsubmit="return fetchNMAP();">
        <input type="hidden" name="NMAP" value="1">
        <h2>NMAP</h2>
        <p>Escribe la opción.</p>
        <input type="text" name="OPCION" placeholder="-A, -O, -Sv...">
        <br>
        <p>Define la velocidad/ruido del escaneo.</p>
        <input type="text" name="VELOCIDAD" placeholder="-T5">
        <br>
        <p>Escribe la ip de la red o el host que deses escanear.</p>
        <input type="text" name="HOST_NMAP" placeholder="192.168.12.0/24 o 192.168.12.117">
        <br>
        <button id="carga" type="submit" name="button">Enviar</button>
        <div class="loader" id="loader" style="display: none;"></div>
      </form>
    </div>

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
      <form id="DNSSPOOFING-form" action="scripts.php" method="post" onsubmit="return fetchcall2();">
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

    <div class="formularios" id="F-SMURF" style="display: none;">
      <form id="SMURF-form" action="scripts.php" method="post" onsubmit="return fetchcall3();">
        <input type="hidden" name="SMURF" value="1">
        <h2>SMURF ATTACK</h2>
        <p>Escriba la dirección del dispositivo que actuara como zombi.</p>
        <input type="text" name="ZOMBI" placeholder="192.168.12.182">
        <br>
        <p>Escriba la dirección de la victima.</p>
        <input type="text" name="VICTIMA" placeholder="192.168.12.117">
        <br>
        <button type="submit" name="button">Enviar</button>
      </form>
    </div>

    <div class="formularios" id="F-DHCP" style="display: none;">
      <form id="DHCP-form" action="scripts.php" method="post" onsubmit="return fetchcall4();">
        <input type="hidden" name="DHCP" value="1">
        <h2>DHCP STARVATION</h2>
        <p>Escriba la dirección de la red a la que atacara.</p>
        <input type="text" name="RED" placeholder="192.168.12.0/24">
        <br>
        <p>Escriba la IP del atacante.</p>
        <input type="text" name="IP-DHCP" placeholder="192.168.12.168">
        <br>
        <button type="submit" name="button">Enviar</button>
      </form>
    </div>
      <div id="ataques">
        <div class="ataques">
          <h2>ESCANER DE RED</h2>
          <p>Mediante el uso de NMAP se puede escanear la red de distintas formas. Por ello hay multiples parametros para escanear algo en especifico. Estos parametros seran visibles a la izquierda del formulario.</p>
          <form class="boton" id="ataque1" action="scripts.php" method="post" onsubmit="return kill1();">
            <button id="NMAP" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Cerrar formulario</button>
            <input type="hidden" name="NMAP-stop" value="1">
          </form>
        </div>
        <div class="ataques">
          <h2>DDOS</h2>
          <p>Un ataque DDoS, o ataque distribuido de denegación de servicio, es un tipo de ciberataque que intenta hacer que un sitio web o recurso de red no esté disponible colapsándolo con tráfico malintencionado para que no pueda funcionar correctamente.</p>
          <form class="boton" id="ataque2" action="scripts.php" method="post" onsubmit="return kill2();">
            <button id="DDOS" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="DDOS-stop" value="1">
          </form>
        </div>
        <div class="ataques">
          <h2>ARP SPOOFING</h2>
          <p>ARP SPOOFING es un ataque en red LAN cuyo funcionamiento es envenenar las tablas mac de la victima, para hacerle pensar que el gateway es el hacker, por lo que el hacker realiza un MITM.</p>
          <form class="boton" id="ataque3" action="scripts.php" method="post" onsubmit="return kill3();">
            <button id="ARPSPOOFING" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="ARPSPOOFING-stop" value="1">
          </form>
        </div>
        <div class="ataques">
          <h2>DNS SPOOFING</h2>
          <p>El DNS SPOOFING se basa en cambiar un dominio conocido por otra ip, por ejemplo, puedes cambair el dominio de Google por la ip de una pagina de dudose procedencia. Este ataque solo funciona con dominios en HTTP, y se necesita que la victima esta siendo atacada con el ARP SPOOFING para funcionar correctamente.</p>
          <form class="boton" id="ataque3" action="scripts.php" method="post" onsubmit="return kill3();">
            <button id="DNSSPOOFING" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="DNSSPOOFING-stop" value="1">
          </form>
        </div>

        <div class="ataques">
          <h2>SMURF ATTACK</h2>
          <p>Este ataque consiste en usar otro dispositivo de la red como un zombie y realizar ataques mediante este zombie, pudiendo asi salir impune del ataque, el cual normalmente es un flood de pings.</p>
          <form class="boton" id="ataque4" action="scripts.php" method="post" onsubmit="return kill4();">
            <button id="SMURF" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="SMURF-stop" value="1">
          </form>
        </div>
        <div class="ataques">
          <h2>DHCP STARVATION</h2>
          <p>Hacer uso del DHCP Starvation significa que el atacante quiere dejar un servidor DHCP sin servicio, y esti lo hace pidiendo todas las ips que puede ofrecer este DHCP.</p>
          <form class="boton" id="ataque5" action="scripts.php" method="post" onsubmit="return kill5();">
            <button id="DHCP" type="button" name="button">Atacar</button>
            <button type="submit" name="stop">Parar ataque</button>
            <input type="hidden" name="DHCP-stop" value="1">
          </form>
        </div>
      </div>
    <footer></footer>

  </body>
  <script type="text/javascript" src="main.js"></script>
  <script type="text/javascript" src="atacks.js"></script>
</html>
