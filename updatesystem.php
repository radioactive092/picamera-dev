<?php

$output = shell_exec("./restartservice.sh");
header('Location: /index.php');

?>
