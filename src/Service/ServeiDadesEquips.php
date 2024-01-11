<?php

namespace App\Service;

class ServeiDadesEquips
{
    private $equips;

    public function __construct()
    {
        $this->equips = array(
            array(
                "codi" => "1",
                "nom" => "Equip Roig",
                "cicle" => "DAW",
                "curs" => "22/23",
                "membres" => array("Elena", "Vicent", "Joan", "Maria"),
                "color" => "red"
            ),
            array(
                "codi" => "2",
                "nom" => "Equip Blau",
                "cicle" => "DAM",
                "curs" => "22/23",
                "membres" => array("Laura", "Pau", "Carla", "Jordi"),
                "color" => "blue"
            ),
            array(
                "codi" => "3",
                "nom" => "Equip Verd",
                "cicle" => "SMX",
                "curs" => "22/23",
                "membres" => array("Alex", "Sara", "Marc", "Aina"),
                "color" => "green"
            ),
            array(
                "codi" => "4",
                "nom" => "Equip Groc",
                "cicle" => "ASIX",
                "curs" => "22/23",
                "membres" => array("Daniel", "Lara", "Pol", "Julia"),
                "color" => "yellow"
            )
        );
    }
    public function obtenirEquips()
    {
        return $this->equips;
    }
}
