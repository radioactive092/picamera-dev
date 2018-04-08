<?php
$ssid= '"' . $_POST['ssid'] . '"';
$psk= '"' . $_POST['psk'] . '"';
$file="wificred.txt";

file_put_contents($file, $ssid . PHP_EOL . $psk . PHP_EOL)

$command = escapeshellcmd('./updatewifi.py');
$output = shell_exec($command);
echo $output;
#echo "Settings updated successfully!";
?>
