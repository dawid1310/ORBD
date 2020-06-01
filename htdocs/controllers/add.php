<?php
require 'views/add.view.php';

if (isset($_POST['kwadrat'])) {
    $bokKwadrat = $_POST['kwadrat']; 
    echo 'Kwadrat do dodania: '.$bokKwadrat;
    $kw = new Kwadrat();
    $kw->getFromUser($bokKwadrat);
    $kw->LoadToDB($app);
}