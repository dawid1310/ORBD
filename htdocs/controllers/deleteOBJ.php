<?php
$kolo = $app['database']->selectAll('sys.koloobj');
$kwadrat = $app['database']->selectAll('sys.kwadratobj');
$prostokat = $app['database']->selectAll('sys.prostokatobj');
$trojkat = $app['database']->selectAll('sys.trojkatobj');
$pieciokat = $app['database']->selectAll('sys.pieciokatobj');
$szesciokat = $app['database']->selectAll('sys.szesciokatobj');
if (isset($_POST['kolo'])) {
    $usunKolo = $_POST['kolo'];
    $app['database']->deleteObj('KOLOOBJ', $usunKolo);
    header("Location: deleteOBJ");
}
if (isset($_POST['kwadrat'])) {
    $usunKwadrat = $_POST['kwadrat']; 
    $app['database']->deleteObj('kwadratobj', $usunKwadrat);
    header("Location: deleteOBJ");
}
if (isset($_POST['prostokat'])) {
    $usunProstokat = $_POST['prostokat']; 
    $app['database']->deleteObj('prostokatobj', $usunProstokat);
    header("Location: deleteOBJ");
}
if (isset($_POST['trojkat'])) {
    $usunTrojkat = $_POST['trojkat']; 
    $app['database']->deleteObj('trojkatobj', $usunTrojkat);
    header("Location: deleteOBJ");
}
if (isset($_POST['pieciokat'])) {
    $usunPieciokat = $_POST['pieciokat']; 
    $app['database']->deleteObj('pieciokatobj', $usunPieciokat);
    header("Location: deleteOBJ");
}
if (isset($_POST['szesciokat'])) {
    $usunSzesciokat = $_POST['szesciokat']; 
    $app['database']->deleteObj('szesciokatobj', $usunSzesciokat);
    header("Location: deleteOBJ");
}
require 'views/deleteOBJ.view.php';
