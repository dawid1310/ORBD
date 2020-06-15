<?php
    $typ = $_POST['select'];
    $kolo = $app['database']->selectAll('sys.koloOBJ');
    $kwadrat = $app['database']->selectAll('sys.kwadratOBJ');
    $prostokat = $app['database']->selectAll('sys.prostokatOBJ');
    $trojkat = $app['database']->selectAll('sys.trojkatOBJ');
    $pieciokat = $app['database']->selectAll('sys.pieciokatOBJ');
    $szesciokat = $app['database']->selectAll('sys.szesciokatOBJ');
    require 'views/displayOBJ.view.php';