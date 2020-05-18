<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="w-75 mx-auto"><br><br>
    <div class="w-50 float-left">
        <div class="w-100 btn btn-primary active">
            Obiektowo-relacyjna baza danych
        </div><br><br><br><br><br>
        <div class="w-75 mx-auto">
                <div class="form-group">
                    <a class="btn btn-primary w-100" href="select" role="button">Odczyt danych</a><br><br><br>
                    <a class="btn btn-primary w-100" href="add"    role="button">Dodawanie danych</a><br><br><br>
                    <a class="btn btn-primary w-100" href="update" role="button">Modyfikacja danych</a><br><br><br>
                    <a class="btn btn-primary w-100" href="delete" role="button">Usuwanie danych</a><br><br><br>
                </div><br><br>
        </div>
    </div>
    <div class="w-50 float-right">
        <div class="w-100 btn btn-secondary active">
            Relacyjna baza danych
        </div><br><br><br><br><br>
        <div class="w-75 mx-auto">
                <div class="form-group">
                    <a class="btn btn-secondary w-100" href="relselect" role="button">Odczyt danych</a><br><br><br>
                    <a class="btn btn-secondary w-100" href="reladd"    role="button">Dodawanie danych</a><br><br><br>
                    <a class="btn btn-secondary w-100" href="relupdate" role="button">Modyfikacja danych</a><br><br><br>
                    <a class="btn btn-secondary w-100" href="reldelete" role="button">Usuwanie danych</a><br><br><br>
                </div><br><br>
            </div>
    </div>
</div>


<div class="w-25 mx-auto"> <h5> Poniższe formularze zostaną wykorzystane do dodawania danych</h5>
<form action="#" method="get">
  <div class="form-group">
    <h5> Podaj boki prostokąta</h5>
    <label for="prostokat1">Podaj długość pierwszego boku</label>
    <input type="number" class="form-control" id="prostokat1" placeholder="np. 12">
    <label for="prostokat2">Podaj długość drugiego boku</label>
    <input type="number" class="form-control" id="prostokat2" placeholder="np. 10">
    <button type="submit" class="btn btn-primary float-right">Dodaj</button>
  </div><br><br>
  <div class="form-group">
    <h5> Podaj bok kwadratu</h5>
    <label for="kwadrat">Podaj długość boku</label>
    <input type="number" class="form-control" id="kwadrat" placeholder="np. 12">
    <button type="submit" class="btn btn-primary float-right">Dodaj</button>
  </div><br><br>
  <div class="form-group">
    <h5> Podaj bok pięciokąta</h5>
    <label for="pieciokat">Podaj długość boku</label>
    <input type="number" class="form-control" id="pieciokat" placeholder="np. 12">
    <button type="submit" class="btn btn-primary float-right">Dodaj</button>
  </div><br><br>
  <div class="form-group">
    <h5> Podaj bok sześciokąta</h5>
    <label for="szesciokat">Podaj długość boku</label>
    <input type="number" class="form-control" id="szesciokat" placeholder="np. 12">
    <button type="submit" class="btn btn-primary float-right">Dodaj</button>
  </div><br><br>
  <div class="form-group">
    <h5> Podaj boki trójkąta</h5>
    <label for="trojkat1">Podaj długość pierwszego boku</label>
    <input type="number" class="form-control" id="trojkat1" placeholder="np. 12">
    <label for="trojkat2">Podaj długość drugiego boku</label>
    <input type="number" class="form-control" id="trojkat2" placeholder="np. 10">
    <label for="trojkat3">Podaj długość trzeciego boku</label>
    <input type="number" class="form-control" id="trojkat3" placeholder="np. 11">
    <button type="submit" class="btn btn-primary float-right">Dodaj</button>
  </div><br><br>
  <div class="form-group">
    <h5> Koło</h5>
    <label for="kolo">Podaj promień koła</label>
    <input type="number" class="form-control" id="kolo" placeholder="np. 12">
    <button type="submit" class="btn btn-primary float-right">Dodaj</button>
  </div><br><br>
</form></div>


<div class="w-25 mx-auto">
<form action="addKolo" method="POST">
<div class="form-group">
    <h5> KOŁO</h5>
    <label for="kolo">Podaj promień koła</label>
    <input type="number" class="form-control" name="kolo" placeholder="np. 12">
    <button type="submit" class="btn btn-primary float-right">Dodaj</button>
  </div><br><br>
</form></div>
test
</body>
</html> 
