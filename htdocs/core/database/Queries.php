<?php
class Queries{

    protected $pdo;
    public function __construct($pdo){
        $this->pdo=$pdo;
    }


    public function selectOne($id, $tabel){ 
        $query = $this->pdo->prepare("select * from '{$table}' where id='{$id}'");
        $query->execute();
        
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function selectAll($table){ 
        $query = $this->pdo->prepare("select * from {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectNazwaStadionu($id){
        $query = $this->pdo->prepare("select nazwa from stadion where idStadion=:idStadion");
        $query->execute(['idStadion' => $id]); 
        $result = $query->fetchColumn();
        return $result;
    }

    public function addKolo($promien, $srednica, $obwod, $pole){ 
        $query = $this->pdo->prepare(
            "Insert into kolo(typ, promien, srednica, obwod, pole) 
            values(1, '{$promien}', '{$srednica}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    public function addKwadrat($bok, $obwod, $pole){ 
        $query = $this->pdo->prepare(
            "Insert into kwadrat(typ, bok, obwod, pole) 
            values(2, '{$bok}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    
    public function addProstokat($bok1, $bok2, $obwod, $pole){ 
        $query = $this->pdo->prepare(
            "Insert into prostokat(typ, bok1, bok2, obwod, pole) 
            values(3, '{$bok1}', '{$bok2}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    public function addTrojkat($bok1, $bok2, $bok3, $obwod, $pole){ 
        $query = $this->pdo->prepare(
            "Insert into trojkat(typ, bok1, bok2, bok3, obwod, pole) 
            values(3, '{$bok1}', '{$bok2}', '{$bok3}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    public function addPieciokat($bok, $obwod, $pole){ 
        $query = $this->pdo->prepare(
            "Insert into pieciokat(typ, bok, obwod, pole) 
            values(2, '{$bok}', '{$obwod}', '{$pole}')");
        $query->execute();
    }

    public function addSzesciokat($bok, $obwod, $pole){ 
        $query = $this->pdo->prepare(
            "Insert into szesciokat(typ, bok, obwod, pole) 
            values(2, '{$bok}', '{$obwod}', '{$pole}')");
        $query->execute();
    }
}