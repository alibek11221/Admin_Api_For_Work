<?php

namespace App\Controller;

use App\Repository\RsurparticipsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class RsurParticipsController
 * @package App\Controller
 * @Route("/rsurparticips", name="get_by_full_name", methods={"GET"})
 */
class RsurParticipsController extends AbstractController
{
    /**
     * @var RsurparticipsRepository
     */
    private RsurparticipsRepository $rsurparticipsRepository;

    public function __construct(RsurparticipsRepository $rsurparticipsRepository)
    {

        $this->rsurparticipsRepository = $rsurparticipsRepository;
    }

    /**
     * @Route("/byfullname", name="get_by_full_name", methods={"GET"})
     * @param Request $request
     * @return JsonResponse
     */
    public function getByFullName(Request $request)
    {
        $name = $request->query->get('name', '');
        $secondName = $request->query->get('secondname', '');
        $surName = $request->query->get('surname', '');
        $particips = $this->rsurparticipsRepository->findByNameParts($surName, $name, $secondName);
        return $this->json($particips);
    }

    /**
     * @Route("/byschool", name="get_by_school_id", methods={"GET"})
     * @param Request $request
     * @return JsonResponse
     */
    public function getBySchool(Request $request)
    {
        $school = $request->query->get('id', '');
        $particitps = $this->rsurparticipsRepository->findBySchoolId($school);
        return $this->json($particitps);
    }
}
