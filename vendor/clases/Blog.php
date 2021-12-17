<?php

include_once "Entrada.php";
include_once "Usuario.php";


class Blog{

    private $blogId;
    private $titulo;
    private $entradas;
    private $tiposUsuarios;
    

    public function __construct(string $titulo){
        $this->titulo = $titulo;
        $this->entradas = [];
        $this->usuarios = [];
        $tiposUsuarios = [
            "0" => "admin",
            "1" => "autor",
            "2" => "usuario"
        ];
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