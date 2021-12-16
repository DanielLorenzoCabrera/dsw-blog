<?php

class Blog{

    private $titulo;
    private $entradas;
    private $usuarios;

    public function __construct($titulo){
        $this->titulo = $titulo;
    }

    
    public function getTitulo(){
        return $this->titulo;
    }


    public function getEntradas(){
        return $this->entradas;
    }
    
    
    public function getUsuarios(){
        return $this->usuarios;
    }



}









?>