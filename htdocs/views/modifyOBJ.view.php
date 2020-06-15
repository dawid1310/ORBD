<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="mx-auto w-50"><br><br>
<a class="btn btn-success w-100" href="home" role="button">STRONA GÓWNA</a>
<a class="btn btn-secondary w-100" href="sfmOBJ" role="button">Wstecz</a><br><br>


<?php   
if (strcmp($typ, 'kolo')==0) { ?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela KOŁO</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Promień</th>
    <th scope="col">Średnica</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="applyModyficationOBJ" method="POST">
    <?php foreach ($kolo as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="kolo" value="<?=$wynik->ID;?>" checked>
            </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->PROMIEN;?></td>
        <td><?=$wynik->SREDNICA;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<input type="number" class="form-control" name="promien" placeholder="Promien">
<button type="submit" class="btn btn-success float-right" name="sub_kolo">Modyfikuj</button>
</form> 
<?php
}
if (strcmp($typ, 'kwadrat')==0) {?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela KWADRAT</th></tr>
    <th scope="col">#</th>

    <th scope="col">Bok</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="applyModyficationOBJ" method="POST">
    <?php foreach ($kwadrat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="kwadrat" value="<?=$wynik->ID;?>" checked>
            </div></td>
   
        <td><?=$wynik->BOK;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<input type="number" class="form-control" name="bok" placeholder="Bok kwadratu">
<button type="submit" class="btn btn-success float-right" name="sub_kwadrat">Modyfikuj</button>
</form> 
<?php
}
if (strcmp($typ, 'prostokat')==0) {?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela PROSTOKĄT</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Bok pierwszy</th>
    <th scope="col">Bok drugi</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="applyModyficationOBJ" method="POST">
    <?php foreach ($prostokat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="prostokat" value="<?=$wynik->ID;?>" checked>
            </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->BOK1;?></td>
        <td><?=$wynik->BOK2;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table>
<input type="number" class="form-control" name="bok1" placeholder="Pierwszy bok">
<input type="number" class="form-control" name="bok2" placeholder="Drugi bok"> 
<button type="submit" class="btn btn-success float-right" name="sub_prostokat">Modyfikuj</button>
</form> 
<?php
}
if (strcmp($typ, 'pieciokat')==0) { ?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela PIĘCIOKĄT</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Bok</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="applyModyficationOBJ" method="POST">
    <?php foreach ($pieciokat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="pieciokat" value="<?=$wynik->ID;?>" checked>
            </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->BOK;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
    
</table> 
<input type="number" class="form-control" name="bok" placeholder="Bok pieciokata">
<button type="submit" class="btn btn-success float-right" name="sub_pieciokat">Modyfikuj</button>
</form> 
<?php
}
if (strcmp($typ, 'szesciokat')==0) { ?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela SZESCIOKĄT</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Bok</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="applyModyficationOBJ" method="POST">
    <?php foreach ($szesciokat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="szesciokat" value="<?=$wynik->ID;?>" checked>
            </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->BOK;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<input type="number" class="form-control" name="bok" placeholder="Bok szesciokata">
<button type="submit" class="btn btn-success float-right" name="sub_szesciokat">Modyfikuj</button>
</form> 
<?php
}
if (strcmp($typ, 'trojkat')==0) { ?>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="8">Tabela TROJKĄT</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Bok pierwszy</th>
    <th scope="col">Bok drugi</th>
    <th scope="col">Bok trzeci</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="applyModyficationOBJ" method="POST">
    <?php foreach ($trojkat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="trojkat" value="<?=$wynik->ID;?>" checked>
            </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->BOK1;?></td>
        <td><?=$wynik->BOK2;?></td>
        <td><?=$wynik->BOK3;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<input type="number" class="form-control" name="bok1" placeholder="Pierwszy bok">
<input type="number" class="form-control" name="bok2" placeholder="Drugi bok">
<input type="number" class="form-control" name="bok3" placeholder="Trzeci bok">
<button type="submit" class="btn btn-success float-right" name="sub_trojkat">Modyfikuj</button>
</form> 
<?php
}
?>





