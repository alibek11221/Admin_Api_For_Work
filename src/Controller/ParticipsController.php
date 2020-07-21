<?php

namespace App\Controller;

use App\Repository\ParticipsRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/particips", name="particips/")
 */
class ParticipsController extends AbstractController
{
    /**
     * @var ParticipsRepository
     */
    private ParticipsRepository $participsRepository;

    public function __construct(ParticipsRepository $participsRepository)
    {

        $this->participsRepository = $participsRepository;
    }

    /**
     * @Route("/bytest", name="getAll", methods={"GET"})
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $projectId = $request->query->get('test');
        $grade5 = $request->query->get('grade5', '');
        try {
            if ($grade5 == '') {
                $particips = $this->participsRepository->getCountOfParticipsByProjectTestId($projectId);
                return $this->json($particips);
            }
            $particips = $this->participsRepository->getCountOfParticipsByProjectTestIdWithGrade5($projectId, $grade5);
            return $this->json($particips);
        } catch (NoResultException $e) {
            return $this->json($e->getMessage(), Response::HTTP_BAD_REQUEST, [], []);
        } catch (NonUniqueResultException $e) {
            return $this->json($e->getMessage(), Response::HTTP_BAD_REQUEST, [], []);
        }
    }
}
