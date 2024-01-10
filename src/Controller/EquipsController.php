<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class EquipsController extends AbstractController
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

    #[Route('/equip/{codi}', name: 'equip')]
    public function fitxa($codi)
    {
        if ($codi == null) {
            $equip = reset($this->equips);

            return $this->render('dades_equip.html.twig', [
                'equip' => $equip,
                'imagen_ruta' => 'Impact/assets/img/' . $codi . '.png',
            ]);
        } else {
            $resultatEquip = array_filter($this->equips, function ($equip) use ($codi) {
                return $equip['codi'] == $codi;
            });

            if (count($resultatEquip) > 0) {
                $equip = array_shift($resultatEquip);

                return $this->render('dades_equip.html.twig', [
                    'equip' => $equip,
                    'imagen_ruta' => 'images/' . $codi . '.jpg',
                ]);
            } else {
                $equip = ['codi' => 'null', 'nom' => 'null', 'cicle' => 'null', 'curs' => 'null', 'membres' => ['null', 'null', 'null', 'null']];

                return $this->render('dades_equip_notrobat.html.twig', [
                    'equip' => $equip,
                    'imagen_ruta' => 'images/' . 'null' . 'jpg',
                ]);
            }
        }
    }
}
