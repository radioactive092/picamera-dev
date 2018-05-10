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
echo "Logging out...";
header( "refresh:3;url=index.php" );
//header('Location: index.php');
exit;

?>
