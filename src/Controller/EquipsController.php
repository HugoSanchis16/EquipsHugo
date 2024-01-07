<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController
{
    private $equips = array(
        array(
            "codi" => "1",
            "nom" => "Equip Roig",
            "cicle" => "DAW",
            "curs" => "22/23",
            "membres" => array("Elena", "Vicent", "Joan", "Maria")
        ),
        array(
            "codi" => "2",
            "nom" => "Equip Blau",
            "cicle" => "DAM",
            "curs" => "22/23",
            "membres" => array("Laura", "Pau", "Carla", "Jordi")
        ),
        array(
            "codi" => "3",
            "nom" => "Equip Verd",
            "cicle" => "SMX",
            "curs" => "22/23",
            "membres" => array("Alex", "Sara", "Marc", "Aina")
        ),
        array(
            "codi" => "4",
            "nom" => "Equip Groc",
            "cicle" => "ASIX",
            "curs" => "22/23",
            "membres" => array("Daniel", "Lara", "Pol", "Julia")
        )
    );

    #[Route('/equip/{codi<\d+>?1}', name: 'equip')]
    public function fitxa($codi)
    {
        $resultat = array_filter(
            $this->equips,
            function ($equip) use ($codi) {
                return $equip["codi"] == $codi;
            }
        );
        if (count($resultat) > 0) {
            $resposta = "";
            $resultat = array_shift($resultat); #torna el primer element
            $resposta .= "<ul><li>" . $resultat["nom"] . "</li>" .
                "<li>Codi: " . $resultat["codi"] . "</li>" .
                "<li>Cicle: " . $resultat["cicle"] . "</li>" .
                "<li>Curs: " . $resultat["curs"] . "</li>";

            $resposta .= "<li>Membres:<ul>";
            foreach ($resultat["membres"] as $membre) {
                $resposta .= "<li>" . $membre . "</li>";
            }
            $resposta .= "</ul></li></ul>";

            return new Response("<html><body>$resposta</body></html>");
        } else {
            return new Response("Equip no trobat");
        }
    }

    #[Route('/equip/{text}', name: 'dades_equip')]
    public function buscar($text)
    {
        $resultat = array_filter(
            $this->equips,
            function ($equip) use ($text) {
                return strpos($equip["nom"], $text) !== FALSE;
            }
        );
        $resposta = "";
        if (count($resultat) > 0) {
            foreach ($resultat as $equip) {
                $resposta .= "<ul>";
                $resposta .= "<li>Codi: " . $equip["codi"] . "</li>";
                $resposta .= "<li>Nom: " . $equip["nom"] . "</li>";
                $resposta .= "<li>Cicle: " . $equip["cicle"] . "</li>";
                $resposta .= "<li>Curs: " . $equip["curs"] . "</li>";

                $resposta .= "<li>Membres:<ul>";
                foreach ($equip["membres"] as $membre) {
                    $resposta .= "<li>" . $membre . "</li>";
                }
                $resposta .= "</ul></li>";

                $resposta .= "</ul>";
            }
            return new Response("<html><body>" . $resposta . "</body></html>");
        } else {
            return new Response("No s'han trobat equips");
        }
    }
}
