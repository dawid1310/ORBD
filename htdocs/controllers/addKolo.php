<?php

$promien = $_POST['kolo'];
$kolo = new Kolo();
$kolo->getFromUser($promien);
$kolo->LoadToDB();
header("Location: home");

