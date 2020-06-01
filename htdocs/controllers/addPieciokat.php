<?php

$bok = $_POST['bok'];
$pieciokat = new Pieciokat();
$pieciokat->getFromUser($bok);
$pieciokat->LoadToDB();
header("Location: home");

