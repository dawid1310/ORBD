<?php

class Pieciokat{

    private $id;
    private $typ;
    private $bok;
    private $pole;
    private $obwod;
    

    public function setId($id){
        $this->id = $id;
    }

    public function modify($app, $tabela){
        $app['database']->modifyKPS($this->id, $this->bok, $this->obwod, $this->pole, $tabela);
    }
    
    private function obliczPole($bok){

        $this->pole = sqrt(25+10*sqrt(5))/4*pow($bok, 2);
    }

    private function obliczObwod($bok){
        $this->obwod = $bok*5;
    }

    public function getFromUser($bok){
        $this->bok=$bok;
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
        $app['database']->addPieciokat($app, $this->bok, $this->obwod, $this->pole);
    }
    public function LoadToDBOBJ($app){
        $app['database']->addPieciokatOBJ($app, $this->pole, $this->obwod, $this->bok);
    }

}