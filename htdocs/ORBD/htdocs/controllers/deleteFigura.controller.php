<?php
if(isset($_POST['sub_kolo'])){
    $id=$_POST['kolo'];
    $app['database']->deleteDB('kolo', $id);
}else if(isset($_POST['sub_kwadrat'])){
    $id=$_POST['kwadrat'];
    $app['database']->deleteDB('kwadrat', $id);
}else if(isset($_POST['sub_prostokat'])){
    $id=$_POST['prostokat'];
    $app['database']->deleteDB('prostokat', $id);
}else if(isset($_POST['sub_trojkat'])){
    $id=$_POST['trojkat'];
    $app['database']->deleteDB('trojkat', $id);
}else if(isset($_POST['sub_pieciokat'])){
    $id=$_POST['pieciokat'];
    $app['database']->deleteDB('pieciokat', $id);
}else if(isset($_POST['sub_szesciokat'])){
    $id=$_POST['szesciokat'];
    $app['database']->deleteDB('szesciokat', $id);
}else{
    header('location: home');
}