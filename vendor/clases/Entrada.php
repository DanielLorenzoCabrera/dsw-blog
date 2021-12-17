<?php

class Entrada{

    private $uid;
    private $idEntrada;
    private $titulo;
    private $tags;
    private $fechaPublicacion;
    private $comentarios;


    public function __construct(int $uid, int $idEntrada, string $titulo, array $tags){
        $this->uid = $uid;
        $this->idEntrada = $idEntrada;
        $this->titulo = $titulo;
        $this->fechaPublicacion = $this->getFechaActual();
        $this->tags = $tags;
    }


    private function getFechaActual(){
        $timeStamp =  getdate( time() );
        //return "{$timeStamp['hours']}:{$timeStamp['minutes']}  {$timeStamp['mday']}/{$timeStamp['mon']}/{$timeStamp['year']}";
        return "date('d/m/Y')";
    }



}


$entrada = new Entrada(1,1,"Ejemplo",["tag","tag2"]);

var_dump($entrada);














?>