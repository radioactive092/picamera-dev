<?php
/*  echo 'logout';
//  var_dump($_SESSION['username']);

  if(isset($_SESSION['username'])) {
    session_destroy();
    //header('Location: '.$_SERVER['HTTP_HOST']);
    exit;
  }
*/

session_start();
session_destroy();
header('Location: index.php');
exit;
?>
