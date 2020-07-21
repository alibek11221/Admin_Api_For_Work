<?php

namespace App\Controller;

use App\Repository\AreaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/areas", name="area")
 */
class AreaController extends AbstractController
{
    /**
     * @var AreaRepository
     */
    private AreaRepository $areasRepository;

    public function __construct(AreaRepository $areasRepository)
    {
        $this->areasRepository = $areasRepository;
    }

    /**
     * @Route("/get", name="area")
     */
    public function index()
    {
        $areas = $this->areasRepository->findAll();
        return $this->json($areas, Response::HTTP_OK, [], []);
    }
}
