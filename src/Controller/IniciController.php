<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ServeiDadesEquips;

class IniciController extends AbstractController
{
    private $serveiDadesEquips;

    public function __construct(ServeiDadesEquips $serveiDadesEquips)
    {
        $this->serveiDadesEquips = $serveiDadesEquips;
    }

    #[Route('/', name: 'inici')]
    public function inici(): Response
    {
        $equips = $this->serveiDadesEquips->obtenirEquips();

        return $this->render('inici.html.twig', [
            'message' => "Gestió d'equips del projecte 2n de DAW",
            'equips' => $equips,
        ]);
    }
}
