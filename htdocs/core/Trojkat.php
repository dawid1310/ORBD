<?php

class Trojkat{

    private $id;
    private $typ;
    private $bok1;
    private $bok2;
    private $bok3;
    private $pole;
    private $obwod;
    
    private function obliczPole($bok1, $bok2, $bok3){
        $this->obliczObwod($bok1, $bok2, $bok3);
        $pol_obwodu = ($this->obwod) / 2;
        $this->pole = sqrt(
            $pol_obwodu *($pol_obwodu - $bok1)*($pol_obwodu - $bok2)*($pol_obwodu - $bok3)*
        );
    }

    private function obliczObwod($bok1, $bok2, $bok3){
        $this->obwod = $bok1 + $bok2 + $bok3;
    }

    public function getFromUser($bok1, $bok2, $bok3){
        $this->bok1=$bok1;
        $this->bok2=$bok2;
        $this->bok3=$bok3;
        $this->obliczObwod($bok1, $bok2, $bok3);
        $this->obliczPole($bok1, $bok2, $bok3);
    }

    public function getFromDB($id){
        $result = $app['database']->selectOne($id, "kwadrat");
        $this->id=$result['id'];
        $this->typ=$result['typ'];
        $this->bok=$result['bok1'];
        $this->bok=$result['bok2'];
        $this->bok=$result['bok3'];
        $this->obwod=$result['obwod'];
        $this->pole=$result['pole'];
    }

    public function displayTrojkat(){
        echo "Trojkat o id: ".$this->id."<br>";
        echo "Bok1 o id: ".$this->bok1."<br>";
        echo "Bok2 o id: ".$this->bok2."<br>";
        echo "Bok3 o id: ".$this->bok3."<br>";
        echo "Pole to: ".$this->pole."<br>";
        echo "Obwod to: ".$this->obwod."<br>";
    }

    public function LoadToDB(){
        $app['database']->addTrojkat($this->bok1, $this->bok2, $this->bok3, $this->obwod, $this->pole);
    }

}
