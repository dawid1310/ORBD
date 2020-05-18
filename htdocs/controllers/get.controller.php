<?php
    $f1 = new Kolo;
    $kolo = $f1->returnAll();
    $f2 = new Kwadrat;
    $kwadrat = $f2->returnAll();
    $f3 = new Prostokat;
    $prostokat = $f3->returnAll();
    $f4 = new Trojkat;
    $trojkat = $f4->returnAll();
    $f5 = new Pieciokat;
    $pieciokat = $f5->returnAll();
    $f6 = new Szesciokat;
    $szesciokat = $f6->returnAll();
if(isset($_POST['delete']))
    require 'views/delete.view.php';
else if(isset($_POST['']))
