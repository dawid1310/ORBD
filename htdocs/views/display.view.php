<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="mx-auto w-50"><br><br>
<a class="btn btn-primary w-100" href="home" role="button">STRONA GÓWNA</a>
<a class="btn btn-secondary w-100" href="select" role="button">Wstecz</a><br><br>

<?php   
if (strcmp($typ, 'kolo')==0) { ?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela KOŁO</th></tr>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Promień</th>
    <th scope="col">Średnica</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
    <?php foreach ($kolo as $wynik): ?>
    <tbody>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->TYP;?></td>
        <td><?=$wynik->PROMIEN;?></td>
        <td><?=$wynik->SREDNICA;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<?php
}
if (strcmp($typ, 'kwadrat')==0) {?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela KWADRAT</th></tr>
    <th scope="col">Bok</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
    <?php foreach ($kwadrat as $wynik): ?>
    <tbody>   
        <td><?=$wynik->BOK;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table>

<?php
}
if (strcmp($typ, 'prostokat')==0) {?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela PROSTOKĄT</th></tr>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Bok pierwszy</th>
    <th scope="col">Bok drugi</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
    <?php foreach ($prostokat as $wynik): ?>
    <tbody>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->TYP;?></td>
        <td><?=$wynik->BOK1;?></td>
        <td><?=$wynik->BOK2;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<?php
}
if (strcmp($typ, 'trojkat')==0) { ?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="8">Tabela TROJKĄT</th></tr>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Bok pierwszy</th>
    <th scope="col">Bok drugi</th>
    <th scope="col">Bok trzeci</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
    <?php foreach ($trojkat as $wynik): ?>
    <tbody>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->TYP;?></td>
        <td><?=$wynik->BOK1;?></td>
        <td><?=$wynik->BOK2;?></td>
        <td><?=$wynik->BOK3;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<?php
}
if (strcmp($typ, 'pieciokat')==0) { ?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela PIĘCIOKĄT</th></tr>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Bok</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
    <?php foreach ($pieciokat as $wynik): ?>
    <tbody>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->TYP;?></td>
        <td><?=$wynik->BOK;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table>
<?php
}
if (strcmp($typ, 'szesciokat')==0) { ?>
    <table class="table">
    <thead class="thead-dark">
    <tr class="thead-light"><th colspan="7">Tabela SZESCIOKĄT</th></tr>

        <th scope="col">ID</th>
        <th scope="col">Typ</th>
        <th scope="col">Bok</th>
        <th scope="col">Pole</th>
        <th scope="col">Obwód</th>
    </thead>
        <?php foreach ($szesciokat as $wynik): ?>
        <tbody>
            <td><?=$wynik->ID;?></td>
            <td><?=$wynik->TYP;?></td>
            <td><?=$wynik->BOK;?></td>
            <td><?=$wynik->POLE;?></td>
            <td><?=$wynik->OBWOD;?></td>
        <?php endforeach;?>
        </tbody>
    </table> 
<?php
}
?>
