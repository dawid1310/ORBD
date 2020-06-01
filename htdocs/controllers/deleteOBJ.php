<?php
$kolo = $app['database']->selectAll('sys.kolo_obj');
$kwadrat = $app['database']->selectAll('sys.kwadrat_obj');
$prostokat = $app['database']->selectAll('sys.prostokat_obj');
$trojkat = $app['database']->selectAll('sys.trojkat_obj');
$pieciokat = $app['database']->selectAll('sys.pieciokat_obj');
$szesciokat = $app['database']->selectAll('sys.szesciokat_obj');

require 'views/deleteOBJ.view.php';

if (isset($_POST['kolo'])) {
    $usunKolo = $_POST['kolo']; 
    echo 'kolo do usuniecia: '.$usunKolo;
}
if (isset($_POST['kwadrat'])) {
    $usunKwadrat = $_POST['kolo']; 
    echo 'kwadrat do usuniecia: '.$usunKwadrat;
}
if (isset($_POST['prostokat'])) {
    $usunProstokat = $_POST['prostokat']; 
    echo 'prostokat do usuniecia: '.$usunProstokat;
}
if (isset($_POST['trojkat'])) {
    $usunTrojkat = $_POST['trojkat']; 
    echo 'trojkat do usuniecia: '.$usunTrojkat;
}
if (isset($_POST['pieciokat'])) {
    $usunPieciokat = $_POST['pieciokat']; 
    echo 'pieciokat do usuniecia: '.$usunPieciokat;
}
if (isset($_POST['szesciokat'])) {
    $usunSzesciokat = $_POST['szesciokat']; 
    echo 'szesciokat do usuniecia: '.$usunSzesciokat;
}

