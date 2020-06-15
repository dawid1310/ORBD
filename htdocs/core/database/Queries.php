<?php
class Queries{

    protected $pdo;
    public function __construct($pdo){
        $this->pdo=$pdo;
    }

    public function selectAll($table){ 
        $query = $this->pdo->prepare("select * from {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete($tabela, $id){
        $query = $this->pdo->prepare("delete from sys.{$tabela} where id={$id}");
        $query->execute();
    }

    public function deleteObj($tabela, $id){
        $id=$id*1;
        $query = $this->pdo->prepare("delete from sys.{$tabela} o where o.id={$id}");
        $query->execute();
    }

    public function maxId($tabela){
        $query = $this->pdo->prepare("
        Select max(id) from sys.{$tabela}
        ");
        $query->execute();
        $result = $query->fetchColumn();
        return $result;
    }

    public function addKolo($app, $promien, $srednica, $obwod, $pole){ 
        $nextId=$app['database']->maxId("kolo")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.kolo(id, typ, promien, srednica, obwod, pole) 
            values({$nextId}, 1, '{$promien}', '{$srednica}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    public function addKoloOBJ($app, $pole, $obwod, $promien, $srednica ){ 
        $nextId=$app['database']->maxId("koloOBJ")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.koloOBJ 
            values({$nextId}, '{$pole}', '{$obwod}', '{$promien}', '{$srednica}')");
        $query->execute();
    }

    public function modifyKolo($id, $promien, $srednica, $obwod, $pole, $tabela){
        $query = $this->pdo->prepare("
        Update sys.{$tabela} set promien = {$promien}, srednica = {$srednica}, pole = {$pole}, obwod = {$obwod} 
        where id = {$id}
        ");
        $query->execute();
    }
    
    public function addKwadrat($app, $bok, $obwod, $pole){
        $nextId=$app['database']->maxId("kwadrat")+1;
        $query = $this->pdo->prepare("
            Insert into sys.kwadrat(id, typ, bok, pole, obwod) 
            values({$nextId}, 2, {$bok}, {$pole}, {$obwod})
            ");
            $query->execute();
    }

    public function addKwadratOBJ($app, $bok, $obwod, $pole){
        $nextId=$app['database']->maxId("kwadratobj")+1;
        $query = $this->pdo->prepare("
        INSERT INTO sys.KwadratObj
        VALUES({$nextId}, {$bok}, {$obwod}, {$pole})    
        ");
        $query->execute();
    }

    public function modifyKPS($id, $bok, $obwod, $pole, $tabela){
        $query = $this->pdo->prepare("
        Update sys.{$tabela} set bok = {$bok}, pole = {$pole}, obwod = {$obwod} 
        where id = {$id}
        ");
        $query->execute();
    }
    
    public function addProstokat($app, $bok1, $bok2, $obwod, $pole){ 
        $nextId=$app['database']->maxId("prostokat")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.prostokat(id, typ, bok1, bok2, obwod, pole) 
            values({$nextId}, 3, '{$bok1}', '{$bok2}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    public function addProstokatOBJ($app, $pole, $obwod, $bok1, $bok2){ 
        $nextId=$app['database']->maxId("prostokatOBJ")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.prostokatOBJ 
            values({$nextId},'{$pole}', '{$obwod}','{$bok1}', '{$bok2}' )");
        $query->execute();
    }

    public function modifyProstokat($id, $bok1, $bok2, $obwod, $pole, $tabela){
        $query = $this->pdo->prepare("
        Update sys.{$tabela} set bok1 = {$bok1}, bok2 = {$bok2}, pole = {$pole}, obwod = {$obwod} 
        where id = {$id}
        ");
        $query->execute();
    }

    public function addTrojkat($app, $bok1, $bok2, $bok3, $obwod, $pole){ 
        $nextId=$app['database']->maxId("trojkat")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.trojkat(id, typ, bok1, bok2, bok3, obwod, pole) 
            values({$nextId}, 2, '{$bok1}', '{$bok2}', '{$bok3}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    public function addTrojkatOBJ($app, $pole, $obwod, $bok1, $bok2, $bok3){ 
        $nextId=$app['database']->maxId("trojkatObj")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.trojkatObj
            values({$nextId}, '{$pole}', '{$obwod}', '{$bok1}', '{$bok2}', '{$bok3}')");
        $query->execute();
    }

    public function modifyTrojkat($id, $bok1, $bok2, $bok3, $obwod, $pole, $tabela){
        $query = $this->pdo->prepare("
        Update sys.{$tabela} set bok1 = {$bok1}, bok2 = {$bok2}, bok3 = {$bok3}, pole = {$pole}, obwod = {$obwod} 
        where id = {$id}
        ");
        $query->execute();
    }

    public function addPieciokat($app, $bok, $obwod, $pole){ 
        $nextId=$app['database']->maxId("pieciokat")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.pieciokat(id,typ, bok, obwod, pole) 
            values({$nextId}, 2, '{$bok}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    public function addPieciokatOBJ($app, $pole, $obwod, $bok){ 
        $nextId=$app['database']->maxId("pieciokatOBJ")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.pieciokatOBJ 
            values({$nextId},'{$pole}', '{$obwod}', '{$bok}' )");
        $query->execute();
    }

    public function addSzesciokat($app, $bok, $obwod, $pole){ 
        $nextId=$app['database']->maxId("szesciokat")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.szesciokat(id, typ, bok, obwod, pole) 
            values({$nextId}, 2, '{$bok}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    public function addSzesciokatOBJ($app,$pole, $obwod, $bok){ 
        $nextId=$app['database']->maxId("szesciokatOBJ")+1;
        $query = $this->pdo->prepare(
            "Insert into sys.szesciokatOBJ 
            values({$nextId},'{$pole}', '{$obwod}','{$bok}' )");
        $query->execute();
    }

}//święta klamra nietykalna
