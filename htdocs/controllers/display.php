<?php
    $typ = $_POST['select'];
    $kolo = $app['database']->selectAll('sys.kolo');
    $kwadrat = $app['database']->selectAll('sys.kwadrat');
    $prostokat = $app['database']->selectAll('sys.prostokat');
    $trojkat = $app['database']->selectAll('sys.trojkat');
    $pieciokat = $app['database']->selectAll('sys.pieciokat');
    $szesciokat = $app['database']->selectAll('sys.szesciokat');
    require 'views/display.view.php';