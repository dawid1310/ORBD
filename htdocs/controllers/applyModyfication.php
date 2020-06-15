<?php
if (isset($_POST['kolo'])) {
    $id = $_POST['kolo'];
    $promien = $_POST['promien']*1;
    $kolo = new Kolo;
    $kolo->getFromUser($promien);
    $kolo->setId($id);
    $kolo->modify($app, 'kolo');
    header("Location: select");
}
if (isset($_POST['kwadrat'])) {
    $id = $_POST['kwadrat'];
    $bok = $_POST['bok']*1;
    $kwadrat = new Kwadrat;
    $kwadrat->getFromUser($bok);
    $kwadrat->setId($id);
    $kwadrat->modify($app, 'kwadrat');
    header("Location: select");

}
if (isset($_POST['prostokat'])) {
    $id = $_POST['prostokat'];
    $bok1 = $_POST['bok1']*1;
    $bok2 = $_POST['bok2']*1;
    $prostokat = new Prostokat;
    $prostokat->getFromUser($bok1, $bok2);
    $prostokat->setId($id);
    $prostokat->modify($app, 'prostokat');
    header("Location: select");
}
if (isset($_POST['trojkat'])) {
    $id = $_POST['trojkat'];
    $bok1 = $_POST['bok1']*1;
    $bok2 = $_POST['bok2']*1;
    $bok3 = $_POST['bok3']*1;
    $trojkat = new Trojkat;
    $trojkat->getFromUser($bok1, $bok2, $bok3);
    $trojkat->setId($id);
    $trojkat->modify($app, 'trojkat');
    header("Location: select");
}
if (isset($_POST['pieciokat'])) {
    $id = $_POST['pieciokat'];
    $bok = $_POST['bok']*1;
    $pieciokat = new Pieciokat;
    $pieciokat->getFromUser($bok);
    $pieciokat->setId($id);
    $pieciokat->modify($app, 'pieciokat');
    header("Location: select");
}
if (isset($_POST['szesciokat'])) {
    $id = $_POST['szesciokat'];
    $bok = $_POST['bok']*1;
    $szesciokat = new Szesciokat;
    $szesciokat->getFromUser($bok);
    $szesciokat->setId($id);
    $szesciokat->modify($app, 'szesciokat');
    header("Location: select");
}