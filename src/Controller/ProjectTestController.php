<?php

namespace App\Controller;

use App\Repository\ProjecttestsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/projecttest", name="project_test")
 */
class ProjectTestController extends AbstractController
{
    /**
     * @var ProjecttestsRepository
     */
    private ProjecttestsRepository $projecttestsRepository;

    public function __construct(ProjecttestsRepository $projecttestsRepository)
    {

        $this->projecttestsRepository = $projecttestsRepository;
    }

    /**
     * @Route("/byprojectid", name="project_test_by_projectid")
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        if ($projectId = $request->query->get('projectid')) {
            $projectTests = $this->projecttestsRepository->getProjectTestsByProjectId($projectId);
            return $this->json($projectTests);
        }
        return $this->json('ProjectId cannot be null', Response::HTTP_BAD_REQUEST);
    }
}
