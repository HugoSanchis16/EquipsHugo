<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\ServeiDadesEquips;


class EquipsController extends AbstractController
{
    private $serveiDadesEquips;

    public function __construct(ServeiDadesEquips $serveiDadesEquips)
    {
        $this->serveiDadesEquips = $serveiDadesEquips;
    }
    #[Route('/equip/{codi}', name: 'equip')]
    public function fitxa($codi)
    {
        if ($codi == null) {
            $equip = reset($this->serveiDadesEquips->obtenirEquips());

            return $this->render('dades_equip.html.twig', [
                'equip' => $equip,
            ]);
        } else {
            $resultatEquip = array_filter($this->serveiDadesEquips->obtenirEquips(), function ($equip) use ($codi) {
                return $equip['codi'] == $codi;
            });

            if (count($resultatEquip) > 0) {
                $equip = array_shift($resultatEquip);

                return $this->render('dades_equip.html.twig', [
                    'equip' => $equip,
                ]);
            } else {
                $equip = ['codi' => 'null', 'nom' => 'null', 'cicle' => 'null', 'curs' => 'null', 'membres' => ['null', 'null', 'null', 'null']];

                return $this->render('dades_equip_notrobat.html.twig', [
                    'equip' => $equip,
                    'imagen_ruta' => 'Impact/assets/img/' . $codi . '.png',
                ]);
            }
        }
    }
}
