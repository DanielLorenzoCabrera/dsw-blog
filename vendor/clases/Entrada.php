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
        //$this->fechaPublicacion

    }



}

















?>