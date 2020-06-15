<?php
$kolo = $app['database']->selectAll('sys.kolo');
$kwadrat = $app['database']->selectAll('sys.kwadrat');
$prostokat = $app['database']->selectAll('sys.prostokat');
$trojkat = $app['database']->selectAll('sys.trojkat');
$pieciokat = $app['database']->selectAll('sys.pieciokat');
$szesciokat = $app['database']->selectAll('sys.szesciokat');

//die(var_dump($app['database']->selectAll('sys.a_kwadrat')));

if (isset($_POST['kolo'])) {
    $usunKolo = $_POST['kolo']; 
    $app['database']->delete('kolo', $usunKolo);
    header("Location: delete");
}
if (isset($_POST['kwadrat'])) {
    $usunKwadrat = $_POST['kwadrat']; 
    $app['database']->delete('kwadrat', $usunKwadrat);
    header("Location: delete");
}
if (isset($_POST['prostokat'])) {
    $usunProstokat = $_POST['prostokat']; 
    header("Location: delete");
}
if (isset($_POST['trojkat'])) {
    $usunTrojkat = $_POST['trojkat']; 
    $app['database']->delete('trojkat', $usunTrojkat);
    header("Location: delete");
}
if (isset($_POST['pieciokat'])) {
    $usunPieciokat = $_POST['pieciokat']; 
    $app['database']->delete('pieciokat', $usunPieciokat);
    header("Location: delete");
}
if (isset($_POST['szesciokat'])) {
    $usunSzesciokat = $_POST['szesciokat']; 
    $app['database']->delete('szesciokat', $usunSzesciokat);
    header("Location: delete");
}
require 'views/delete.view.php';

