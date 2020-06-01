<?php

class Pieciokat{

    private $id;
    private $typ;
    private $bok;
    private $pole;
    private $obwod;
    
    function cot($rad)
    {
    return tan(M_PI_2 - rad2deg($rad));
    }

    private function obliczPole($bok){
        $this->pole = 5*pow($bok, 2)/4*cot(36);
    }

    private function obliczObwod($bok){
        $this->obwod = $bok*5;
    }

    private function getId($app){
        $this->id = $app['database']->selectId("pieciokat")+1;
    }

    public function getFromUser($bok, $app){
        $this->bok=$bok;
        $this->getId($app);
        $this->obliczObwod($bok);
        $this->obliczPole($bok);
    }

    public function getFromDB($id){
        $result = $app['database']->selectOne($id, "pieciokat");
        $this->id=$result['id'];
        $this->typ=$result['typ'];
        $this->bok=$result['bok'];
        $this->obwod=$result['obwod'];
        $this->pole=$result['pole'];
    }

    public function displayPieciokat(){
        echo "Pieciokat o id: ".$this->id."<br>";
        echo "Bok to: ".$this->bok."<br>";
        echo "Pole to: ".$this->pole."<br>";
        echo "Obwod to: ".$this->obwod."<br>";
    }

    public function LoadToDB($app){
        $app['database']->addPieciokat($this->bok, $this->obwod, $this->pole);
    }

}