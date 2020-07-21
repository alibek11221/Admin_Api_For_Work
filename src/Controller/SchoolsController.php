<?php

namespace App\Controller;

use App\Repository\SchoolsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/schools", name="schools")
 */
class SchoolsController extends AbstractController
{


    /**
     * @var SchoolsRepository
     */
    private $repository;

    public function __construct(SchoolsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/namesbyarea/{areaId}")
     */
    public function index($areaId)
    {
        $schools = $this->repository->getSchoolNamesByArea($areaId);
        return $this->json($schools);
    }
}
