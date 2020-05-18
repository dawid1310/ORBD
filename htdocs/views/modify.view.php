<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="mx-auto w-50">
<a class="btn btn-secondary w-100" href="home" role="button">STRONA GÓWNA</a>
<table class="table">


    <thead class="thead-dark">
    <tr class="thead-light"><th colspan="7">Tabela TYP</th></tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Nazwa</th>
        <th scope="col">Ilość ścian</th>
    </thead>
    <form action="deleteFigura" method="POST">
        
        <?php foreach ($typ as $wynik): ?>
        <tbody>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typ" value="<?=$wynik->ID;?>" checked>
                </div>
            </td>
            <td><?=$wynik->ID;?></td>
            <td><?=$wynik->NAZWA;?></td>
            <td><?=$wynik->ILOSC_SCIAN;?></td>
          
        <?php endforeach;?>
        </tbody>

</table> 
<button type="submit" class="btn btn-primary float-right" name="mod_typ">Modyfikuj</button>
        
    </form>       




<br><br><br>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela KOŁO</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Promień</th>
    <th scope="col">Średnica</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="deleteFigura" method="POST">
    <?php foreach ($kolo as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="kolo" value="<?=$wynik->ID;?>" checked>
            </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->TYP;?></td>
        <td><?=$wynik->PROMIEN;?></td>
        <td><?=$wynik->SREDNICA;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<button type="submit" class="btn btn-primary float-right" name="mod_kolo">Modyfikuj</button>
</form> 




<br><br><br>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela KWADRAT</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Bok</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>

<form action="deleteFigura" method="POST">
    <?php foreach ($kwadrat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="kwadrat" value="<?=$wynik->ID;?>" checked>
            </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->TYP;?></td>
        <td><?=$wynik->BOK;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<button type="submit" class="btn btn-primary float-right" name="mod_kwadrat">Modyfikuj</button>
</form> 




<br><br><br>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela PROSTOKĄT</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Bok pierwszy</th>
    <th scope="col">Bok drugi</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="deleteFigura" method="POST">
    <?php foreach ($prostokat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="prostokat" value="<?=$wynik->ID;?>" checked>
            </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->TYP;?></td>
        <td><?=$wynik->BOK1;?></td>
        <td><?=$wynik->BOK2;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<button type="submit" class="btn btn-primary float-right" name="mod_prostokat">Modyfikuj</button>
</form> 




<br><br><br>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela PIĘCIOKĄT</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Bok</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="deleteFigura" method="POST">
    <?php foreach ($pieciokat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="pieciokat" value="<?=$wynik->ID;?>" checked>
            </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->TYP;?></td>
        <td><?=$wynik->BOK;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<button type="submit" class="btn btn-primary float-right" name="mod_pieciokat">Modyfikuj</button>
</form> 




<br><br><br>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="7">Tabela SZESCIOKĄT</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Bok</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="deleteFigura" method="POST">
    <?php foreach ($szesciokat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
            <input class="form-check-input" type="radio" name="szesciokat" value="<?=$wynik->ID;?>" checked>
        </div></td>
        <td><?=$wynik->ID;?></td>
        <td><?=$wynik->TYP;?></td>
        <td><?=$wynik->BOK;?></td>
        <td><?=$wynik->POLE;?></td>
        <td><?=$wynik->OBWOD;?></td>
    <?php endforeach;?>
    </tbody>
</table> 
<button type="submit" class="btn btn-primary float-right" name="mod_szesciokat">Modyfikuj</button>
</form> 




<br><br><br>
<table class="table">
<thead class="thead-dark">
<tr class="thead-light"><th colspan="8">Tabela TROJKĄT</th></tr>
    <th scope="col">#</th>
    <th scope="col">ID</th>
    <th scope="col">Typ</th>
    <th scope="col">Bok pierwszy</th>
    <th scope="col">Bok drugi</th>
    <th scope="col">Bok trzeci</th>
    <th scope="col">Pole</th>
    <th scope="col">Obwód</th>
</thead>
<form action="deleteFigura" method="POST">
    <?php foreach ($trojkat as $wynik): ?>
    <tbody>
        <td><div class="form-check">
                <input class="form-check-input" type="radio" name="trojkat" value="<?=$wynik->ID;?>" checked>
            </div></td>
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
<button type="submit" class="btn btn-primary float-right" name="mod_trojkat">Modyfikuj</button>
</form> 