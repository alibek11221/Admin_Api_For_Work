<?php

namespace App\Controller;

use App\Entity\Projecttests;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/projects", name="projects")
 */
class ProjectsController extends AbstractController
{
    /**
     * @var ProjectsRepository
     */
    private ProjectsRepository $repository;

    /**
     * ProjectsController constructor.
     * @param ProjectsRepository $repository
     */
    public function __construct(ProjectsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/getall", name="getall_projects")
     */
    public function getAll()
    {
        $projects = $this->repository->findAll();
        return $this->json($projects);
    }

    /**
     * @Route("/byId/{id}", name="get_by_id_projects")
     * @param $id
     * @return JsonResponse
     */
    public function getById($id)
    {
        $projects = $this->getDoctrine()->getRepository(Projecttests::class)
            ->find($id);
        return $this->json($projects);
    }
}
