<?php

class Kwadrat{

    private $id;
    private $typ;
    private $bok;
    private $pole;
    private $obwod;
    
    private function obliczPole($bok){
        $this->pole = pow($bok, 2);
    }

    private function obliczObwod($bok){
        $this->obwod = $bok*4;
    }

    public function getFromUser($bok){
        $this->bok=$bok;
        $this->obliczObwod($bok);
        $this->obliczPole($bok);
    }

    public function getFromDB($id){
        $result = $app['database']->selectOne($id, "kwadrat");
        $this->id=$result['id'];
        $this->typ=$result['typ'];
        $this->bok=$result['bok'];
        $this->obwod=$result['obwod'];
        $this->pole=$result['pole'];
    }

    public function displayKwadrat(){
        echo "Kwadrat o id: ".$this->id."<br>";
        echo "Bok to: ".$this->bok."<br>";
        echo "Pole to: ".$this->pole."<br>";
        echo "Obwod to: ".$this->obwod."<br>";
    }

    public function LoadToDB(){
        $app['database']->addKwadrat($this->bok, $this->obwod, $this->pole);
    }

}