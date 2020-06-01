<?php

class Kwadrat{

    private $id;
    private $typ=4;
    private $bok;
    private $pole;
    private $obwod;
    
    private function obliczPole($bok){
        $this->pole = pow($bok, 2);
    }

    private function obliczObwod($bok){
        $this->obwod = $bok*4;
    }

    private function getId($app){
        $this->id = $app['database']->selectId("kwadrat")+1;
    }

    public function getFromUser($bok, $app){
        $this->bok=$bok;
        $this-getId($app);
        $this->obliczObwod($bok);
        $this->obliczPole($bok);
    }

    public function getFromDB($id, $app){
        $result = $app['database']->selectOne($id, "kwadrat");
        $this->id=$result['id'];
        $this->typ=$result['typ'];
        $this->bok=$result['bok'];
        $this->srednica=$result['srednica'];
        $this->obwod=$result['obwod'];
        $this->pole=$result['pole'];
    }

    public function displayKwadrat(){
        echo "Bok to: ".$this->bok."<br>";
        echo "Pole to: ".$this->pole."<br>";
        echo "Obwod to: ".$this->obwod."<br>";
    }

    public function LoadToDB($app){
        $app['database']->addKwadrat($this->$id, $this->$typ, $this->bok, $this->obwod, $this->pole);
    }

}