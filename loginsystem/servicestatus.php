<?php

$servicestatus=$_POST['servicestatus'];

if($servicestatus=="restart")
{
  $output = shell_exec("../restartservice.sh");
}
elseif($servicestatus=="start")
{
  $output = shell_exec("../startservice.sh");
}
else
{
  $output = shell_exec("../stopservice.sh");
}


?>
