<?php

class Prostokat{

    private $id;
    private $typ;
    private $bok1;
    private $bok2;
    private $pole;
    private $obwod;
    
    private function obliczPole($bok1, $bok2){
        $this->pole = $bok1 * $bok2;
    }

    private function obliczObwod($bok1, $bok2){
        $this->obwod = $bok1 * 2 + $bok2 * 2;
    }

    public function getFromUser($bok1, $bok2){
        $this->bok1=$bok1;
        $this->bok2=$bok2;
        $this->obliczObwod($bok1, $bok2);
        $this->obliczPole($bok1, $bok2);
    }

    public function getFromDB($id){
        $result = $app['database']->selectOne($id, "prostokat");
        $this->id=$result['id'];
        $this->typ=$result['typ'];
        $this->bok1=$result['bok1'];
        $this->bok2=$result['bok2'];
        $this->obwod=$result['obwod'];
        $this->pole=$result['pole'];
    }

    public function displayOne(){
        echo "Prostokat o id: ".$this->id."<br>";
        echo "Bok1 to: ".$this->bok1."<br>";
        echo "Bok2 to: ".$this->bok2."<br>";
        echo "Pole to: ".$this->pole."<br>";
        echo "Obwod to: ".$this->obwod."<br>";
    }

    public function displayAll(){
        $result = $app['database']->selectAll("prostokat");
        foreach($result as $prostokat):
        echo "Prostokat o id: ".$prostokat['id']."<br>";
        echo "Bok1 to: ".$prostokat['bok1']."<br>";
        echo "Bok2 to: ".$prostokat['bok2']."<br>";
        echo "Pole to: ".$prostokat['pole']."<br>";
        echo "Obwod to: ".$prostokat['obwod']."<br>";
        endforeach;

    }
    public function returnAll(){
        $result = $app['database']->selectAll("kolo");
        return $result;
    }
    public function LoadToDB(){
        $app['database']->addProstokat( $this->bok1, $this->bok2, $this->obwod, $this->pole);
    }

}