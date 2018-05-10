<?php
  $ssid= '"' . $_POST['ssid'] . '"';
  $psk= '"' . $_POST['psk'] . '"';

  $login_action = explode("\n", file_get_contents('action/login_action.php'));
  

?>
