<?php
interface parametersOfHouse{
    function typeofHouse();
    function levels();
    function porches();
    function appartmentsOnTheFloor();

}

abstract class  realization{
    public $numberhouse;
    public $nameOfTypeHome;


    function __construct($numberhouse, $nameOfTypeHome)
    {
      $this->nameOfTypeHome=$nameOfTypeHome;
      $this->numberhouse=$numberhouse;
    }
}
class result extends realization implements parametersOfHouse
{

    public function typeofHouse()
    {
        if (true) {

            if ($this->nameOfTypeHome == 'khrushevka') {
                $this->type = 'khrushevka';
            } elseif ($this->nameOfTypeHome == 'panel') {
                $this->type = 'panel';
            }
        }
//        echo $this->type;
        return $this->type;


    }

    public function porches()
    {
        if ($this->type == 'khrushevka') {
            $this->results = 5;
        } elseif ($this->type == 'panel') {
            $this->results = 8;
        }
//        echo $this->results;
        return $this->results;
    }

    public function levels()
    {

        if ($this->type == 'khrushevka') {
            $this->levels = 5;
        } elseif ($this->type == 'panel') {
            $this->levels = 9;
        }
//        echo $this->levels;
        return $this->levels;
    }


    public function appartmentsOnTheFloor()
    {
        if ($this->type == 'khrushevka') {
            $this->appartmentsOnTheFloor = 2;
        } elseif ($this->type == 'panel') {
            $this->appartmentsOnTheFloor = 4;
        }

        return $this->appartmentsOnTheFloor;

    }


    public function calculateYourPorcheAndLevel()
    {
        if ($this->type == 'panel') {

            if($this->numberhouse) {
                $yourPorches = ceil($this->numberhouse / 36);
                $result = $this->appartmentsOnTheFloor * $this->levels;
                $maximumhouse = $result * $yourPorches;
                $resultmaximumhouse = $maximumhouse - $this->numberhouse;
                $resultyourhouselevel = $resultmaximumhouse / $this->appartmentsOnTheFloor;
                $yourlevel = ceil($this->levels - $resultyourhouselevel);
            }
                return  ['your level : '.$yourlevel .' /n your porche : '.$yourPorches];
        }
        if ($this->type == 'khrushevka') {

            if($this->numberhouse) {
                $yourPorches = ceil($this->numberhouse / 10);
                $result = $this->appartmentsOnTheFloor * $this->levels;
                $maximumhouse = $result * $yourPorches;
                $resultmaximumhouse = $maximumhouse - $this->numberhouse;
                $resultyourhouselevel = $resultmaximumhouse / $this->appartmentsOnTheFloor;
                $yourlevel = ceil($this->levels - $resultyourhouselevel);
            }
            return  ['your level : '.$yourlevel .' /n your porche : '.$yourPorches];
        }
    }

}
//houses can pe khrushevka or panel
$realization = new result(95,'panel');
$realization->typeofHouse();
$realization->porches();
$realization->levels();
$realization->appartmentsOnTheFloor();
var_dump($realization->calculateYourPorcheAndLevel());
























