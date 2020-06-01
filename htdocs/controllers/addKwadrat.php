<?php

$bok = $_POST['bok'];
$kwadrat = new Kwadrat();
$kwadrat->getFromUser($bok);
$kwadrat->LoadToDB();
header("Location: home");

