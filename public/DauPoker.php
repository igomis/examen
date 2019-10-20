<?php
/**
 * Created by PhpStorm.
 * User: igomis
 * Date: 2019-10-23
 * Time: 13:27
 */

class DauPoker
{
    private $valor;

    public function __construct()
    {
        $this->valor = rand(0,5);
    }

    public function showFigure()
    {
        return "<img src='/img/".$this->Figure().".png' width='80' height='80' />";
    }

    public function score()
    {
        return $this->valor+1;
    }

    public function setValor(int $valor){
        $this->valor = $valor;
    }

    private function Figure(){
        $figure = ['7','8','J','Q','K','A'];
        return $figure[$this->valor];
    }
}