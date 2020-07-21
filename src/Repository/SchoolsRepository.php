<?php

namespace App\Repository;

use App\Entity\Schools;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use function Doctrine\ORM\QueryBuilder;

/**
 * @method Schools|null find($id, $lockMode = null, $lockVersion = null)
 * @method Schools|null findOneBy(array $criteria, array $orderBy = null)
 * @method Schools[]    findAll()
 * @method Schools[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SchoolsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Schools::class);
    }

    // /**
    //  * @return Schools[] Returns an array of Schools objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Schools
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function getSchoolNamesByArea($areaId)
    {
        $qb = $this->createQueryBuilder('s')
            ->select('s.id', 's.name')
            ->where('s.areacode=:areaId')
            ->setParameter('areaId', $areaId)
            ->getQuery()
            ->getResult();
        return $qb;
    }
}
