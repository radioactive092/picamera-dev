<?php

$interval=$_POST['interval'];
$semail=$_POST['semail'];
$passwd=$_POST['passwd'];
$temail=$_POST['temail'];

$mailpy = explode("\n", file_get_contents('mail.py'));
$mainpy = explode("\n", file_get_contents('main.py'));
//$inputdata = explode("\n", file_get_contents('inputdata.txt'));

$mailpy[6]="fromEmail = " . "'" . $semail . "'";
$mailpy[9]="fromEmailPassword = " . "'" . $passwd . "'";
$mailpy[12]="toEmail = " . "'" . $temail . "'";
$mainpy[8]="email_update_interval = " . $interval . " # sends an email only once in this time interval";

$sizemail=sizeof($mailpy);
$sizemain=sizeof($mainpy);

$fhmailpy = fopen('mailtest.py', 'w');
fclose($fhmailpy);
$fhmainpy = fopen('maintest.py', 'w');
fclose($fhmainpy);

for($i=0;$i<$sizemail;$i++)
{
    file_put_contents("mailtest.py" , $mailpy[$i] . PHP_EOL, FILE_APPEND);
}

for($i=0;$i<$sizemain;$i++)
{
    file_put_contents("maintest.py" , $mainpy[$i] . PHP_EOL, FILE_APPEND);
}

print ("Settings Updated Successfully");
?>
