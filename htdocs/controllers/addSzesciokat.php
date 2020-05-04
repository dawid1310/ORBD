<?php

$bok = $_POST['bok'];
$szesciokat = new Szesciokat();
$szesciokat->getFromUser($bok);
$szesciokat->LoadToDB();
header("Location: home");

