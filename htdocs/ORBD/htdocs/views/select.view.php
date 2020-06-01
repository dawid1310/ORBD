<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="mx-auto w-50">
<a class="btn btn-secondary w-100" href="home" role="button">STRONA GÓWNA</a>
<table class="table w-50 mx-auto">
    <thead class="thead-dark">
        
        <tr class="thead-light"><th colspan="2">WYŚWIETL DANE Z TABELI</th></tr>
        <th scope="col">#</th>
        <th scope="col">Nazwa</th>
    </thead>
    <form action="delete" method="POST">
        
        <tbody>
<tr>
    <td><div class="form-check">
        <input class="form-check-input" type="radio" name="select" value="kolo" checked>
    </div></td>
    <td>Koło</td>
</tr>

<tr>
    <td><div class="form-check">
        <input class="form-check-input" type="radio" name="select" value="trojkat">
    </div></td>
    <td>Trojkat</td>
</tr>
<tr>
    <td><div class="form-check">
        <input class="form-check-input" type="radio" name="select" value="kwadrat">
    </div></td>
    <td>Kwadrat</td>
</tr>
<tr>
    <td><div class="form-check">
        <input class="form-check-input" type="radio" name="select" value="prostokat">
    </div></td>
    <td>Prostokąt</td>
</tr>
<tr>
    <td><div class="form-check">
        <input class="form-check-input" type="radio" name="select" value="pieciokat">
    </div></td>
    <td>Pięciokąt</td>
</tr>
<tr>
    <td><div class="form-check">
        <input class="form-check-input" type="radio" name="select" value="szesciokat">
    </div></td>
    <td>Sześciokąt</td>
</tr>
        
        <tr><td colspan="2">
        <button type="submit" class="btn btn-primary float-right">Wyświetl</button></td></tr></tbody> </table> 
    </form>
