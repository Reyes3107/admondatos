<?php

class Contacto
{

    public $nombre;
    public $genero;
    public $duracion;
    public $clasificacion;
    public $protagonistas;

    public function __construct(string $nom, string $gen, string $dur, string $clas, string $prot)
{
        $this->nombre = $nom;
        $this->genero = $gen;
        $this->duracion = $dur;
        $this->clasificacion = $clas;
        $this->protagonistas = $prot;

}
}