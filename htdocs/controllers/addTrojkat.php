<?php

$bok1 = $_POST['bok1'];
$bok2 = $_POST['bok2'];
$bok3 = $_POST['bok3'];
$trojkat = new Trojkat();
$trojkat->getFromUser($bok1, $bok2, $bok3);
$trojkat->LoadToDB();
header("Location: home");

