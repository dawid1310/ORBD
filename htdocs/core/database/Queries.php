<?php
class Queries{

    protected $pdo;
    public function __construct($pdo){
        $this->pdo=$pdo;
    }

    public function dodajTypy(){
        $query = $this->pdo->prepare("
            CREATE TYPE Kwadrat_typ
                AS OBJECT(
                Bok NUMBER(7),       
                Pole NUMBER(7),        
                Obwod NUMBER(7),        
                MEMBER FUNCTION obwod_i_pole RETURN VARCHAR2,       
                PRAGMA RESTRICT_REFERENCES(obwod_i_pole, WNDS, RNDS, WNPS, RNPS ));       

            CREATE TYPE BODY Kwadrat_typ AS       
                MEMBER FUNCTION obwod_i_pole RETURN VARCHAR2 IS       
                BEGIN      
                    RETURN ('Pole kwadratu to '||Pole || ', obwod kwadratu to ' || obwod );      
                END obwod_i_pole;      
                END;
        ");
        $query->execute();
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
        $query = $this->pdo->prepare("
            Insert into sys.kwadrat(typ, bok, obwod, pole) 
            values(2, '{$bok}', '{$obwod}', '{$pole}')
            ");
            echo $bok;
            $query->execute();
    }

    public function addKwadratOBJ($bok, $obwod, $pole){ 
        $query = $this->pdo->prepare("
        INSERT INTO sys.a_Kwadrat
        VALUES({$bok}, {$obwod}, {$pole})    
        ");
        var_dump($query);
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