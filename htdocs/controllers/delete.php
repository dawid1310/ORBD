<?php
$kolo = $app['database']->selectAll('sys.kolo');
$kwadrat = $app['database']->selectAll('sys.a_kwadrat');
$prostokat = $app['database']->selectAll('sys.prostokat');
$trojkat = $app['database']->selectAll('sys.trojkat');
$pieciokat = $app['database']->selectAll('sys.pieciokat');
$szesciokat = $app['database']->selectAll('sys.szesciokat');

die(var_dump($app['database']->selectAll('sys.a_kwadrat')));
require 'views/delete.view.php';

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

