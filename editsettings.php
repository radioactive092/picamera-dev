<?php

$interval=$_POST['interval'];
$semail=$_POST['semail'];
$passwd=$_POST['passwd'];
$temail=$_POST['temail'];

//file_put_contents("settingsdata.txt" , $interval . PHP_EOL . $semail . PHP_EOL . $passwd . PHP_EOL . $temail . PHP_EOL);

$mailpy = explode("\n", file_get_contents('mail.py'));
$mainpy = explode("\n", file_get_contents('main.py'));

$mailpy[6]="fromEmail = " . "'" . $semail . "'";
$mailpy[9]="fromEmailPassword = " . "'" . $passwd . "'";
$mailpy[12]="toEmail = " . "'" . $temail . "'";
$mainpy[8]="email_update_interval = " . $interval . " # sends an email only once in this time interval";

$sizemail=sizeof($mailpy);
$sizemain=sizeof($mainpy);

$fhmailpy = fopen('mail.py', 'w');
fclose($fhmailpy);
$fhmainpy = fopen('main.py', 'w');
fclose($fhmainpy);

for($i=0;$i<$sizemail;$i++)
{
    file_put_contents("mail.py" , $mailpy[$i] . PHP_EOL, FILE_APPEND);
}

for($i=0;$i<$sizemain;$i++)
{
    file_put_contents("main.py" , $mainpy[$i] . PHP_EOL, FILE_APPEND);
}

print ("Settings Updated Successfully");
?>
