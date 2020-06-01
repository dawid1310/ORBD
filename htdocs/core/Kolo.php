<?php

class Kolo{

    private $id;
    private $typ;
    private $promien;
    private $srednica;
    private $pole;
    private $obwod;
    
    private function obliczPole($promien){
        $this->pole = pow($promien, 2)*pi();
    }

    private function obliczObwod($promien){
        $this->obwod = $promien*2*pi();
    }

    private function getId($app){
        $this->id = $app['database']->selectId("kolo")+1;
    }

    public function getFromUser($promien, $app){
        $this->promien=$promien;
        $this->srednica=2*$promien;
        $this->getId($app);
        $this->obliczObwod($promien);
        $this->obliczPole($promien);
    }

    public function getFromDB($id){
        $result = $app['database']->selectOne($id, "kolo");
        $this->id=$result['id'];
        $this->typ=$result['typ'];
        $this->promien=$result['promien'];
        $this->srednica=$result['srednica'];
        $this->obwod=$result['obwod'];
        $this->pole=$result['pole'];
    }

    public function displayKolo(){
        echo "Kolo o id: ".$this->id."<br>";
        echo "Promien to: ".$this->promien."<br>";
        echo "Srednica to: ".$this->srednica."<br>";
        echo "Pole to: ".$this->pole."<br>";
        echo "Obwod to: ".$this->obwod."<br>";
    }

    public function LoadToDB($app){
        $app['database']->addKolo($this->promien, $this->srednica, $this->obwod, $this->pole);
    }

}