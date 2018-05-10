<?php

$uid = $_POST['uid'];
$passwd = $_POST['password'];

$login_action = explode("\n", file_get_contents('action/login_action.php'));

$login_action[1] = "\tdefine('USERNAME','" . $uid . "');";
$login_action[2] = "\tdefine('PASSWORD','" . $passwd . "');";

$size_login_action = sizeof($login_action);

$fh_login_action = fopen('action/login_action.php', 'w');
fclose($fh_login_action);

for($i=0;$i<$size_login_action;$i++)
{
    file_put_contents("action/login_action.php" , $login_action[$i] . PHP_EOL, FILE_APPEND);
}

//echo "Login credentials updated, log back in.";

include('logout.php');

?>
