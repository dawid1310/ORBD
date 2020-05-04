<?php

$bok1 = $_POST['bok1'];
$bok2 = $_POST['bok2'];
$prostokat = new Prostokat();
$prostokat->getFromUser($bok1, $bok2);
$prostokat->LoadToDB();
header("Location: home");

