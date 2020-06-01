<?php
    $figura = $_POST['figura'];
    if($figura == 1){
        $promien = $_POST['promien'];
        $kolo = new Kolo;
        $kolo->getFromUser($promien);
        $kolo->LoadToDB();
        header('location: added');
    }else if($figura == 2){
        $bok = $_POST['bok'];
        $kwadrat = new Kwadrat;
        $kwadrat->getFromUser($bok);
        $kwadrat->LoadToDB();
        header('location: added');
    }else if($figura == 3){
        $bok1 = $_POST['bok1'];
        $bok2 = $_POST['bok2'];
        $prostokat = new Prostokat;
        $prostokat->getFromUser($bok1, $bok2);
        $prostokat->LoadToDB();
        header('location: added');
    }else if($figura == 4){
        $bok = $_POST['bok'];
        $trojkat = new Trojkat;
        $trojkat->getFromUser($bok);
        $trojkat->LoadToDB();
        header('location: added');
    }else if($figura == 5){
        $bok = $_POST['bok'];
        $pieciokat = new Pieciokat;
        $pieciokat->getFromUser($bok);
        $pieciokat->LoadToDB();
        header('location: added');
    }else if($figura == 6){
        $bok = $_POST['bok'];
        $szesciokat = new Szesciokat;
        $szesciokat->getFromUser($bok);
        $szesciokat->LoadToDB();
        header('location: added');

    }else{
        header('location: error');
    }