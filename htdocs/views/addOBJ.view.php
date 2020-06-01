<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="mx-auto w-50">
<a class="btn btn-secondary w-100" href="home" role="button">STRONA GÓWNA</a>
<div class="w-75 mx-auto"> <h3 class=" mx-auto"> Poniższe formularze zostaną wykorzystane do dodawania danych</h3>
<div class="w-50 mx-auto">
<form action="add" method="POST">
<div class="form-group">
<h5> Podaj bok kwadratu</h5>
    <label for="kwadrat">Podaj długość boku</label>
    <input type="number" class="form-control" name="kwadrat" placeholder="np. 12">
    <button type="submit" class="btn btn-primary float-right" name="kwadratadd">Dodaj</button>
  </div><br><br>
</form></div>

<div class="w-50 mx-auto">
<form action="add" method="POST">
<div class="form-group">
<h5> Podaj boki prostokąta</h5>
    <label for="prostokat1">Podaj długość pierwszego boku</label>
    <input type="number" class="form-control" name="prostokat1" placeholder="np. 12">
    <label for="prostokat2">Podaj długość drugiego boku</label>
    <input type="number" class="form-control" name="prostokat2" placeholder="np. 10">
    <button type="submit" class="btn btn-primary float-right" name="prostokatadd">Dodaj</button>
  </div><br><br>
</form></div>

<div class="w-50 mx-auto">
<form action="add" method="POST">
<div class="form-group">
    <h5> Koło </h5>
    <label for="kolo">Podaj promień koła</label>
    <input type="number" class="form-control" name="kolo" placeholder="np. 12">
    <button type="submit" class="btn btn-primary float-right" name="koloadd">Dodaj</button>
  </div><br><br>
</form></div>

<div class="w-50 mx-auto">
<form action="add" method="POST">
<div class="form-group">
    <h5> Podaj boki trójkąta</h5>
    <label for="trojkat1">Podaj długość pierwszego boku</label>
    <input type="number" class="form-control" name="trojkat1" placeholder="np. 12">
    <label for="trojkat2">Podaj długość drugiego boku</label>
    <input type="number" class="form-control" name="trojkat2" placeholder="np. 10">
    <label for="trojkat3">Podaj długość trzeciego boku</label>
    <input type="number" class="form-control" name="trojkat3" placeholder="np. 11">
    <button type="submit" class="btn btn-primary float-right" name="trojkatadd">Dodaj</button>
  </div><br><br>
</form></div>

<div class="w-50 mx-auto">
<form action="add" method="POST">
<div class="form-group">
<h5> Podaj bok pięciokąta foremnego</h5>
    <label for="pieciokat">Podaj długość boku</label>
    <input type="number" class="form-control" name="pieciokat" placeholder="np. 12">
    <button type="submit" class="btn btn-primary float-right" name="pieciokatadd">Dodaj</button>
  </div><br><br>
</form></div>

<div class="w-50 mx-auto">
<form action="add" method="POST">
<div class="form-group">
<h5> Podaj bok sześciokąta foremnego</h5>
    <label for="szesciokat">Podaj długość boku</label>
    <input type="number" class="form-control" name="szesciokat" placeholder="np. 12">
    <button type="submit" class="btn btn-primary float-right" name="szesciokatadd">Dodaj</button>
  </div><br><br>
</form></div>


</div>