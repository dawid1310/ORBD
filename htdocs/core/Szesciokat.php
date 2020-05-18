<?php

class Szesciokat{

    private $id;
    private $typ;
    private $bok;
    private $pole;
    private $obwod;
    

    private function obliczPole($bok){
        $this->pole = (3*pow($bok, 2)*sqrt(3))/2;
    }

    private function obliczObwod($bok){
        $this->obwod = $bok*6;
    }

    public function getFromUser($bok){
        $this->bok=$bok;
        $this->obliczObwod($bok);
        $this->obliczPole($bok);
    }

    public function getFromDB($id){
        $result = $app['database']->selectOne($id, "szesciokat");
        $this->id=$result['id'];
        $this->typ=$result['typ'];
        $this->bok=$result['bok'];
        $this->obwod=$result['obwod'];
        $this->pole=$result['pole'];
    }

    public function displayOne(){
        echo "Szesciokat o id: ".$this->id."<br>";
        echo "Bok to: ".$this->bok."<br>";
        echo "Pole to: ".$this->pole."<br>";
        echo "Obwod to: ".$this->obwod."<br>";
    }

    public function displayAll(){
        $result = $app['database']->selectAll("szesciokat");
        foreach($result as $szesciokat):
        echo "Szesciokat o id: ".$szesciokat['id']."<br>";
        echo "Bok to: ".$szesciokat['bok']."<br>";
        echo "Pole to: ".$szesciokat['pole']."<br>";
        echo "Obwod to: ".$szesciokat['obwod']."<br>";
        endforeach;

    }
    public function returnAll(){
        $result = $app['database']->selectAll("kolo");
        return $result;
    }
    public function LoadToDB(){
        $app['database']->addSzesciokat($this->bok, $this->obwod, $this->pole);
    }

}