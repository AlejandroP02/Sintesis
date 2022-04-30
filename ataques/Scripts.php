<?php

// Use ls command to shell_exec
// function
//$output = shell_exec('python3 ./scripts/Torshammer/torshammer.py -t'." ".$_GET['IP']." ".'-p'." ".$_GET['PORT']." ".'-r'." ".$_GET['RE']);

print_r('python3 ./scripts/Torshammer/torshammer.py -t'." ".$_GET['IP']." ".'-p'." ".$_GET['PORT']." ".'-r'." ".$_GET['RE']);

?>
