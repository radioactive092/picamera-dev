<?php

$mailpy = explode("\n", file_get_contents('mail.py'));
$mainpy = explode("\n", file_get_contents('main.py'));

foreach ($mailpy as $line) {
  if preg_match("/^fromEmail =/", $line) {
    print(line);
  }
}
 ?>
